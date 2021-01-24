<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $tilte ="Welcome to Laravel Development";
        return view('pages.index')->with('title', $tilte);
    }
    public function services(){
        $data = array(
            'title' => "Services",
            'programming' => ['Laravel','PHP','SEO']
        );
        return view('pages.services')->with($data);
    }
    public function about(){
        $title ="About";
        return view('pages.about')->with('title', $title);
    }
}
