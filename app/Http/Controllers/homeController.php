<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(){
        return view('main.home');
    }

    public function login(){
        return view('main.login');
    }

    public function about(){
        return view('main.about');
    }

    public function contact(){
        return view('main.contact');
    }

    public function admin(){
        return view('admin.dashboard');
    }
}
