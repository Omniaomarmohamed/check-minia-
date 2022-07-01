<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        return view('FrontPages.index');
    }
    function about()
    {
        return view('FrontPages.about');
    }
    function categories()
    {
        return view('FrontPages.categories');
    }
    function services()
    {
        return view('FrontPages.services');
    }
    function Universities()
    {
        return view('FrontPages.Universities');
    }
    function schools()
    {
        return view('FrontPages.schools');
    }
    function Restaurants()
    {
        return view('FrontPages.Restaurants');
    }
    function picnic_places()
    {
        return view('FrontPages.picnic_places');
    }
    function mosques()
    {
        return view('FrontPages.mosques');
    }
    function Hotels()
    {
        return view('FrontPages.Hotels');
    }
    function hospitals()
    {
        return view('FrontPages.hospitals');
    }
    function churches()
    {
        return view('FrontPages.churches');
    }

}
