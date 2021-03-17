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
		// model
		$komik = $this->komikModel->findAll();
		$data = [
			'title' => 'Dafar Komik',
			'komik' => $komik
		];

		return view('komik/index', $data);
	}
}
