<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
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
<!-- <a href="#bio" id="heroku" class="chevron down"></a> -->
    </div>

<div class="section bio" id="bio">
    
    <div class="section-bio-one">
        <div class="section-title">bio</div>
        <?php read_file_to_bio_modal('ONE','bio') ?></div>
    <div class="section-bio-one-pic"><img src="assets/camp-hills.jpg" /></div>
    <div class="section-bio-two-pic"><img src="assets/four-people-sitting.jpg" /></div>
    <div class="section-bio-two"><?php read_file_to_bio_modal('TWO','bio') ?></div>
    <div class="section-bio-three"><?php read_file_to_bio_modal('THREE','bio') ?></div>
    <div class="section-bio-three-pic"><img src="assets/himalayas.jpg" /></div>



    <!-- <a href="#blog" class="chevron down"></a> -->
</div>

<div id="blog" class="section blog">
    <div class="section-title">blog</div>
    <div class="tile">
        <div class="tile-image"><img src="assets/055.jpg"></div>
        <div class="tile-title">10 levadas - 100 miles in Madeira</div>
        <div class="text-preview">One week trip challenge we made with our international walking group - to visit all levadas on the beatiful island.....[read more]</div>
</div>
<div class="tile">
        <div class="tile-image"><img src="assets/066.jpg"></div>
        <div class="tile-title">Uncharted Siberia - in the footsteps of early pioneers</div>
        <div class="text-preview">The region which ruthlessness to journeys is dwarfed only by Antarctica was our target during summer months of 2018...[read more]</div>
</div>
<div class="tile">
        <div class="tile-image"><img src="assets/077.jpg"></div>
        <div class="tile-title">Scotland walk marathon - winds and clouds</div>
        <div class="text-preview">It was only a matter of time when we start to plow through grassy midlands of the Great Scotland...[read more]</div>
</div>
<div class="tile">
        <div class="tile-image"><img src="assets/055.jpg"></div>
        <?php read_file_to_blog_thumb('blog'); ?>
</div>

    
    
    
        <!-- <a href="#contact" class="chevron down"></a> -->
    </div>





    <div class="section-content"><p></p></div>
    <!-- <a href="#bg" class="chevron up"></a> -->
</div>

<script src="assets/script.js"></script>
</body>
</html>