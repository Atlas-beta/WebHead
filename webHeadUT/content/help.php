<?php
if($_POST["message"]) {
    mail("cayd11921@gmail.com", "Here is the subject line",
        $_POST["insert your message here"]. "From: cayd11921@gmail.com");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Services WebHead</title>
  <link rel="icon" href="../content/img/logoHalfIcon.ico">

  <link rel="stylesheet" href="../css/base.css">
  <link rel="stylesheet" href="../css/hel.css">
  <link rel="stylesheet" href="../css/baseport.css">

  <script src="https://kit.fontawesome.com/d27e273dc4.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="topDeck"></div>
<header>
  <div>
    <img id="logoMain" src="../content/img/logoMainTran.png" alt="WebHeadUT_logo"/>
  </div>
  <nav>
    <link> <a class="addLink" href="../index.html">Home</a></link>
    <link> <a class="addLink" href="about.html">About</a></link>
    <link> <a class="addLink" href="service.html">Services</a></link>
    <link> <a class="addLink" href="contact.html">Contact</a></link>
    <link> <a class="addLink" href="help.html">Help</a></link>
  </nav>
</header>
<main>
  <h2>Keepin' Your Head in the Web!</h2>
  <h3>We are ready and eager to help you with you problems. Please tells use about your issue</h3>
    <form method="post" action="help.php">
        <textarea name="message"></textarea>
        <input type="submit">
    </form>
</main>
<footer>
  <img id="hl" src="../content/img/logoHalfTran.png" alt="logoShort"/>
  <div id="footContent">
    <div id="footCon" class="fc">
      <h3>Contact Us</h3>
      <p>9304 S 700 E</p>
      <p>Sandy Utah</p>
      <p>Phone: 801-263-7700</p>
      <p>Email: steve@webheadutah.com</p>
    </div>
    <div id="footSoc" class="fc">
      <div class="fsoc"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></div>
      <div class="fsoc"><a href="https://www.google.com" target="_blank"><i class="fab fa-google"></i></a></div>
      <div class="fsoc"><a href="https://www.bing.com" target="_blank"><img src="../content/img/bing.png"/></a></div>

    </div>
    <nav class="fc">
      <link> <a class="addLink" href="../index.html">Home</a></link>
      <link> <a class="addLink" href="about.html">About</a></link>
      <link> <a class="addLink"href="service.html">Services</a></link>
      <link> <a class="addLink"href="contact.html">Contact</a></link>
      <link> <a class="addLink">Help</a></link>
    </nav>
  </div>
  <p id="cc"> ??Copyright 2010-2022 - www.webheadutah.com. All Rights Reserved.</p>
  <p id="credit">This website was designed and built by <a href="https://www.meetcaydens.com/mitch_sol" target="_blank"><img src="../content/img/MitchellSollogo.png"></a><sub>[a Schroader_ENT subsidiary]</sub></p>
</footer>

</body>
</html>