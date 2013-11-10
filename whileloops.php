<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
	<title>while loops</title>	
  </head>
  <body>
	
	<?php
	$count = 0;
	while ($count <= 10) {
		if ($count == 5) {
			echo "Five, ";
		}else {
		echo $count .  ", ";
		}
		$count++; //increment by 1
		
	}
	echo "<br />";
	echo "Count : {$count}";
	?>
	
	<br /><br />
	
	<?php //use modulo operator %
	$count = 0;
	while ($count <= 10) {
		if ($count % 2 == 1) {
			echo "I love you! <br />";
		} else {
			echo "You love me!";
		}
		$count++; //increment by 1
		
	}
	
	?>
  </body>
</html>
