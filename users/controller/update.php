<?php


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mophi_db', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: ../view/index.php");
    exit;
}


$statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

$firstName = $user['firstName'];
$lastName = $user['lastName'];
$email = $user['email'];
$password = $user['password'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // if the user enters an empty password we won't update the form with a new password
    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $statement = $pdo->prepare("UPDATE users SET firstName = :firstName,
                                            lastName = :lastName,
                                            email = :email,
                                            password = :password
                                            WHERE id = :id");
        $statement->bindValue(':password', $hashedPassword);                                      
    } else {
        $statement = $pdo->prepare("UPDATE users SET firstName = :firstName,
                                            lastName = :lastName,
                                            email = :email
                                            WHERE id = :id");
    }
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':id', $id);
    $statement->execute();
        header('Location: ../view/index.php');
        exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../update.css">
</head>
<h1>Edit form</h1>
<p><a href="../view/index.php" class="btn btn-secondary">Back to list</a></p>
<body>
    <form enctype="application/x-www-form-urlencoded" method="post">
        <div class="form-floating mb-3" id="first-name-format">
            <input type="first-name" name="first-name" class="form-control" value="<?php echo $firstName ?>">
            <label for="floatingInput">First Name <span class="required-label">*</span></label>
        </div>
        <div class="form-floating mb-3" id="last-name-format">
            <input type="last-name" name="last-name" class="form-control" value="<?php echo $lastName ?>">
            <label for="floatingInput">Last Name <span class="required-label">*</span></label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
            <label for="floatingInput">Email Address <span class="required-label">*</span></label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
            <label for="floatingInput">Password <span class="required-label">*</span></label>
        </div>
        <button type="submit" class="btn btn-primary" id="sign-up-button">Update</button>
    </form>
</body>

</html>