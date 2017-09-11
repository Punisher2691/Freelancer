<!doctype html>
<html>

<head>
<title>Bugs Report</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--W3 sheet-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--main CSS-->
<link href="css/Bugs.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Required for buttons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
    
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    




</head>
<body>

<?php include 'menu.php';?> 
    
<header>
<img class="displayed" src="repoertBug.png" width="344" height="69" alt="report, bugs, cancer"/>
</header>
<main>

  <form action="mailto:someone@example.com" method="post" enctype="text/plain">
    
    <input type="text" name="check1" placeholder="John"><br><br>
    <input type="text" name="check2" placeholder="doe@gmail.com"><br><br>
    
  <textarea name="message" rows="10" cols="30" placeholder="Comment"></textarea><br><br>
    <button class="button1" type="reset"><span>Reset</span></button>
	  <button class="button" type="submit" onClick="myFunction()"><span>Submit</span></button>
	 <h2 id="feedback"></h2>
	  <script>
	  function myFunction() {
		  document.getElementById("feedback").innerHTML = "Thank you for feedback!";
	  }
	  </script>
    
  </form>
</main>

<script src="js/close_menu.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js'></script>

    <script src="js/index.js"></script>
    
<?php include 'footer.php';?>
