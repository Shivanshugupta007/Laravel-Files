<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\categorie;
use App\Models\tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data=post::all();
        //$categorie=categorie::all();
        //return view('posts/index',['data'=>$data,'categorie'=>$categorie]);
        //return view('posts/index')->with('extract',post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = categorie::all();
        $tags = tag::all();
        return view('posts.create',['categorie'=>$categorie,'tag'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $add = new post;
        $add->title=$request->title;
        $add->description=$request->desc;
        $add->categorie_id=$request->categorie_id;
       
        if($request->image)
        {
            $file=request()->file('image');
            $filename=time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('images/user_image'),$filename);
            $add->image=$filename;
        }
        $add->save();
        $add->tags()->attach($request->tag_id);
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post,$id)
    {
        return view('posts/edit')->with('pas',post::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post,$id)
    {
        $set = post::find($request->id);
        $set->title=$request->title;
        $set->description=$request->desc;
        if($request->image)
        {
            $file=request()->file('image');
            $filename=time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('images/user_image'),$filename);
            $set->image=$filename;
        }
        $set->save();
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post,$id)
    {
        $rem = post::find($id);
        $rem->delete();
        return redirect('/post');
    }
}
