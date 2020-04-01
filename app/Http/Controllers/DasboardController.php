<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index(Request $request)
    {
    	return view('test', [
    		'title' => $request->title
    	]);
    }
}
