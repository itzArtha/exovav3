<?php
require "app/controller/CreateController.php";
use App\Controller\CreateController;

$add = new CreateController();
    $data = array(
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'alamat' => $_POST['alamat'],
        'tgl_lahir' => $_POST['tgl_lahir'],
        'jk' => $_POST['jk'],
    );
    $add->create('tbl_teman', $data);
    echo json_encode(["message" => "Sukses menambahkan data"]);