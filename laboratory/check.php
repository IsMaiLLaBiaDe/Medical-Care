<?php


?>
<html>	
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
	
	<style>
		body {
		padding:0px;
		margin:0px;
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
				"header header header"
				"main main aside"
				"footer footer footer";
				grid-template-columns: 1fr 1fr 1fr;
				grid-template-rows: 80px 1fr  1fr;
				min-height: 100vh;
			}
		.header { 
				grid-area: header;
				background:grey;
				}
		.aside { 
				grid-area: aside; 
				background:grey;
				}
		.main {
				grid-area: main; 
				background:grey;
				text-align: center;
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
			<div class="header"> HELLO </div>
			<div class="main"> HELLO <br> 
	<form action="./sf.php" method="POST">
    <div class="form-group">
        <label for="patient_id">Patient ID:</label>
        <input type="number" id="patient_id" name="patient_id" required>
    </div>
    
    <fieldset>
        <legend>🗓️ Appointment Date</legend>
        <div class="form-group">
            <label for="date">Appointment Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
    </fieldset>

    <div class="form-group">
        <label for="status">Notes/Status:</label>
        <textarea id="status" name="status" rows="5" placeholder="Enter patient status or special requests..."></textarea>
    </div>

    <fieldset>
        <legend>✅ Select Specialty</legend>
        <div class="checkbox-group">
            <div class="checkbox-item">
                <input type="checkbox" id="cardio" name="specialty[]" value="Cardiology">
                <label for="cardio">Cardiology</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="peds" name="specialty[]" value="Pediatrics">
                <label for="peds">Pediatrics</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="derma" name="specialty[]" value="Dermatology">
                <label for="derma">Dermatology</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="neuro" name="specialty[]" value="Neurology">
                <label for="neuro">Neurology</label>
            </div>
            </div>
    </fieldset>

    <div class="form-group" style="margin-top: 20px;">
        <button type="submit">Submit Pre-Visit Info</button>
    </div>
</form>



 </div>
			<div class="aside"> HELLO </div>
			<div class="footer"> HELLO </div>
			</div>

			
	</body>

	
</html>