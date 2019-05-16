<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = message::orderBy('created_at','desc')->get();
        return view('message',compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'topic' => 'required',
            'description' => 'required'
        ]);

        $message = new message([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'topic' => $request->get('topic'),
            'description' => $request->get('description')

        ]);
        //$message->save();
        //return redirect()->route('/')->with('success','Message Sent Successfully');
        if ($message->save()) {
            echo "<script>
                alert('Message Sent Successfully');
            </script>";
            return view('about');
        } else {
            
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = message::find($id);
        $message->delete();
        return redirect()->route('home')->with('success','Message Deleted Successfully');

    }
        
}
