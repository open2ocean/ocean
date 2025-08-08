<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //
    public function handle(Request $request){

        return view('errors.404');
    }
    public function noBusinessFound(Request $request){

        return view('errors.no_business_found');
    }
    public function noProfileFound(Request $request){

        return view('errors.no_profile_found');
    }
}
