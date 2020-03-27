<?php

    class DbConnect{
        private $con;
        
        //class constructor
        function __constructor(){

        }

        function connect(){
            include_once dirname(__FILE__) . '/Constants.php';

            $this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if(mysqli_connect_errno()){
                echo"Failed to conncet to MySQL: " . mysqli_connect_errno();
            }
            return $this->con;
        }

    }

?>