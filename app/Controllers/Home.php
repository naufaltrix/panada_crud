<?php
namespace Controllers;
use Resources,Models;

class Home extends Resources\Controller
{   
	public function __construct()
	{
		parent::__construct();
        $this->siswa = new Models\Siswa;
        $this->session = new Resources\Session;
        $this->request = new Resources\Request;
	} 
    public function index()
    {    
        $data['title'] = "Selamat Datang di Tabel CRUD !!";

        $data['set_siswa'] = $this->siswa->get_siswa();

        $this->output('home', $data);
    }
    public function menu_insert() 
    {
        $data['title'] = 'Menu Tambah Data !!';
        $this->output('tambah', $data);
    }
    public function proses_insert()
    {
        if (isset($_POST['tambah']))
        {
            $set_nim = $this->request->post('nim');
            $set_nama = $this->request->post('nama');
            $set_alamat = $this->request->post('alamat');

            $data = array(
                'siswa_nim' => $set_nim,
                'siswa_nama' => $set_nama,
                'siswa_alamat' => $set_alamat
            );

            $query_insert = $this->siswa->insert_siswa($data);

            if ($query_insert)
            {
                $this->session->setValue('insert_success','<div class="alert alert-success" role="alert"><label for="warning">Data Berhasil di Tambah</label></div>');
                $this->redirect('home/index');
            }
            else 
            {
                $this->session->setValue('insert_failed','<div class="alert alert-warning" role="alert"><label for="warning">Data Gagal di Tambah</label></div>');
                $this->redirect('home/menu_insert');
            }
        }
    }
    public function menu_edit($id) 
    {
        $data['title'] = 'Menu Edit Data !!';

        $data['get_siswa_edit'] = $this->siswa->get_where($id);
        $this->output('edit', $data);
    }
    public function proses_hapus($id)
    {
        $proses_hapus = $this->siswa->delete_siswa($id);
        if ($proses_hapus)
        {
            $this->session->setValue('delete_success','<div class="alert alert-success" role="alert"><label for="warning">Data Berhasil di Hapus</label></div>');
            $this->redirect('home/index');
        } 
        else
        {
            $this->session->setValue('delete_failed','<div class="alert alert-warning" role="alert"><label for="warning">Data Gagal di Hapus</label></div>');
            $this->redirect('home/index');
        } 
    }
    public function proses_edit() {
        if (isset($_POST['edit']))
        {
            $set_id = $this->request->post('siswa_id');
            $set_nim = $this->request->post('nim');
            $set_nama = $this->request->post('nama');
            $set_alamat = $this->request->post('alamat');

            $data = array(
                'siswa_nim' => $set_nim,
                'siswa_nama' => $set_nama,
                'siswa_alamat' => $set_alamat
            );

            $query_edit = $this->siswa->edit_siswa($data, $set_id);
            if ($query_edit)
            {
                $this->session->setValue('update_success','<div class="alert alert-success" role="alert"><label for="warning">Data Berhasil di Edit</label></div>');
                $this->redirect('home/index');
            }
            else
            {
                $this->session->setValue('update_failed','<div class="alert alert-warning" role="alert"><label for="warning">Data Gagal di Edit</label></div>');
                $this->redirect('home/menu_edit/'. $set_id .'');
            }
        } 
        else
        {
            $this->session->setValue('update_failed','<div class="alert alert-warning" role="alert"><label for="warning">Data Gagal di Edit</label></div>');
            $this->redirect('home/menu_edit/'. $set_id .'');
        }
    }
}