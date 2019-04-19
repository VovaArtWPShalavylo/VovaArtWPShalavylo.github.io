<!doctype html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  

    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Project2</title>
	body {
  		background-image: url(../fon2.jpg); 
 	   	background-color: #c7b39b; 
 	  }
  </head>
  <body>
	<iframe src="../menu.html" width="100%" height="190" style="border:0"></iframe>
	<header>
		<div class="main">
      <h1>Answer</h1>
        <p>
          <?php
            if(!isset($_SESSION["favcolor"]) && !isset($_SESSION["favanimal"])){
              echo "Session is not set";
            }else {
              // Echo session variables that were set on previous page
              echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
              echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
            }  
          ?>
        </p>
		</div>
	</header>

  </body>
</html>