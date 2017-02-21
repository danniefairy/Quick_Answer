<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
/*
*ie上面使用get繁體字不會是亂碼
*/
$x="台灣大學";
$q="test=$x";
echo "<script>
var url=\"get_test_destination.php?\"+\"{$q}\";
window.setTimeout(\"self.location='\"+url+\"';\",50);
</script>";
?>
</body>
</html>

