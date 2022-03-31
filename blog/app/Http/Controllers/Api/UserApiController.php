<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\ProcessResponseTrait;
use App\Models\categorie;

class UserApiController extends Controller
{
    use ProcessResponseTrait;
    public function getUsers()
    {
        $data=categorie::all();
        //return $data; 
        //return $this->processResponseTrait('RESULT',$data,'success','detail Fetch Successfully');
        return $this->processResponseTrait(NULL,NULL,'FAil','Sorry');
    }
    public function storeUser(Request $request)
    {
        $add = new categorie;
        $add->name=$request->title;
        $add->save();
        return $this->processResponseTrait('RESULT',$add,'success','CAtegorie Added Success');
    }
}
