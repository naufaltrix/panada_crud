<?php

	namespace Controllers;
	use Resources, Models;

	class Index extends Resources\Controller
	{
		public function __construct(){

			parent::__construct();

			// DB koneksi default
			$this->db = new Resources\Database;
			$this->mhs = new Models\Mahasiswa;
		}
		public function index()
		{
			$data['title'] = "TABEL MAHASISWA";
			$data['get_mhs'] = $this->mhs->GetMahasiswa();
			$this->output('siswa', $data);
		}
	} 

?>