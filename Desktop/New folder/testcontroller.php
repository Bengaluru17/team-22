<?php

namespace App\Http\Controllers;


// use Illuminate\Http\Request;
use App\Http\Requests;
use App\test;
use Request;

class testController extends Controller
{
    //
	public function index(){
		$test = test::all();
		return $test;
	}
    

}
