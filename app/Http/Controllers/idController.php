<?php

namespace App\Http\Controllers;

use App\Models\build_model;
use App\Models\id_model;
use Illuminate\Http\Request;

class idController extends Controller
{
    //
    function updateB(Request $R){
        $recheck=$R->validate(
            ['code'=>'required',
            'name'=>'required',
            'campus'=>'required'
            ]
        );
        build_model::where('code',$R->code)->update(
            [
                'code'=>$R->code,
                'name'=>$R->name,
                'campus'=>$R->campus
            ]
            );
    }
    function updateO(Request $R){
        $recheck=$R->validate(['code'=>'required','name'=>'required']);
        id_model::where('code',$R->code)->update(
            [
                'code'=>$R->code,
                'name'=>$R->name
            ]
            );
        return redirect('');
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
