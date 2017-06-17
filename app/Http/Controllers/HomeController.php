<?php

namespace coshelf\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        if (Auth::user()->account == "Maker")
        {
          return view('maker.makerDashboard');  
        }
        else
        {
          return view('retailer.retailerDashboard');  
        }
        
        //return view('home');
    }
}
