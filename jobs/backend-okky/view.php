<?php
require "app/controller/ViewController.php";
use App\Controller\ViewController;

$add = new ViewController();
    $data = $add->fetch("tbl_teman", "id != 0");
    echo json_encode($data);
?>