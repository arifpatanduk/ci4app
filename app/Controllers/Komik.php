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
			'title' => 'Dafar Komik',
			'active' => 'komik',
			'komik' => $this->komikModel->getKomik()
		];

		return view('komik/index', $data);
	}

	public function detail($slug)
	{
		$data = [
			'title' => 'Detail Komik',
			'active' => 'komik',
			'komik' => $this->komikModel->getKomik($slug),
		];

		return view('komik/detail', $data);
	}
}
