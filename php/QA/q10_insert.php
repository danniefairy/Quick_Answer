<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	if(isset($_GET['name'])){
		include 'connect_db.php';
		$total_score=$_GET['score'];
		$name=$_GET['name'];
		$school=$_GET['school'];
		$sql_update="UPDATE `competition` SET `total_score`=\"$total_score\" WHERE `name`=\"$name\" and `school`= \"$school\" ";
		mysqli_query($connect,$sql_update);
		//header("location:q10.php?score=".$total_score."&name=".$name."&school=".$school);
		$q="score=$total_score&name=$name&school=$school";
		echo "<script>
				var url=\"q10.php?\"+\"{$q}\";
				window.setTimeout(\"self.location='\"+url+\"';\",50);
			</script>";
	}
?>
</body>
</html>
