<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\progress;
use Request;

class PROGRESSController extends Controller
{
    //
    public function store(){
		$input = Request::get('dateSupp');

		progress::create(['dateSupp' => $input ]);
		return redirect('progress');
	}
}
