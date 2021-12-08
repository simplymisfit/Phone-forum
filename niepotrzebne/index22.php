<?php
require_once "config.php";
session_start();
?>
<html lang="pl-PL">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylindex.css" type="text/css" />
    <link rel="stylesheet" href="css/galeria.css" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>

<ul>
  <li><a href="index.php">Strona główna</a></li>
  <li><a href="ranking.php">Ranking</a></li>
  <li><a href="telefony.php">Telefony</a></li>
    <?php

    if(isset($_SESSION["loggedin"]))
    {
        echo'<li style="float: right;"><a href="logout.php">Wyloguj się</a></li>';
    }
    else
    {
        echo'<li style="float: right;"><a href="login.php">Zaloguj się</a></li>';
    }


    ?>
</ul>

<div style="padding:20px;margin-top:30px;background-color:whitesmoke;height:1500px;">

    <h2>BLOG POŚWIĘCONY TELEFONOM KOMÓRKOWYM</h2>
<div class="boxed">
  <div class="boxed container">
  XD
</div>
  <div class="boxed container xd-image">
    <img src="images/huawei.jpg">
  </div>


</div>




<div class="row">
  <div class="column">
    <img src="images/thumbs/thumb2.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/thumbs/thumb3.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/thumbs/thumb4.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/thumbs/thumb6.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>
<div class="row">
  <div class="column">
    <img src="images/thumbs/thumb8.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/thumbs/thumb10.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/thumbs/thumb11.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/thumbs/thumb12.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
      <img src="images/image2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="images/image3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="images/image4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="images/image6.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="images/image8.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="images/image10.jpg" style="width:100%">
    </div>

      <div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="images/image11.jpg" style="width:100%">
    </div>

      <div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="images/image12.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="images/image1.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="images/image2.jpg" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="images/image3.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="images/image4.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>



</div>
<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<?php
        mysqli_close($link);
?>
	</body>

</html>
