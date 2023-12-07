<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    Public function index(){
        return view('home/index');
    }
    Public function about(){
        return view('home/about');
    }
    Public function contact(){
        return view('home/contact');
    }
    Public function services(){
        return view('home/services');
    }
    Public function blogs(){
        return view('home/blogs');
    }
    Public function sendcontact(Request $request){
      echo "<pre>";print_r($request->all());die;
    }
    
    
    
}
