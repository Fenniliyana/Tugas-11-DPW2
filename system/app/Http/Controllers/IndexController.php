<?php 

namespace App\Http\Controllers;


class indexController extends Controller
{
	function showabout(){
	
	    return view('about');
	}

	function showcontact(){

		return view('contact');

	}


	function showproducts(){

		return view('gym');

	}

	function showclient(){

		return view('blog');

	}

}