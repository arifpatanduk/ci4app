<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'active' => 'home'
		];
		return view('pages/home', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'About',
			'active' => 'about'
		];
		return view('pages/about', $data);
	}
	public function contact()
	{
		$data = [
			'title' => 'Contact Us',
			'active' => 'contact',
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Jl. Abc no. 123',
					'kota' => 'Toraja'
				],
				[
					'tipe' => 'Kantor',
					'alamat' => 'Jl. Def no. 321',
					'kota' => 'Solo'
				]
			]
		];
		return view('pages/contact', $data);
	}
}
