<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function blog(){
        return view('frontend.berita');
    }
    public function singleBlog(){
        return view('frontend.berita');
    }
    public function kepengurusan(){
        return view('frontend.kepengurusan',);
    }
    public function contact(){
        return view('frontend.contact',);
    }


}
