<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    public function entry(Request $req)
    {
        $cat = new Categorie;
        $cat->name=$req->name;
        $cat->save();
        return redirect('/cat');
    }
    public function insert()
    {
        return view('categories/create');
    }
    public function show()
    {
        //return view('categories/index')->with('todo',Categorie::all());
    }
    public function edit($id)
    {
        return view('categories/edit')->with('over',Categorie::find($id));
    }
    public function redo(Request $req,$id)
    {
        $up = Categorie::find($req->id);
        $up->name=$req->name;
        $up->save();
        return redirect('/cat');
    }
    public function delete($id)
    {
        $end = Categorie::find($id);
        $end->delete();
        return redirect('/cat');
    }

}
