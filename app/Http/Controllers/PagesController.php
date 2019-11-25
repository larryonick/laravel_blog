<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //homepage route method
    public function index(){
        $message= array(
            'title'=>'This is the title for the home page',
            'par' => "This is the Laravel application from Laravel From Scratch Youtube series"
        );

        return view('pages.index')->with($message);
    }

    public function about(){
        $data = array(
            'title'=>'About',
            'par' =>'This is the About Page'
        );
        return view('pages.about')->with($data);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Development', 'Graphics Design', 'Embedded Systems'] 
        );
        return view('pages.services')->with($data);
    }
}