<?php
session_start();
if ($_SESSION['ingelogd'] != true) {
    header("Location:inloggen.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingelogd</title>
</head>
<body>
    <h1>Beveiligde pagina.</h1>
    <a href="uitloggen.php">Uitloggen</a>
</body>
</html>