<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matt Tyra's about me</title>
    <link rel="stylesheet" type="text/css" href="home_page.css">
    <script src="about_me.js"></script>
</head>

<body>
    <div class="topbar">
        <a href="./home_page.php">Home</a>
        <a href="./assignments.php">Assignments</a>
        <a href="./about_me.php">About me</a>
    </div>
    <h1>About Me</h1>


</body>


<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="crazanity.jpg" alt="College University photos" style="width:100%" class="slideshow-pics">
    </div>

    <div class="mySlides fade">
        <img src="elk.jpg" alt="College University photos" style="width:100%" class="slideshow-pics">
    </div>

    <div class="mySlides fade">
        <img src="yellowstone.jpg" alt="College University photos" style="width:100%" class="slideshow-pics">
    </div>
    <div class="mySlides fade">
        <img src="capiron.jpg" alt="College University photos" style="width:100%" class="slideshow-pics">
    </div>
    <div class="mySlides fade">
        <img src="magicmountain.jpg" alt="College University photos" style="width:100%" class="slideshow-pics">
    </div>

</div>
<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>

</div>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3500); // Change image every 2 seconds
    }
</script>

<p>My name is Matt Tyra</p>
<p>I am from Southern California</p>
<p>I am a Software Engineering major</p>
<p>I like theme parks, technology, nature, and marvel</p>
<br>
<br>
<?php include 'home.php';?>




</body>

</html>