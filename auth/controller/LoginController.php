<?php
require_once "../../users/Model/UserModel.php";
session_start();

// establish the db connection 
$userModel = new User();


$email = $_POST['email'];
$password = $_POST["password"];


if (empty($email) || empty($password)) {
    header("Location: ../../index.php?error=empty");
    exit();
}

// check if the email is found 
$user = $userModel->getUserByEmail($email);

// $statement = $pdo->prepare('SELECT * FROM users WHERE email = :email');
// $statement->bindValue(':email', $email);
// $statement->execute();
// $user = $statement->fetch(PDO::FETCH_ASSOC);


// if the email isn't found return an error
if (!$user) {
    header("Location: ../../index.php?error=user-not-found");
    exit();
}

// password verification
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



