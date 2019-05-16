<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
//use Input;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Input;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = project::orderBy('created_at','desc')->get();
        return view('project',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $project = new project;
        
            $project->title = $request->get('title');
            $project->description = $request->get('description');
            $project->start_date = $request->get('start_date');
            $project->end_date = $request->get('end_date');
            $project->language = $request->get('language');
            $project->technology = $request->get('technology');
            $project->ide = $request->get('ide');
            $project->document = $request->get('document');
            $project->presentation = $request->get('presentation');
            $project->image = $request->get('image');

            $rules= array(
                'title' => 'required',
                'description' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'language' => 'required',
                'technology' => 'required',
                'ide' => 'required',
                'document' => 'required|max:500000|mimes:doc,docx,pdf',
                'presentation' => 'required|max:500000|mimes:pptx',
                'image' => 'required|max:500000|mimes:jpg,jpeg,png',
            );

            $validator=validator::make(Input::all(),$rules);
            // $validator=validator::make($request->get('document')->all(),$rules);
            if ($validator->fails()) {
                $message=$validator->messages();
                return Redirect::to('project/create')->withInput()->withErrors($validator);
            } 
            else if($validator->passes()) {
                
                //Checking valid document file...
                if (Input::file('document')->isValid()) {

                    //get file name with extension of the file...
                    $fileName=$request->document->getClientOriginalName();

                    //set the destination path...    //It means Storage/app/Public/up_file path.
                    $request->document->storeAs('public/up_file',$fileName);
                    $project->document = $fileName;


                } else {
                    return Redirect::to('project/create')->withErrors($validator);
                }

                //Checking valid presentation file...
                if (Input::file('presentation')->isValid()) {

                    //get file name with extension of the file...
                    $fileName=$request->presentation->getClientOriginalName();
                    //set the destination path...    //It means App/Public/up_file path.
                    $request->presentation->storeAs('public/up_file',$fileName);
                    $project->presentation = $fileName;

                } else {
                    return Redirect::to('project/create')->withErrors($validator);
                }

                //Checking valid image file...
                if (Input::file('image')->isValid()) {

                    $fileName=$request->image->getClientOriginalName();
                    //set the destination path...    //It means App/Public/up_file path.
                    $request->image->storeAs('public/up_file',$fileName);
                    $project->image = $fileName;

                } else {
                    return Redirect::to('project/create')->withErrors($validator);
                }

            
            $project->save();
            return redirect()->route('home')->with('success','Project Uploaded Successfully');
                
            }
                
            

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $project= project::find($id);
        return view('editPage.projectDetails')->with('project',$project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project= project::find($id);
        return view('editPage.projectEdit',compact('project','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project= project::find($id);

        $project->title = $request->get('title');
        $project->description = $request->get('description');
        $project->start_date = $request->get('start_date');
        $project->end_date = $request->get('end_date');
        $project->language = $request->get('language');
        $project->technology = $request->get('technology');
        $project->ide = $request->get('ide');
        $project->presentation = $request->get('presentation');
        $project->image = $request->get('image');

        $rules= array(
                'title' => 'required',
                'description' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'language' => 'required',
                'technology' => 'required',
                'ide' => 'required',
                'document' => 'required|max:50000|mimes:doc,docx,pdf',
                'presentation' => 'required|max:50000|mimes:pptx',
                'image' => 'required|max:5000|mimes:jpg,jpeg,png',
            );


            $validator=validator::make(Input::all(),$rules);
            if ($validator->fails()) {
                $message=$validator->messages();
                echo"
                    <script>
                        alert('Update Failed.');
                    </script>
                ";
                
                return view('home');
            } 
            else if($validator->passes()) {

               if (Input::file('document')->isValid()) {

                    //get file name with extension of the file...
                    $fileName=$request->document->getClientOriginalName();

                    //set the destination path...    //It means Storage/app/Public/up_file path.
                    $request->document->storeAs('public/up_file',$fileName);
                    $project->document = $fileName;


                } else {
                    echo"
                    <script>
                        alert('Update Failed.Some errors occurs in document file');
                    </script>
                ";
                }

                //Checking valid presentation file...
                if (Input::file('presentation')->isValid()) {

                    //get file name with extension of the file...
                    $fileName=$request->presentation->getClientOriginalName();
                    //set the destination path...    //It means App/Public/up_file path.
                    $request->presentation->storeAs('public/up_file',$fileName);
                    $project->presentation = $fileName;

                } else {
                    echo"
                    <script>
                        alert('Update Failed.Some errors occurs in presentation file');
                    </script>
                ";
                }

                //Checking valid image file...
                if (Input::file('image')->isValid()) {

                    $fileName=$request->image->getClientOriginalName();
                    //set the destination path...    //It means App/Public/up_file path.
                    $request->image->storeAs('public/up_file',$fileName);
                    $project->image = $fileName;

                } else {
                    echo"
                    <script>
                        alert('Update Failed.Some errors occurs in image file');
                    </script>
                ";
                }

            
            $project->save();
            return redirect()->route('home')->with('success','Project Updated Successfully');
                
            }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = project::find($id);
        $project->delete();
        return redirect()->route('home')->with('success','Project Deleted Successfully');
    }
}
