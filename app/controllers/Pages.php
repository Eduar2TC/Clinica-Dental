<?php
class Pages extends Controller {

    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $data = [
            'TITLE'    => 'Clinica Dental - Principal',
            'PATH_IMG' => URL_ROOT . '/public/img/',
            'PATH_CSS' => URL_ROOT . '/public/css/',
            'PATH_JS'  => URL_ROOT . '/public/js/'
        ];
        $this->view('pages/index/index', $data);
    }
    public function about(){
        $this->view('pages/about');
    }
    public function tratamientos(){
        $data = [
            'TITLE'    => 'Clinica Dental - Tratamientos',
            'PATH_IMG' => URL_ROOT . '/public/img/',
            'PATH_CSS' => URL_ROOT . '/public/css/',
            'PATH_JS'  => URL_ROOT . '/public/js/'
        ];
        $this->view('pages/tratamientos/tratamientos', $data);
    }
    public function precios(){
        $data = [
            'TITLE'    => 'Clinica Dental - Precios',
            'PATH_IMG' => URL_ROOT . '/public/img/',
            'PATH_CSS' => URL_ROOT . '/public/css/',
            'PATH_JS'  => URL_ROOT . '/public/js/'
        ];
        $this->view('pages/precios/precios', $data);
    }
    public function sucursales(){
        $data = [
            'TITLE'    => 'Clinica Dental - Sucursales',
            'PATH_IMG' => URL_ROOT . '/public/img/',
            'PATH_CSS' => URL_ROOT . '/public/css/',
            'PATH_JS'  => URL_ROOT . '/public/js/'
        ];
        $this->view('pages/sucursales/sucursales', $data);
    }
}
