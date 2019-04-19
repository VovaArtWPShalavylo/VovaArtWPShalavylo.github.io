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
        <h2>Answer</h2>
          <p>
            <?php
              // remove all session variables
              session_unset();
              // destroy the session
              session_destroy();
              echo "Session is destroyed";
             ?>
          </p>
		</div>
	</header>

  </body>
</html>