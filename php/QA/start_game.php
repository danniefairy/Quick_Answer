<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	header("Content-Type:text/html; charset=utf-8");
	$insert_school_name=$_POST['school_name'];
	$name=$_POST['name'];
	include 'connect_db.php';

	/*
	*檢查學校輸入正不正確
	*/
	$sql_search="SELECT * FROM `master` WHERE `school`=\"$insert_school_name\"";
	$result=mysqli_query($connect,$sql_search);
	if(!$row=mysqli_fetch_array($result))
	{
		echo "請輸入正確的學校名稱!"."<a href=\"index.php\">按此返回</a>";
		die();
	}

	$sql_search="SELECT * FROM `competition` WHERE `school`=\"$insert_school_name\" AND `name`=\"$name\"";
	$result=mysqli_query($connect,$sql_search);
	if($row=mysqli_fetch_array($result))
	{
		echo "名稱重複!"."<a href=\"index.php\">按此返回</a>";
		die();
	}


	$sql_insert="INSERT INTO `competition` (`name`,`total_score`,`school`) VALUES(\"$name\",0,\"$insert_school_name\")";
	mysqli_query($connect,$sql_insert);
	//header("location:q1.php?score=0&name=$name&school=$insert_school_name");

	$q="score=0&name=$name&school=$insert_school_name";
	echo "<script>
			var url=\"q1.php?\"+\"{$q}\";
			window.setTimeout(\"self.location='\"+url+\"';\",50);
		</script>";
?>

</body>
</html>
