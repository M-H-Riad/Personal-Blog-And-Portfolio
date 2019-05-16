<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Collection\paginate;
use Illuminate\Http\Request;
use App\article;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = article::orderBy('created_at','desc')->get();
        return view('article',compact('article'));
        //return view('viewArticles',compact('article'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('writeArticle');
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
            'title' => 'required',
            'description' => 'required',
        ]);

        $article = new article([
            'title' => $request->get('title'),
            'description' => $request->get('description')

        ]);
        $article->save();
        return redirect()->route('home')->with('success','Article Uploaded Successfully');
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
        $article= article::find($id);
        return view('editPage.articleEdit',compact('article','id'));
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
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);

        $article= article::find($id);

        $article->title = $request->input('title');
        $article->description = $request->input('description');

        $article->save();
        return redirect()->route('home')->with('success','Article Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = article::find($id);
        $article->delete();
        return redirect()->route('home')->with('success','Article Deleted Successfully');
    }
}
