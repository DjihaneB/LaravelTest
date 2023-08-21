<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function category($category= null, $item= null){
        if(isset($category)){
            if(isset($item)){
                return "<h1>{$item}</h1>";
            }
            return "<h1>{$category}</h1>";
        }
        else{
            return '<h1>STORE</h1>';
        }
    }

    public function contact(){
        return view('contact');
    }
}
