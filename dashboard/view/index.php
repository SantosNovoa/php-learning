<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    echo "Welcome, " . $_SESSION["first-name"] . " " . $_SESSION["last-name"] . ".";
    ?>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    body {
        display: flex;
        justify-content: center;
        padding-top: 400px;
        font-size: 70px;
        font-weight: 700;
        font-family: "Roboto", sans-serif;
    }
</style>
</html>