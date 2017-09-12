<?php
 $color=rand(1,100000);
$x="#".$color;
$hex= $x;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Spalvu generavimas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>
<h1 class="sriftas">Rainbow</h1>
<i class="fa fa-snowflake-o" aria-hidden="true"></i>
<div class="container-fluid">
	<div class="row">
		<div class="langelis col">
			<?php
			for ($i=1; $i <= 10000; $i++) { 
				echo "<div class='langelis'>" .$i .$hex . "</div>";
			}




			?>
		</div>
	</div>
</div>
</body>
</html>