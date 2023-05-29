<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        return view('welcome');
    }

    // function Page()
    // {
    //     return view("pages.Home");
    // }
    function ResumePage()
    {
        return view("pages.Resume");
    }
    function Portfolio()
    {
        return view("pages.Portfolio");
    }
    function Project()
    {
        return view("pages.Project");
    }
}
