<?php
 class Post {
     private $db;

     public function __construct(){
         $this->db = new Database;  //incluido en index inicial
     }

 }