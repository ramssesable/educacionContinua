<?php
	$concatConlumn = "";
	$concatValue = "";
	if(isset($_POST['chbox'])){
		foreach($_POST['chbox'] as $chbox){
			$concatConlumn .= ", pre42_$chbox";
			$concatValue .= ", $chbox";
		}
	}
	echo $concatConlumn;
	echo "<br>";
	echo $concatValue;
	


?>