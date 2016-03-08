<?php
	$concatConlumn = "";
	$concatValue = "";
	if(isset($_POST['chbox'])){
		foreach($_POST['chbox'] as $chbox){
			$concatConlumn .= ", pre43_$chbox";
			$concatValue .= ", 1";
		}
	}
	echo $concatConlumn;
	echo "<br>";
	echo $concatValue;
	


?>