<?php
	mysql_connect("localhost", "gt22", "gt22");
	mysql_select_db("pbweb-citatnik");
	mysql_set_charset('utf8');
	
	echo $rows[0];
?>