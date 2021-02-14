<?php
class Pages extends Controller {

    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $data = [
            'title' => 'Clinica Dental - Principal'
        ];
        $this->view('pages/index/index', $data);
    }
    public function about(){
        $this->view('pages/about');
    }
    public function tratamientos(){
        $this->view('pages/tratamientos/tratamientos');
    }
    public function precios(){
        $this->view('pages/precios/precios');
    }
}
