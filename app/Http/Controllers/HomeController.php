<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function services()
    {
        return view('services');
    }
     public function book()
    {
        return view('book');
    }

    public function address()
    {
        return view('address');
    }

    public function hours()
    {
        return view('hours');
    }
}
