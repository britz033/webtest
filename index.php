<?php

$link = mysql_connect('localhost', 'root', 'zoeas0');
if(!$link){
	die('Could not coneect: '.mysql_error());
}

mysql_select_db("testbase");
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_result=utf8;");
mysql_query("set session character_set_client=utf8;");
if(!empty($_GET['id'])){
	$sql="select * from webDB where _id=".$_GET['id'];
	$result = mysql_query($sql);
	$topic = mysql_fetch_assoc($result);
} else {
	$sql = "select * from webDB";
	$result = mysql_query($sql);
	$topic = mysql_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html>
<body>
<?php
	if(!empty($topic)){
		$sql = "select * from webDB";
		$result = mysql_query($sql);
		while($row = mysql_fetch_assoc($result)){
			echo "des : ".$row[title]."<br>";
		}
		
	} else {
		echo "nothing";
	}
/*	$sql = "select * from webDB";
	$result = mysql_query($sql);
	while($row=mysql_fetch_assoc($result)){
		echo "result = ?id={$row['id']} {$row['title']}"
	}
	*/
?>
</body>
</html>