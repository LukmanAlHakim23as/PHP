<?php

class Home extends Controller{
    public function index() 
    {
       $data['judul'] = 'home';
       $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
       $this->view('tamplates/header',$data);
       $this->view('home/index');
       $this->view('tamplates/footer');

    }
}
