<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
include 'partials/_dbconnect.php';
 require 'partials/nav.php';
 $sql = "Select * from wall";
 $result = mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result)){  
 $flag= $row["flag"];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Security</title>
   <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="welcom.css" >
     <link rel="stylesheet" href="led.css" > 
     <link href="./vanilla-calendar.min.css" rel="stylesheet">
		<script src="./vanilla-calendar.min.js"></script>

		<style>
			.vanilla-calendar {
				font-family: 'Helvetica', 'Arial', sans-serif;
			}
		</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="container py-5">
<div class="row mt-3">

<div class="col-md-3 mt-4">

<div class="card">
  <button class="card-body">

    <img src="bg/fablab.jpeg" class="card-img-top" height="122px" alt="">
    <h2 class="card-title">FABLAB</h2>
    
    <div class="led-box">
      <?php

      if($flag==1)
        echo'<div class="led-red"><audio autoplay loop playsinline>
        <source src="buzz.mp3" type="audio/mpeg"></audio></div>';
        
      else  echo'<div class="led-green"></div>';
      ?>
     
  </div>
  
    </button>
  </div>
  
  </div>

  <div class="col-md-3 mt-4">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      
      <div class="card">
  <div class="card-body">
    <img src="bg/NBH.jpeg" class="card-img-top" height="122px" alt="">
    <h2 class="card-title">N.B.H</h2>
    
    <div class="led-box">
      <?php

      if($flag==2)
        echo'<div class="led-red"><audio autoplay loop playsinline>
        <source src="buzz.mp3" type="audio/mpeg"></audio></div>';
        
      else  echo'<div class="led-green"></div>';
      ?>
     
  </div>
  
  </div>
  </div>
    </div>
    <div class="flip-box-back">
     
      <div class="card">
  <div class="card-body">

  <div class="vanilla-calendar"></div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const calendar = new VanillaCalendar('.vanilla-calendar');
    calendar.init();
  });
</script>

  
  </div>
  </div>

  </div>
  </div>
 
  </div>
  </div>

  <div class="col-md-3 mt-4">
  <div class="card">
  <div class="card-body">
    <img src="bg/libr.png" class="card-img-top" height="122px"alt="">
    <h2 class="card-title">LIBRARY</h2>
    <div class="container">
    <div class="led-box">
    <?php
if($flag==3)
  echo'<div class="led-red"></div>';
else  echo'<div class="led-green"></div>';
?>
   </div>
  </div>

  </div>
  </div>
  </div>

  <div class="col-md-3 mt-4">
  <div class="card">
  <div class="card-body">
    <img src="bg/fed.jpg" class="card-img-top" height="122px"alt="">
    <h2 class="card-title">Main Gate</h2>
    <div class="container">
    <div class="led-box">
    <?php
if($flag==4)
  echo'<div class="led-red"></div>';
else  echo'<div class="led-green"></div>';
?>
   </div>
  </div>

  </div>
  </div>
  </div>

  <div class="col-md-3 mt-4">
  <div class="card">
  <div class="card-body">
    <img src="bg/rn.jpg" class="card-img-top" height="122px"alt="">
    <h2 class="card-title">R & D</h2>
    <div class="container">
    <div class="led-box">
    <?php
if($flag==5)
  echo'<div class="led-red"></div>';
else  echo'<div class="led-green"></div>';
?>
   </div>
  </div>

  </div>
  </div>
  </div>


<div class="col-md-3 mt-4">
  <div class="card">
  <div class="card-body">
    <img src="bg/girl.jpg" class="card-img-top" height="122px" alt="">
    <h2 class="card-title">Girls Hostel</h2>
    <div class="container">
    <div class="led-box">
    <?php
if($flag==6)
  echo'<div class="led-red"></div>';
else  echo'<div class="led-green"></div>';
?> 
  </div>
  </div>

  </div>
  </div>
  </div>

<div class="col-md-3 mt-4">
  <div class="card">
  <div class="card-body">
    <img src="bg/inn.jpg" class="card-img-top" height="122px"alt="">
    <h2 class="card-title">Indoor Std</h2>
    <div class="container">
    <div class="led-box">
    <?php
if($flag==7)
  echo'<div class="led-red"></div>';
else  echo'<div class="led-green"></div>';
?> 
  </div>
  </div>

  </div>
  </div>
  </div>


<div class="col-md-3 mt-4">
  <div class="card">
  <div class="card-body">
    <img src="bg/fed1.jpg" class="card-img-top" alt="">
    <h2 class="card-title">CSE Block</h2>
    <div class="container">
    <div class="led-box">
    <?php
if($flag==8)
  echo'<div class="led-red"></div>';
else  echo'<div class="led-green"></div>';
?>
  </div>
  </div>

  </div>
  </div>
  </div>


</div>
</div>
  

  
</body>
</html>

