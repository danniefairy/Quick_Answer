<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Mifriend 快問快答</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!-- Custom Theme files -->
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //Custom Theme files -->

</head>
<body>
	<!-- main -->
	<div class="main">
		<h1 style="font-family:Microsoft JhengHei;">Mifriend 快問快答</h1>
		<div class="main-row">

			<!-- pricing-table -->
			<div class="pricing-grid agileits-shadow">
				<div class="w3ls-main">
					<div id="cube2" class="show-front">
					  <figure class="top top-two"> </figure>
					</div>
				</div>
				<div class="agileinfo-price two">
					<h3 style="font-family:Microsoft JhengHei;">總得分</h3>
				</div>
				<div class="price-bg">
					<ul class="count">
					

					</ul>

					<div style="text-align:center;">
						<?php 
							include 'connect_db.php';
							$total_score=$_GET['score'];
							$name=$_GET['name'];
							$school=$_GET['school'];
							$sql_update="UPDATE `competition` SET `total_score`=\"$total_score\" WHERE `name`=\"$name\" and `school`= \"$school\" ";
							mysqli_query($connect,$sql_update);

						?>
						<p class="price-label-2" style="font-size:250%;"><?php echo "$name";  ?></p>
						
						<br>
						<p class="price-label-2"><span><?php echo "$total_score";  ?></span></p>

					</div>
						<div style="text-align:center;">
						<img src="./image/microsoft.png">
					</div>
					<p class="price-label-2" style="text-align:center;">請勿跳離頁面</p>
				</div>
			</div>




		</div>

	</div>
	<!-- //main -->

	<!-- popup.js -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
	 <script>
		$(document).ready(function() {


		});
	</script>
	<!-- //popup.js -->
</body>
</html>
