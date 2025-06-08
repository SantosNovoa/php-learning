<?php include_once "../../layout/footer.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

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
            // if the user password doesn't match retrieve url parameter and display an error message
        } else if (isset($_GET["error"]) && $_GET["error"] === "password") {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle-fill"></i>
                <strong>Validation errors!</strong> Passwords do not match.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        } else if (isset($_GET["error"]) && $_GET["error"] === "email") {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle-fill"></i>
                <strong>Validation errors!</strong> Email already exists.
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
                <span class="sign-up-text">Sign Up
                    <div class="sign-up-text-underline">
                    </div>
                </span>
            </div>
            <form action="../controller/SignUpController.php" method="POST">
                <div class="name-container">
                    <div class="form-floating mb-3" id="first-name-format">
                        <input type="first-name" name="first-name" class="form-control">
                        <label for="floatingInput">First Name <span class="required-label">*</span></label>
                    </div>
                    <div class="form-floating mb-3" id="last-name-format">
                        <input type="last-name" name="last-name" class="form-control">
                        <label for="floatingInput">Last Name <span class="required-label">*</span></label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control">
                    <label for="floatingInput">Email Address <span class="required-label">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control">
                    <label for="floatingInput">Password <span class="required-label">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password-confirm" class="form-control">
                    <label for="floatingInput">Confirm Password <span class="required-label">*</span></label>
                </div>
                <button type="submit" class="btn btn-primary" id="sign-up-button">Sign up</button>
                <p class="sign-in-text" style="text-align: center;">Already have an account? <a href="../../index.php" style="text-decoration: none;">Login</a></p>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>