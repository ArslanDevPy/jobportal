<?php
class Conection{
    public function conOpen()
    {
        $username='root';
        $password='';
        $db = 'jobportal';
        $host = "localhost";
        $conn = new mysqli($host,$username,$password,$db);
        if($conn->connect_error){
            die("Connection Faild");
        }
        return $conn;
    }
}
?>