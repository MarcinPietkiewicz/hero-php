<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Adam Trekowski</title>
</head>
<body>
<!-- cover webpage until it loads -->
<div style="display: none;" id="hideAll">&nbsp;</div>
  <script type="text/javascript">
    document.getElementById("hideAll").style.display = "block";
  </script> 

<?php include 'protected/functions.php' ?>
<div id="bg"></div>

    <div class="hero-text">
        <div id="hero-title">Adam Trekowski</div>
        <div id="hero-desc">Professional Mountain Guide</div>
        <div id="hero-menu">
        <a class="menu-item" href="#bio">bio</a>
        <a class="menu-item" href="#blog">blog</a>
        <a class="menu-item" href="#trips">trips</a>
        <div class="menu-item" id="next-trip">next trip in</div>
        <div id="timer"></div>
        <a class="menu-item" id="reserve-button" href="#trips">reserve</a>
        </div>
<a href="#bio" id="heroku" class="chevron down"></a>
    </div>

<div id="bio" class="section">
    <div class="section-title">bio</div>
    <div class="section-content"><?php read_file_to_bio_modal('ENG','bio') ?></div>
    <a href="#blog" class="chevron down"></a>
</div>

<div id="blog" class="section">
    <div class="section-title">blog</div>
    <div class="section-content"><p><?php read_file_to_bio_modal('ENG','blog') ?></p></div>
        <a href="#contact" class="chevron down"></a>
    </div>

<div id="trips" class="section">
    <div class="section-title">trips</div>
    <div class="section-content"><p><?php read_file_to_concert_modal('trips') ?></p></div>
    <a href="#bg" class="chevron up"></a>
</div>

<script src="assets/script.js"></script>
</body>
</html>