<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <p> Bonjour <?= $_SESSION["user"] ?> ! </p>
<form>
    <input type="button" onclick="location.href = 'logout.php';" value="logout" />
</form>
</body>

</html>