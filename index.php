<html>
<head>
<title>留言板</title>
<style>
p.bord{
	border:1px solid black;
	width:500px;
	height:120px;
	display:inline-block;
	margin:6px 40px;
	word-wrap: break-word;
}
</style>
</head>
<body>
<h1 style="color:Orchid;">留言板</h1>
<?php 
	include("db.php"); 
	
	?><form name="form1" method="post" action="add.php">
	主題: <input style="width:594px" type="text" name="title"><br><br>
	內容: <textarea rows=6 cols=80 name="txt"></textarea><br>
	<input type="submit" name="Submit" value="送出">
	<input type="Reset" name="Reset" value="重新填寫">
	</form><?php
	$sql = "select * from board order by no desc";
	$result = mysqli_query($dbConnection,$sql);
	while(list($no,$title, $txt, $time) = @mysqli_fetch_row($result)){
		echo "#".$no;
		echo "<br>標題:&nbsp&nbsp&nbsp&nbsp".$title;
		echo "<br>內容:<br>";
		$str1 = '<p class="bord">';
		$str2 = '</p>';
		echo $str1.$txt.$str2;
		echo "<br><br>時間:".$time;
		echo "<br>==============================================================<br>";
	}
	echo "共".@mysqli_num_rows($result)."筆留言";
?>

</body>
</html>