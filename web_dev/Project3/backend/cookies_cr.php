<!doctype html>
<?php
  $cookie_name = "user";
  $cookie_value = "VovaArt";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 = 1 day
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
              <?php
                if(!isset($_COOKIE[$cookie_name])) {
                    echo "Cookie named '" . $cookie_name . "' is not set!";
                } else {
                    echo "Cookie '" . $cookie_name . "' is set!<br>";
                    echo "Value is: " . $_COOKIE[$cookie_name];
                }
                ?>
		</div>
	</header>

  </body>
</html>