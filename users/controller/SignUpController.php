<?php

require_once "../Model/UserModel.php";

$user = new User();

$firstName = $_POST["first-name"];
$lastName = $_POST["last-name"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordConfirm = $_POST["password-confirm"];


if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($passwordConfirm)) {
    header("Location: ../view/create.php?error=empty");
    exit();
}

$validateEmail = $user->getUserByEmail($email);

if (count($validateEmail) > 0) {
    header("Location: ../view/create.php?error=email");
    exit();
}

if ($password != $passwordConfirm) {
    header("Location: ../view/create.php?error=password");
    exit();
}

$query = $user->store(ucwords(strtolower($firstName)), ucwords(strtolower($lastName)), $email, password_hash($password, PASSWORD_DEFAULT));

if (!$query) {
    header("Location:  ../view/create.php?error=store-failed");
    exit();
}

header("Location: ../../index.php?sign-up=success");
exit();










// store in session to use later 
// $_SESSION["first-name"] = $firstName;
// $_SESSION["last-name"] = $lastName;
// $_SESSION["email"] = $email;
// $_SESSION["password"] = $password;
// header("Location: ../../login.php?signup=success");
// exit();


// if ($firstName === "John" && $lastName === "Smith" && $email === "johnsmith@xmail.com" && $password === "1234" && $passwordConfirm === "1234") {
    
//     // store items in session to use later on
//     $_SESSION["first-name"] = $firstName;
//     $_SESSION["last-name"] = $lastName;
//     $_SESSION["email"] = $email;
//     $
    
//     header("Location: ../../dashboard/view/index.php?login=success");
//     exit();
// } else {
//     header("Location: ../../index.php?error=user-not-found");
//     exit();
// }
