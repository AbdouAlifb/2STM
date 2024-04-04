<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function ourActivities()
    {
        return view('ourActivities');
    }
    public function soudure()
    {
        return view('services.soudure');
    }

    public function fraisage()
    {
        return view('services.fraisage');
    }

    public function garniture()
    {
        return view('services.garniture');
    }

    public function mecanique()
    {
        return view('services.mecanique');
    }

    public function tournage()
    {
        return view('services.tournage');
    }

    public function maintenance()
    {
        return view('services.maintenance');
    }
    
    public function hydromecanique()
    {
        return view('services.hydromecanique');
    }
}
