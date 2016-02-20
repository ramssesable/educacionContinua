<?php
	$psswd = substr( md5(microtime()), 1, 10);
	echo $psswd;
?>