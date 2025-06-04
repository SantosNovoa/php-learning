<?php

// echo "<pre>";
// var_dump($_POST);

// echo "<pre>";


// foreach ($_POST as $x => $y) {
//     echo "$x : $y <br>"; 
// }
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

echo $email;
if ($email === "" || $password === "") {
    header("Location: ../../index.php?error=empty");
    exit();
}

if ($email === $_SESSION["email"] && $password === $_SESSION["password"]) {
    header("Location: ../../dashboard/view/index.php?login=success");
    exit();
} else {
    header("Location: ../../index.php?error=user-not-found");
    exit();
}


