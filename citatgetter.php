<?php
	header('Content-Type: text/html; charset=utf-8');
	// mysql_connect("mysql6.000webhost.com", "a1690845_admin", "PBCITAT") or die("Connot established connection with database. Try later");
	// mysql_select_db("a1690845_citat");
	mysql_connect("localhost", "gt22", "gt22");
	mysql_select_db("pbweb-citatnik");
	mysql_set_charset('utf8');
	function getRandCitat()
	{
		if(isset($_COOKIE["rows"]))
		{
			$rows = $_COOKIE["rows"];
		}
		else
		{
			$rows = getRows();
			setcookie("rows", $rows, time() + 60000);
		}
		$id = rand(1, $rows);
		$cit = mysql_fetch_assoc(getById($id));
		$author = $cit["author"];
		$citat = $cit["quote"];
		return $author . ":<br>" . $citat;
	}
	function getById($id)
	{
		return mysql_query("SELECT * FROM citatnik WHERE id=$id LIMIT 1");
	}

	function getRows()
	{
		$rows = mysql_fetch_array(mysql_query("SELECT count(*) FROM citatnik"));
		return $rows[0];
	}

	echo getRandCitat();
?>