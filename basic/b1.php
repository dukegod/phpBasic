<!-- variable  -->
<?php
	
	$x = 5;
	$y = 6;
	$z = $x + $y;
	echo('$z'+$z);
	echo "<br>";


	function in(){
		$y = 10;
		echo "inner parameter";
		echo($y);
	}
	in();
	echo "<br>";

	function sta(){
		static $a = 1;
		echo "static variable:::";
		echo($a);
		echo ":::;";
		$a++;
	}
	sta();
	sta();
	sta();
	sta();

	echo "<br>";
	function g(){
		// $GLOBALS['z'];
		global $z;
		echo "GLOBALS";
		echo($z);
	}
	g();


?>