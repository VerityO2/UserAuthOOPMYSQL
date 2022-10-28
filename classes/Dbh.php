<?php
class Dbh
{
    public $hostname;
    public  $username;
    public   $dbname;
    public  $password;


    protected function connect()
    {
        $this->hostname = $hostname = "127.0.0.1";
        $this->username =  $username = "root";
        $this->dbname = $dbname = "zuriphp";
        $this->password = $password = " ";


        if (!$conn = mysqli_connect($hostname, $username, $dbname, $password)) {
            die("<script> alert('Unable to connect to Server') </script>");
        }
        return $conn;
    }
}
