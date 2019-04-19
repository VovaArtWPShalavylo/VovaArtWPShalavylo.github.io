<!doctype html>
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
            date_default_timezone_set("Europe/Kiev");
            echo "The current time is " . date("H:i:sa");
          ?>
        </p>
		</div>
	</header>

  </body>
</html>