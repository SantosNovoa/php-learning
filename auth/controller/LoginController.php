<?php

session_start();


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mophi_db', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$email = $_POST['email'] ?? '';
$password = $_POST["password"] ?? '';


if (empty($email) || empty($password)) {
    header("Location: ../../index.php?error=empty");
    exit();
}


$statement = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$statement->bindValue(':email', $email);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);


if (!$user) {
    header("Location: ../../index.php?error=user-not-found");
    exit();
}

if (password_verify($password, $user['password'])) {

    $_SESSION['user-id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['first-name'] = $user['firstName'];
    $_SESSION['last-name'] = $user['lastName'];

    header("Location: ../../dashboard/view/index.php?login=success");
    exit();
} else {

    header("Location: ../../index.php?error=user-not-found");
    exit();
}



