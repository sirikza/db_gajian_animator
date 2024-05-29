<?php
try {
    $host = "localhost";
    $dbname = "gajian";
    $username = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host=" . $host . ";dbname=" .
        $dbname, $username, $pass);
    $koneksi->exec("set names utf8");

    $sql = "INSERT INTO animator_2d VALUES 
            (NULL, 'Ryu', '2025-1-17', '5000000');";
    $result = $koneksi->query($sql)->fetch();

    var_dump($result);
} catch (PDOException $exception) {
    echo "Database could not be connected: " . $exception->getMessage();
}
