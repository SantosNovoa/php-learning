<?php 
require_once "../Model/UserModel.php";
$user = new User();

echo json_encode($user->getAll());