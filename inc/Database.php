<?php
    class Database{
        public $conn;

        function __construct()
        {
            try{
                $this->conn = new PDO('mysql:host=localhost;dbname=cleanwork;charset=utf8','root','');
            }catch(PDOException $e){
                var_dump($e->getMessage());
            }
        }
    }
    
?>