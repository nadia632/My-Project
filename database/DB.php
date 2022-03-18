<?php

class DB{
    static public function connect(){
        {
         $db=new PDO('mysql:localhost=host;dbname=employes','root','');
         $db->exec("set the names utf8");
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
         return $db;
        }
    }
}

?>