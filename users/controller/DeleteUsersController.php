<?php
require_once "../Model/UserModel.php";

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mophi_db', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id = $_POST['id'] ?? null;

if (!$id) {
    http_response_code(400);
    echo "Missing ID";
    exit;
}

$statement = $pdo->prepare('DELETE FROM users WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
http_response_code(200);
echo "Deleted";