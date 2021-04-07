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

		if (empty($data['komik'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan!');
		}

		return view('komik/detail', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Komik',
			'active' => 'komik'
		];
		return view('komik/create', $data);
	}

	public function save()
	{
		$slug = url_title($this->request->getVar('judul'), '-', true);

		$this->komikModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul')
		]);

		session()->setFlashData('pesan', 'Data berahasil ditambahkan.');

		return redirect()->to('/komik');
	}
}
