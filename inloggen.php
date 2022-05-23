<?php 
$error = "";
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = 'loempot';
        $pass = 'Loempot';
        if ($username == $user && $password == $pass) {
            session_start();
            $_SESSION['ingelogd'] = true;
            header("Location: index.php");
        }else{
        $error = "U heeft de verkeerde gegevens ingevuld!";  
        }
    } else {
        $error = "U heeft niet alles ingevuld!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<header>
<a href="index.php"><img src="images/logopoke.png" alt="logopoke" height="200px"></a>
<li>
    <a href="index.php">Homepage</a>
    <a href="Info.php">Info</a>
    <a href="Webpage.php">Webpage</a>
    <a href="inloggen.php">Inloggen</a>
</li>

</header>

    <article class="inlog">
    <h1 class="tekst">Log hier in met uw gegevens:</h1>
    <form method="POST">
        <?php echo $error; ?> 
        <label>Username</label><br><input type="text" name="username" /><br>
        <label>Password</label><br><input type="password" name="password" /><br><br>
        <input class="inloggen" type="submit" name="submit" value="Inloggen" />
    </form>
    </article>
        

<footer>
        <h3 class="adres">Gegevens:</h3>
        <h5 class="adres">🏡: Bètaplein 18 2321 KS Leiden</h5>
        <h5 class="adres">📧: info@mborijnland.nl</h5>
        <h5 class="adres">📞: 088 222 17 77</h5>
        <h3 class="claimer">© B Loempot</h3>


        <article class="contact">
        <label>E-mail:</label><br><input type="text" name="email" />
        <button id="knop" onclick="alertEmail()">Versturen</button>
        </article>

        </footer>

<script>
function alertEmail() {
    alert("Email is verzonden");
}
</script>
</body>
</html>