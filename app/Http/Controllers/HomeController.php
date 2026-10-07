<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function success()
    {
        return view('success');
    }

    public function users()
    {
        return view('users');
    }
    public function posts()
    {
        return view('posts');
    }
}
