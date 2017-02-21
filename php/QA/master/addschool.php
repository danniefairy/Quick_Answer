<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php
		include 'connect_db.php';

		/*
		*檢查是否有輸入過
		*如果有就直接進去TABLE_SCORE的地方
		*/
		$insert_school_name=$_POST['school_name'];
		$sql_search="SELECT * FROM `master` WHERE `school`=\"$insert_school_name\"";
		$result=mysqli_query($connect,$sql_search);
		if($row=mysqli_fetch_array($result))
		{
			//header("location:game_bar.php?school=\"$insert_school_name\"");//舊版game_char
			$n="\\\"".$insert_school_name."\\\"";
			$q="school=$n";
			echo "<script>
				var url=\"game_bar.php?\"+\"{$q}\";
				window.setTimeout(\"self.location='\"+url+\"';\",50);
			</script>";
			die();
		}

		/*
		*若是第一次輸入則將新學校名稱加入
		*/
		$school_name=$_POST['school_name'];
		$sql_insert="INSERT INTO `master` (`school`) VALUES(\"$school_name\")";//舊版game_chart
		mysqli_query($connect,$sql_insert);
		//header("location:game_bar.php?school=\"$school_name\"");
		$n="\\\"".$insert_school_name."\\\"";
		$q="school=$n";
		echo "<script>
			var url=\"game_bar.php?\"+\"{$q}\";
			window.setTimeout(\"self.location='\"+url+\"';\",50);
		</script>";
	?>

</body>
</html>