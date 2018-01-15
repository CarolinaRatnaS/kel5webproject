<?php
	include("includes/koneksi.php");
	
	for($test = 0; $test <= count($team); $test++){
    $sql = mysql_query("INSERT INTO 'schedule' (home) VALUES  ('" . $team[$test]) . "')");

	$result = mysql_query($sql);
	}
?>