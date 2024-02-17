<?php

    session_start();

    class Conexion {

        public $con;
        public function __construct() {
            $this -> con = new mysqli("localhost", "root", "", "squadron");
        }   
    }

?>