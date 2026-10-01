<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

$host = 'mysql-2c6792ed-rj-f87c.l.aivencloud.com';
$port = '17731';
$db   = 'defaultdb'; 
$user = 'avnadmin'; 
$pass = 'AVNS_QEnQtr0X7EW_ZBXauNS'; // Yahan apna Aiven DB ka password daalein

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $options = [
        PDO::MYSQL_ATTR_SSL_CA => true,
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    exit;
}
?>

