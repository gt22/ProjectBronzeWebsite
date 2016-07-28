<?php
$addby = $_POST['addby'];
$author = $_POST['author'];
$citata = $_POST['citata'];
$key = md5($_POST['key']);
$type = $_POST['type'];
if($addby != "" && $author != "" && $citata != "" && $key != "")
{
	echo nl2br("DEBUG\n-Not null\n");
	if($type == 'basic')
	{
		if($key == "ebd6d2f5d60ff9afaeda1a81fc53e2d0")
		{
			echo nl2br(" -Key valid\n");
				addbasic($citata, $addby, $author);
		}
		else
		{
			echo nl2br("- Code not valid\n");
		}
	}
	if($type == 'admin')
	{
		if($key == "0e4e946668cf2afc4299b462b812caca")
		{
			echo nl2br(" -Key valid\n");
				addadmin($citata, $addby, $author);
		}
		else
		{
			echo nl2br("- Code not valid\n");
		}
	}
}
else
{
	echo nl2br("- Something null\n");
}


function addbasic($cit, $ab, $auth)
{
		mysql_connect('localhost', 'root', 'root') or die(mysql_error());
		$path = "citatnic.json";
		$data = "[".$ab."] :"."[".$auth."] : '".$cit."'\n"; 
		//file_put_contents($path, $data, FILE_APPEND);
		echo "Добавление в цитатник типа BASIC\n";
		if(file_put_contents($path, $data, FILE_APPEND)){
			echo nl2br("\n-Success");
			//header("refresh: 3; url=http://projectbronze.comli.com/");
		}
		else
		{
			echo nl2br("- Failture\n");
		}
}

function addadmin($cit, $ab, $auth)
{
		$path = "admin_citatnic.json";
		$data = "[".$ab."] :"."[".$auth."] : '".$cit."'\n"; 
		echo "Добавление в цитатник типа ADMIN\n";
		if(file_put_contents($path, $data, FILE_APPEND)){
			echo nl2br("\n-Success");
		}
		else
		{
			echo nl2br("- Failture\n");
		}
}
?>