<?php
/**
 * Created by PhpStorm.
 * User: ecogle
 * Date: 5/24/2018
 * Time: 1:52 PM
 */


class Database
{
    private $host = "localhost";
    private $db_name = "php_web_service";
    private $username = "erik1444";
    private $password = "F22R@ptor2018!";

    public $conn;

    public function getConnection(){
        $this->conn = null;
        echo "HELLO WORLD";
        try{
            $this->conn = new PDO("mysql:host=".$this->host. ";dbname=" . $this->db_name." port=3308" ,$this->username, $this->password);
            $this->conn-exec("set names utf8");
            echo "Connection Successful";
        }
        catch(PDOException $ex){
            echo "Connection Error: " . $ex->getMessage();
        }
    }

}