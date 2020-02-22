<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    //
    public function index()
    {
        dump(Route::current());
    }

    public function demo()
    {
        return view('user.profile');
    }


    public function demo2()
    {

    }

    public function demo3()
    {
        return ;

    }
}
