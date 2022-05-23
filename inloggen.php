<?php 
$error = "";
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = 'admin';
        $pass = 'admin';
        if ($username == $user && $password == $pass) {
            session_start();
            $_SESSION['ingelogd'] = true;
            header("Location: ingelogd.php");
        }else{
        $error = "Username of password is verkeerd!";  
        }
    } else {
        $error = "Username & Password zijn verplicht!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login met uw gegevens:</h1>
    <form method="POST">
        <?php echo $error; ?> <br>
        <label>Username</label><br><input type="text" name="username" /><br>
        <label>Password</label><br><input type="password" name="password" /><br><br>
        <input type="submit" name="submit" value="Inloggen" />
</form>
</body>
</html>`