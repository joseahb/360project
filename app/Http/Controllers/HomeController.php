<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
<<<<<<< HEAD
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function marketing()
    {
        return view('marketing');
    }
    public function register()
    {
        return view('register');
    }
    public function contact()
    {
        return view('contact');
    }
    public function recent()
    {
        return view('recent-developments');
    }

    public function all_sites()
    {
        return view('all-sites');
    }
=======
>>>>>>> 3541cb1d431e158b47c90c203ceaaed4ba5e9444
}
