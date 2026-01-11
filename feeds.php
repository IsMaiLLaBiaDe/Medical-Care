<?php


?>
<html>	
<head>
<link rel="shortcut icon" href="https://www.wikipedia.org/static/favicon/wikipedia.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<title>Medical - Care</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
	
	<style>
		body {
		
		margin:0px;
		text-align: center;
		}
		
		
		/*.dashboard {
				display: grid;
				grid-template-areas:
				"sidebar header header header"
				"sidebar main main aside"
				"sidebar footer footer footer";
				grid-template-columns: 280px 1fr 1fr 1fr;
				grid-template-rows: 80px 1fr  1fr;
				min-height: 100vh;
			}*/
			
			
		.dashboard {
				display: grid;
				grid-template-areas:
				"header header header header"
				"slider slider slider slider"
				"main  main main aside"
				"footer footer footer footer";
				/*grid-template-columns: 1fr 1fr 1fr 1fr ;*/
				grid-template-rows: auto 1fr  1fr auto;
				grid-template-columns: 1fr 1fr  ;
				min-height: 100vh;
				
			}
		.header { 
				grid-area: header;
				background:grey;
				}
	    .slider { 
				grid-area: slider; 
				background:grey;
				padding-left:1%;
		        padding-right:1%;
				}
		.aside { 
				grid-area: aside; 
				background:grey;
				}
		.main {
				grid-area: main; 
				background:grey;
				}
		.sidebar {
				grid-area: sidebar; 
				background:grey;
				
				}
		.footer {
				grid-area: footer; 
				background:grey;
				}
				/* Basic Setup */


		
/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
  padding: 0px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 40px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.footer-content-4col {
    display: flex;
    justify-content: space-between; /* Spreads the columns out */
    padding: 20px 50px; /* Example padding */
    flex-wrap: wrap; /* Allows sections to stack on small screens */
}

.footer-section {
    /* Each section takes about 1/4 of the width */
    width: 23%; 
    min-width: 200px; /* Ensures they don't get too small */
    margin-bottom: 20px;
}

/* ... other styling for links, text, and icons ... */
		
		
	</style>
	<body>
			<div class="dashboard"> 



			<!--<div id="sidebar" class="sidebar"> HELLO</div>-->
			<div class="header"> 


 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


			</div>
			<div class="slider">
			
			
			<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/The_Doctor_Luke_Fildes_crop.jpg/1280px-The_Doctor_Luke_Fildes_crop.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/The_Doctor_Luke_Fildes_crop.jpg/1280px-The_Doctor_Luke_Fildes_crop.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/The_Doctor_Luke_Fildes_crop.jpg/1280px-The_Doctor_Luke_Fildes_crop.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

			<!--<h2 style="text-align:center">Slideshow Gallery</h2>-->

<!--<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img_woods_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img_5terre_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
    
  <p class="prev" onclick="plusSlides(-1)">❮</p>
  <p class="next" onclick="plusSlides(1)">❯</p>

  <div class="caption-container">
    <p id="caption">Hello</p>
  </div>-->
<!--
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>
</div>
-->

			</div>
			<div class="main"> HELLO </div>
			<div class="aside"> HELLO </div>
			<div class="footer"> 

<footer>
    <div class="footer-content-4col">
        
        <div class="footer-section about">
            <h3>[Your Company Name]</h3>
            <p>A brief, one-sentence description of your company or mission statement.</p>
            <div class="contact">
                <span><i class="fas fa-phone"></i> +1 234 567 8900</span>
                <span><i class="fas fa-envelope"></i> info@[yourdomain].com</span>
            </div>
        </div>

        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>
        </div>

        <div class="footer-section legal">
            <h3>Legal</h3>
            <ul>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/terms">Terms of Service</a></li>
                <li><a href="/sitemap">Sitemap</a></li>
            </ul>
        </div>

        <div class="footer-section social">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="[Link to Facebook]" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="[Link to Twitter]" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="[Link to Instagram]" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </div>
    
    <div class="footer-bottom">
        &copy; 2025 [Your Company Name] | All Rights Reserved.
    </div>
	
	
</footer>

			</div>
			</div>

			<!--<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
</script>-->

	</body>

	
</html>