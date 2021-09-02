<?php

namespace App\Http\Controllers;

use App\Models\build_model;
use App\Models\id_model;
use Illuminate\Http\Request;

class idController extends Controller
{
    //
    function update(Request $R){
        $recheck=$R->validate(['name'=>'required']);
    }
    function show(){
        #report coursemap's name、url
        $cline['office']=id_model::all();
        $cline['building']=build_model::all();
        return view('',[
            'value'=>$cline
        ]);
    }
}
