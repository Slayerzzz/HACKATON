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
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styles1.css">
    <!-- <script src="slideshow.js" refer></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header>
    <a href="index.php"><img src="logopoke.png" alt="" height="200px"></a>
    <li>
        <a href="index.php">Homepage</a>
        <a href="Info.php">Info</a>
        <a href="Webpage.php">Webpage</a>
        <a href="inloggen.php">Inloggen</a>
    </li>
    </header>
    <main>
    <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><q>Common/Uncommon en Rare, waarde ongeveer €0,50.</q></div>
    <div class="swiper-slide"><q>Holo rare, waarde ongeveer €1,50.</q></div>
    <div class="swiper-slide"><q>Reverse holo, waarde ongeveer €2,00.</q></div>
    <div class="swiper-slide"><q>EX/GX/V half art/Half body, waarde ongeveer €10 tot €100.</q></div>
    <div class="swiper-slide"><q>FULL art/Full body, waarde ongeveer €50 tot €250.</q></div>
    <div class="swiper-slide"><q>Secret rare, waarde ongeveer €25 tot €150.</q></div>
    <div class="swiper-slide"><q>Rainbow rare, waarde ongeveer vanaf €100 tot een paar duizend.</q></div>
    <div class="swiper-slide"><q>Promo, waarde niet bekend alleen vekrijgbaar bij evenementen.</q></div>
    <div class="swiper-slide"><q>Special mention: tag team, niet koopbaar.</q></div>
    <div class="swiper-slide"><q>Special mention: VMAX, niet koopbaar.</q></div>




    
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
    </main>
    <footer>
<h3 class="adres">Gegevens:</h3>
<h5 class="adres">🏡: Bètaplein 18 2321 KS Leiden</h5>
<h5 class="adres">📧: info@mborijnland.nl</h5>
<h5 class="adres">📞: 088 222 17 77</h5>
<h3 class="claimer">&copyB Loempot</h3>
<article class="contact">
<label>E-mail</label><br><input type="text" name="email" />
<button id="knop" onclick="alertEmail()">Versturen</button>
</article>
</footer>
</body>
<script>

function alertEmail() {

alert("Email is verzonden");

}

</script>
<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>
</html>
</body>
</html>