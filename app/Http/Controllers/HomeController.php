<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('pages.home');
    }

    public function search(){
    	return view('pages.search');
    }

    public function question(){
    	return view('pages.question');
    }

    public function profile(){
    	return view('pages.profile');
    }
}
