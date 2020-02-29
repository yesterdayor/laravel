<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    //
    public function index()
    {
        return session('name');
    }

    public function demo()
    {
//        dump(Session::put('name', '邓志秋'));
        dump(session(['name' => '邓志秋']));
    }

    public function demo2()
    {
        return response(Db::select('select * from banner'));
       // dump(config());
    }

    public function demo3()
    {
        return ;

    }
}
