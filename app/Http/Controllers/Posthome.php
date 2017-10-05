<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posthome extends Controller
{
   public function index()
	{
		return view('posts.publicacion');

	}
}
