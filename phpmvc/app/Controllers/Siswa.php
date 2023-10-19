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
            Flasher::setFlash('Berhasil','Ditambahkan', 'success');
            header('Location:'.BASEURL.'/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal','Ditambahkan', 'danger');
            header('Location:'.BASEURL.'/siswa');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('Siswa_model')->hapusDataSiswa($id)> 0){
            Flasher::setFlash('Berhasil','Dihapus', 'success');
            header('Location:'.BASEURL.'/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal','Dihapus', 'danger');
            header('Location:'.BASEURL.'/siswa');
            exit;
        }
    }
}
