<?php
$t= $_POST['number'];

	for ($i=1; $i <=10 ; $i++) { 
		echo $t;echo "*"; echo $i;echo "=";echo $t*$i;
		echo "<br>";
	}

?>