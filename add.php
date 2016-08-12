<?php
$addby = $_POST['addby'];
$author = $_POST['author'];
$citata = $_POST['citata'];
$key = md5($_POST['key']);
if($addby != "" && $author != "" && $citata != "" && $key != "")
{
	echo nl2br("DEBUG\n-Not null\n");
		if($key == "ebd6d2f5d60ff9afaeda1a81fc53e2d0")
		{
				echo nl2br(" -Key valid\n");
				addDB($addby, $author, $citata);
				addbasic($citata,$addby, $autor);
		}
		else
		{
			echo nl2br("- Code not valid\n");
		}
}
else
{
	echo nl2br("- Something null\n");
}

function addDB($addby, $author, $citata)
{
	$id = intVal(file_get_contents("id.id"));
	$id++;
	echo $addby." ".$author." ".$citata;
	mysql_connect("mysql6.000webhost.com", "a1690845_admin", "pbbase1") or die("Connot established connection with database. Try later");
	mysql_select_db("a1690845_citat");
	mysql_set_charset('utf8');
	$q = "INSERT INTO `citatnik`(`id`, `adder`, `author`, `quote`) VALUES ( '$id', '$addby', '$author', '$citata' )";
	mysql_query($q) or die("Connot be add to database".mysql_error());
	file_put_contents("id.id", $id);
}

function addbasic($cit, $ab, $auth)
{
		$path = "citatnic.json";
		$data = "[".$ab."] :"."[".$auth."] : '".$cit."'\n"; 
		echo "Добавление в цитатник типа BASIC\n";
		if(file_put_contents($path, $data, FILE_APPEND)){
			echo nl2br("\n-Success");

		}
		else
		{
			echo nl2br("- Failture\n");
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Добавление цитаты</title>
</head>
<body>

</body>
</html>