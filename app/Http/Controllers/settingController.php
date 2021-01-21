<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * show slider setting page
     */
    public function sliderSetting(){
        return view('admin.sliderSetting');
    }

    public function sliderDataStore(Request $request){
        return $request -> all();
    }
}
