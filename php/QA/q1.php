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


<!-- //Custom Theme files -->


<!-- count down-->
<script type="text/javascript">
	var next_question='2';
	var name="<?php 
				header("Content-Type:text/html; charset=utf-8");
				echo $_GET['name']; 
				?> ";
	var school="<?php 
				header("Content-Type:text/html; charset=utf-8");
				echo $_GET['school']; 
				?> ";

	var t=16;
	var timer=setInterval("countdown(t)",1000);

	function countdown(){
		/*
		*按鈕輸出的url由接收頁接收
		*答案對了就看時間剩餘多少來計分，答案錯的直接0分
		*/
		var send1=document.getElementById("send1");
		var send2=document.getElementById("send2");
		var send3=document.getElementById("send3");

		send1.addEventListener("click", function(){window.location.href='q'+next_question+'_insert.php?score='+0+'&name='+name+'&school='+school;});
	    send2.addEventListener("click", function(){window.location.href='q'+next_question+'_insert.php?score='+t+'&name='+name+'&school='+school;});
	    send3.addEventListener("click", function(){window.location.href='q'+next_question+'_insert.php?score='+0+'&name='+name+'&school='+school;});


	    //顯示倒數時間
		document.getElementById("countdown").innerHTML=--t%10;

		/*
		*時間到強制切換到下一頁且得分為0
		*/
		if(t=='0')
		{
			window.clearInterval(timer);
			window.location.href='q'+next_question+'_insert.php?score='+0+'&name='+name+'&school='+school;
		}
		
		/*
		*從16~11秒為準備時間
		*10~0為作答時間
		*開始作答時按鈕才會顯示
		*/
		else if(t=='10'){
			send1.disabled=false;
			send2.disabled=false;
			send3.disabled=false;
			document.getElementById("question").innerHTML="請問若您為台灣國籍但目前就讀國外大學，是否可以擔任台灣微軟實習生呢?";
			document.getElementById("countdown").innerHTML=10;
		}
	}
</script>
<!-- count down -->
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
					<h3 style="font-family:Microsoft JhengHei;">目前成績:0</h3>
					<h5 style="font-family:Microsoft JhengHei;">時間倒數:<p id="countdown" style=" font-size:150%;"></p></h5>
				</div>
				<div class="price-bg">
					<p class="price-label-2"><span>Q1</span></p>
					<ul class="count">
						<li id="question" style="font-family:Microsoft JhengHei;"></li>

					</ul>

					<div style="text-align:center;">
						<br>
						<button id="send1" type="button" class="btn btn-success"  style=" height:35px; width:120px;" disabled="true" >可以</button>
						<br><br>
						<button id="send2" type="button" class="btn btn-info" style=" height:35px; width:120px;" disabled="true" >不行</button>
						<br><br>
						<button id="send3" type="button" class="btn btn-danger" style=" height:35px; width:120px;" disabled="true" ;>依能力而定</button>
						<br>
					</div>

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
