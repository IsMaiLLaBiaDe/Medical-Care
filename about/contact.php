<?php

session_start();

exit;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.html,body{height: 100%;width: 100%;overflow: hidden;}
body {font-family: Arial, Helvetica, sans-serif; background-image: url('https://images.pexels.com/photos/7527851/pexels-photo-7527851.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');background-size: cover;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  text-align: justify
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 text-align: justify
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
  width: 50%;
  height: 50%;
}
}

</style>
</head>
<body>
<center>
<h3 style ="color: whitesmoke;">Contact Form</h3>

<div class="container">
  <form  style ="color: whitesmoke;"id="form" action="sendfeedback.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="country">Country</label>
<select  id="country" name="country">
    <option>select country</option>
    <option value="Mars">Mars</option>
    
</select>
    <label for="subject">Subject</label>
    <textarea  style="text-align: justify;" id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</center>
<script>
    console.log(" Hello 🌎 (Glitch & W3scools Engiens & Pexel & BardAI ... ) Ressources");
</script>
</body>
</html>
