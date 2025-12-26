<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class localController extends Controller
{
    function __invoke($locale){
        if(in_array($locale, ['en','id'])){
            Session::put('locale',$locale);
            Session::save();
        }
        return redirect()->back();
    }
}
