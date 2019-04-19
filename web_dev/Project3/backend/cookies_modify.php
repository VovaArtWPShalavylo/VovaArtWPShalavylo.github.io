<!doctype html>
<?php
  $cookie_name = "user";
  $cookie_value = "ModifiedKirai";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  

    <link rel="stylesheet" type="text/css" href="../style.css" style="border:0">

    <title>Project2</title>
	body {
  		background-image: url(../fon2.jpg); 
 	   	background-color: #c7b39b; 
 	  }
  </head>
  <body>
	<iframe src="../menu.html" width="100%" height="190"></iframe>
	<header>
		<div class="main">
	      <h2>Answer</h2>
		    <p>
		    	<?php
		        	if(!isset($_COOKIE[$cookie_name])) {
		              echo "Cookie named '" . $cookie_name . "' is not set!";
		              echo "Reload page to modify cookies";
		          	} else {
		              echo "Cookie '" . $cookie_name . "' is set!<br>";
		              echo "Value is: " . $_COOKIE[$cookie_name];
		          	}
		       ?>
		    </p>
		</div>
	</header>

  </body>
</html>