<?php
Class Signup extends BaseController{

    function __construct(){
        parent::__construct();
        $this->view->render('signup');  
    }
}
