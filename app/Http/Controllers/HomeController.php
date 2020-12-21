<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('contact');
    }

    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function secret()
    {
        return view('secret');
    }
}
