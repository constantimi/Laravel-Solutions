<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $data = array(
            'title' => 'About',
            'services' => ['Books', 'Team' ,'FAQ']
        );
        return view('pages.about')->with($data);
    }
}
