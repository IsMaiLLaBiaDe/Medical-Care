<?php


?>
<html>	
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<title>Medical - Care</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
	
	<style>
		body {
		padding:0px;
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
				grid-template-rows: 80px 1fr  1fr 80px;
				grid-template-columns: 1fr 1fr 0.5fr;
				min-height: 100vh;
			}
		.header { 
				grid-area: header;
				background:grey;
				}
	    .slider { 
				grid-area: slider; 
				background:grey;
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
			
			<div class="slider"> HELLO </div>
			<div class="main"> HELLO </div>
			<div class="aside"> HELLO </div>
			<div class="footer"> HELLO </div>
			</div>

			
	</body>

	
</html>