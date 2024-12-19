<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function projects(){
        $allprojects = Category::where('is_active', true)->get();
        return view('projects', compact('allprojects'));
    }
    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact');
    }
}
