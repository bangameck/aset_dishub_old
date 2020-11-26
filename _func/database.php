
<?php
//koneksi
$srvName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "aset_dishub";
$db = new mysqli($srvName, $dbUser, $dbPass, $dbName);
if ($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}
?>