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

    public function report_user(){
        $title = 'Report User';
        return view('pages.report_user')->with('title', $title);
    }

    public function report_item(){
        $title = 'Report Item';
        return view('pages.report_item')->with('title', $title);
    }

    public function reports(){
        $title = 'Reports';
        return view('pages.reports')->with('title', $title);
    }

    public function lend(){
        $title = 'lend';
        return view('pages.lend')->with('title', $title);
    }
}
