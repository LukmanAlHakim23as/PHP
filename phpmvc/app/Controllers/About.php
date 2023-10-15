<?php

    class About extends Controller{
        public function index(){
            $this->view('tamplates/header');
            $this->view('about/tambah');
            $this->view('tamplates/footer');

        }
        // public function page(){
        //     $this->view('tamplates/header');
        //     $this->view('about/page');
        //     $this->view('tamplates/footer');

        // }
    }
