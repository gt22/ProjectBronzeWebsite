<html>
<head>
<title>Цитатник ProjectBronze</title>
<style type="text/css">
	label, input{
		font-family: "Courier New", Georgia, Serif;
		font-size: 100%;
	}
	input[type=text]{
		margin: 4px;
		padding : 10px;
		border: 0px solid green;
		border-radius: 10px;
		background:rgba(17,189,20,0.2); 
	}
	textarea{
		margin: 4px;
		padding : 10px;
		border: 0px solid green;
		border-radius: 10px;
		background:rgba(17,189,20,0.2); 
	}
	textarea:hover{
		background:rgba(17,189,20,0.3); 
	}
	input[type=key]{
		margin: 4px;
		padding : 10px;
		border: 0px solid green;
		border-radius: 10px;
		background:rgba(17,189,20,0.2); 
	}
	input[type=submit]{
		border-radius: 5px;
		padding: 12px;
		border : none;
		text-decoration: none;
		background:rgba(17,189,20,0.8); 
	}
	input[type=text]:hover{
		background:rgba(17,189,20,0.3); 
	}
	input[type=key]:hover{
		background:rgba(17,189,20,0.3); 
	}
	input[type=submit]:hover{
		background:rgba(17,189,20,0.3); 
		text-decoration: underline;
		font-weight: bold;
		background:rgba(17,189,20,1); 
	}
	input[type=submit]:active{
		font-style: italic;
	}
	.t{
		font-family: "Courier New", Georgia, Serif;
		font-size: 200%;
		font-weight: bold;
		margin-bottom : 0px;
	}
	.frame_f{
		text-align: right;
	}
	.frame{
	}
</style>
</head>
<body>
<center>
<p class="t">ProjectBronze | Цитатник</p>
<form method="POST" action="add.php">
<table class="frame">
<tr>
<td class="frame_f"><label for="addby">Добавлено : </label></td>
<td><input type="text" id="addby" name="addby"></td>
</tr>
<tr>
<td class="frame_f"><label for="author">Автор : </label></td>
<td><input type="text" id="author" name="author"></td>
</tr>
<tr>
<td class="frame_f"><label for="citata">Цитата : </label></td>
<td><textarea type="text" id="citata" name="citata"></textarea></td>
</tr>
<tr>
<td class="frame_f"><label for="key">Код : </label></td>
<td><input type="key" name="key" id="key"></td>
</tr>
<tr>
<td>
</td>
<td style="text-align: right;">
<input type="submit" name="subm" value="Добавить цитату">
</td>
</tr>
</table>
</form>
<div><p style="border: 1px solid red; border-radius: 3px;"> Совет: если вы собрались добавить многострочную цитату или диалог, пропускайте строку в начале и в конце, будет лучше читать!</p></div>
</center>
</body>
</html>

