<?php

namespace App\Http\Controllers;

class HelloWorld extends Controller{
    public function index(){
        $content = array('title'=>'Hello world');
        return view('helloWorld', $content);
    }

}