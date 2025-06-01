<?php include_once "../../layout/header.php"; ?>
<?php include_once "../../layout/footer.php"; ?>

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
            </form>
        </div>
    </div>