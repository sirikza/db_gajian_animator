<?php
try {
    $host = "localhost";
    $dbname = "gajian";
    $username = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host=" . $host . ";dbname=" .
        $dbname, $username, $pass);
    $koneksi->exec("set names utf8");

    $sql = "UPDATE animator_2d SET tanggal_gajian='2025-1-10' WHERE id='25';";
    $result = $koneksi->query($sql)->fetch();

    var_dump($result);
} catch (PDOException $exception) {
    echo "Database could not be connected: " . $exception->getMessage();
}
