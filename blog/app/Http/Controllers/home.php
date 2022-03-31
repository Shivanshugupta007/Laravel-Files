<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\tag;
use App\Models\post;

class home extends Controller
{
    public function categorie()
    {
        $data = categorie::all();
        return view('categories.index',['todo'=>$data]);
    }
    public function tag()
    {
        $data = tag::all();
        return view('tags.index',['fetch'=>$data]);
    }
    public function post()
    {
        $data = post::all();
        $categorie = categorie::all();
        return view('posts.index',['data'=>$data,'categorie'=>$categorie]);
    }
}

