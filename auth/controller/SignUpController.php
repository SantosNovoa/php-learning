<?php
session_start();

$firstName = $_POST["first-name"];
$lastName = $_POST["last-name"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordConfirm = $_POST["password-confirm"];


if ($firstName === "" || $lastName === "" || $email === "" || $password === "" || $passwordConfirm === "") {
    header("Location: ../../index.php?error=empty");
    exit();
} else if ($password != $passwordConfirm) {
    header("Location: ../../index.php?error=password");
    exit();
}
// store in session to use later 
$_SESSION["first-name"] = $firstName;
$_SESSION["last-name"] = $lastName;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
header("Location: ../../login.php?signup=success");
exit();


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
