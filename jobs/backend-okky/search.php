<?php
require "app/controller/ViewController.php";
use App\Controller\ViewController;

$add = new ViewController();
    $query = $_GET["query"];
    $data = $add->fetchSearch("tbl_teman", $query);
    if(count($data) > 0) {
        echo json_encode($data);
    } else {
        echo json_encode(["message" => "Tidak ada data ditemukan", "data" => $data]);
    }
?>