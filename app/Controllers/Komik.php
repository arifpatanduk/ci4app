<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\KomikModel;

class Komik extends BaseController
{
	protected $komikModel;
	public function __construct()
	{
		$this->komikModel = new KomikModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Dafar Komik'
		];

		// model
		$komik = $this->komikModel->findAll();
		dd($komik);

		return view('komik/index', $data);
	}
}
