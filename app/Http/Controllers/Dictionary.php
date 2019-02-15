<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dictionary extends Controller
{
    function diction (Request $request){
        $input = $request->input;
        $arr = ['hello'=>'xin chao', 'look'=>'nhin', 'book'=>'sach', 'know'=>'biet'];
        foreach ($arr as $key => $value){
            if($input == $key){
                $resul = $value;
                break;
            }else{
                $resul = 'chua cap nhat';
            }
        }
        return view('show', compact('resul', 'input'));
    }
}
