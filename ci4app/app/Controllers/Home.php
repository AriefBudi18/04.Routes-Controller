<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		// echo "Apa Kabar";
	}


	public function coba()
	{
		echo $this->nama;
	}
	//--------------------------------------------------------------------

}
