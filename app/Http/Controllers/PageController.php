<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Welcome to HIRAM!';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        // return view('pages.about');
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Sample1', 'Sample12', 'Sample13']
        );
        return view('pages.services')->with($data);
        // return view('pages.services');
    }

    public function policy(){
        $title = 'Terms & Conditions';
        // return view('pages.index',compact('title'));
        return view('pages.policy')->with('title', $title);
    }

    public function search(){
        $title = 'Search items on Hiram';
        return view('pages.search')->with('title', $title);
    }
}
