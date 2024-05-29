<?php
try {
    $host = "localhost";
    $dbname = "gajian";
    $username = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host=" . $host . ";dbname=" .
        $dbname, $username, $pass);
    $koneksi->exec("set names utf8");

    $sql = "SELECT count(id) FROM animator_2d WHERE gaji=8000000 ";
    $result = $koneksi->query($sql)->fetchAll();

    var_dump($result);
} catch (PDOException $exception) {
    echo "Database could not be connected: " . $exception->getMessage();
}
