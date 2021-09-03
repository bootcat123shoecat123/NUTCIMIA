<?php

namespace App\Http\Controllers;

use App\Models\teach_model;
use Illuminate\Http\Request;

class teachController extends Controller
{
    //
    function show(){
        #report coursemap's name、url
        $cline['teach']=teach_model::all();
        return view('idView',[
            'value'=>$cline
        ]);
    }
}
