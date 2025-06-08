<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<?php include_once "layout/footer.php"; ?>

<body>
    <div class="msg-popup">
        <?php
        if (isset($_GET["error"]) && $_GET["error"] === "empty") {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle-fill"></i>
                <strong>Validation errors!</strong> Provide the required fields. Required fields are indicated with an <strong>*</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            // if the user password or email doesn't match the sign up session values post an error msg
        } else if (isset($_GET["error"]) && $_GET["error"] === "user-not-found") {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle-fill"></i>
                <strong>Validation errors!</strong> Password or Email does not match.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="sign-up-container">
        <div class="left-side">
            <h1>Welcome to Example</h1>
        </div>
        <div class="right-side">
            <div class="header">
                <span class="sign-up-text">Login
                    <div class="sign-up-text-underline">
                    </div>
                </span>
            </div>
            <form action="auth/controller/LoginController.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control">
                    <label for="floatingInput">Email Address <span class="required-label">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control">
                    <label for="floatingInput">Password <span class="required-label">*</span></label>
                </div>
                <button type="submit" class="btn btn-primary" id="sign-up-button">Login</button>
                <p class="sign-in-text" style="text-align: center;">Don't have an account? <a href="users/view/create.php" style="text-decoration: none;">Sign Up</a></p>
            </form>
        </div>
    </div>