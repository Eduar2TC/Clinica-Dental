<?php
Class Login extends BaseController{

    function __construct(){
        parent::__construct();
        $this->view->render('login');  
    }
}
?>