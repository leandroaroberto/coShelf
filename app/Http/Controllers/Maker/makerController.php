<?php

namespace coshelf\Http\Controllers\Maker;

use Illuminate\Http\Request;
use coshelf\Http\Controllers\Controller;

class makerController extends Controller
{
    //
    public function index(){
        return redirect()->action('HomeController@index');
    }
    
    public function inventoryList(){
        return view('maker.inventoryList');
    }
}
