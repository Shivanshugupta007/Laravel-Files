<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;

class TagController extends Controller
{
    public function index()
    {
        //return view('tags/index')->with('fetch',tag::all());
    }
    public function addnew()
    {
        return view('tags/create');
    }
    public function adding(Request $new)
    {
        $tab = new tag;
        $tab->name=$new->name;
        $tab->save();
        return redirect('/tag');
    }
    public function tagedit($id)
    {
        return view('tags/edit')->with('old',tag::find($id));
    }
    public function again(Request $again,$id)
    {
        $tab = tag::find($again->id);
        $tab->name=$again->name;
        $tab->save();
        return redirect('/tag');
    }
    public function remove($id)
    {
        $del = tag::find($id);
        $del->delete();
        return redirect('/tag');
    }
}
