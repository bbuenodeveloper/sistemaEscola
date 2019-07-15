<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request, $id){
        if($request->isMethod('GET')){

            return view('home',['id'=>$id]);
        }
        
    }
}
