<?php

class Siswa extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['mhs'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('tamplates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('tamplates/footer');
    }

    public function tambah(){
        if($this->model('Siswa_model')->tambahDataSiswa($_POST)> 0){
            header('Location:'.BASEURL.'/siswa');
        }
    }
}
