<?php 
namespace App\Controller;
require "app/database/Connect.php";
use App\Database\Connect;

class ViewController {

    public $result;
    public function __construct()
    {
        $this->result = [];
        $this->data = new Connect();
    }
    
    public function fetch($table, $cond = null)
    {
        $result = array();
        $data = "SELECT * FROM $table WHERE $cond";
        $hasil = $this->data->con->query($data);
        while($row = mysqli_fetch_assoc($hasil)){
            $result[] = $row;
        }
        return $result;
    }
    
    public function fetchSearch($table, $cond = null)
    {
        $result = array();
        $data = "SELECT * FROM $table WHERE nama LIKE '%" . $cond . "%'";
        $hasil = $this->data->con->query($data);
        while($row = mysqli_fetch_assoc($hasil)){
            $result[] = $row;
        }
        return $result;
    }
}