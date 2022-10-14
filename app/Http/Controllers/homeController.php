<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view("home", ["title" => "Home"]);
    }
    public function ticket()
    {
        return view("ticket", ["title" => "ticket"]);
    }
    //
}
