<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $file = 'data.csv';

    $handle = fopen($file, 'a');

    fputcsv($handle, [$nim, $nama, $jenis_kelamin, $alamat, $no_hp, $email]);

    fclose($handle);

    header('Location: index.php');
    exit;
}



