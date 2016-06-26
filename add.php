<?php
$addby = $_POST['addby'];
$author = $_POST['author'];
$citata = $_POST['citata'];
$key = md5($_POST['key']);
if($addby != "" && $author != "" && $citata != "" && $key != "")
{
	echo nl2br("DEBUG\n-Not null\n");
	if($key == "ebd6d2f5d60ff9afaeda1a81fc53e2d0"){
		echo nl2br(" -Key valid\n");
			add($citata, $addby, $author);
	}
	else
	{
		echo nl2br("- Code not valid\n");
	}
}
else{
	echo nl2br("- Something null\n");
}


function add($cit, $ab, $auth){
	$path = "citatnic.json";
	$data = nl2br("[".$ab."] :"."[".$auth."] - "."( ".$cit." )\n"); 
	//file_put_contents($path, $data, FILE_APPEND);
	if(file_put_contents($path, $data, FILE_APPEND)){
		echo nl2br("-Success\nЧерез 3 секунды вас перекинет на projctbronze.comli.com/index.html =)");
		header("refresh: 3; url=http://projectbronze.comli.com/");
	}
	else
	{
		echo nl2br("- Failture\n");
	}
}
?>