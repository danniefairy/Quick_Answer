<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Mifriend 快問快答</title>	
	<style type="text/css">
		 body{
	      background-image: url("../image/score_table_background.jpg");
	      background-size:cover;
	      background-repeat: no-repeat; 
	      background-attachment: fixed;
	      text-align: center;
	    }
	    #page-wrap { width: 490px; margin: 40px auto; }
	</style>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>

	<script>
		$(function() {
			$(".meter > span").each(function() {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});
		});
	</script>
	
	<style>
		.meter { 
			height: 20px;  /* Can be anything */
			position: relative;
			margin: 10px 0 10px 0; /* Just for demo spacing */
			background: rgba(0,0,0,0.5);
			-moz-border-radius: 25px;
			-webkit-border-radius: 25px;
			border-radius: 25px;
			padding: 10px;
			-webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
			-moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
			box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
		}
		.meter > span {
			display: block;
			height: 100%;
			   -webkit-border-top-right-radius: 8px;
			-webkit-border-bottom-right-radius: 8px;
			       -moz-border-radius-topright: 8px;
			    -moz-border-radius-bottomright: 8px;
			           border-top-right-radius: 8px;
			        border-bottom-right-radius: 8px;
			    -webkit-border-top-left-radius: 20px;
			 -webkit-border-bottom-left-radius: 20px;
			        -moz-border-radius-topleft: 20px;
			     -moz-border-radius-bottomleft: 20px;
			            border-top-left-radius: 20px;
			         border-bottom-left-radius: 20px;
			background-color: rgb(43,194,83);
			background-image: -webkit-gradient(
			  linear,
			  left bottom,
			  left top,
			  color-stop(0, rgb(43,194,83)),
			  color-stop(1, rgb(84,240,84))
			 );
			background-image: -moz-linear-gradient(
			  center bottom,
			  rgb(43,194,83) 37%,
			  rgb(84,240,84) 69%
			 );
			-webkit-box-shadow: 
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			-moz-box-shadow: 
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			box-shadow: 
			  inset 0 2px 9px  rgba(255,255,255,0.3),
			  inset 0 -2px 6px rgba(0,0,0,0.4);
			position: relative;
			overflow: hidden;
		}
		.meter > span:after, .animate > span > span {
			content: "";
			position: absolute;
			top: 0; left: 0; bottom: 0; right: 0;
			background-image: 
			   -webkit-gradient(linear, 0 0, 100% 100%, 
			      color-stop(.25, rgba(255, 255, 255, .2)), 
			      color-stop(.25, transparent), color-stop(.5, transparent), 
			      color-stop(.5, rgba(255, 255, 255, .2)), 
			      color-stop(.75, rgba(255, 255, 255, .2)), 
			      color-stop(.75, transparent), to(transparent)
			   );
			background-image: 
				-moz-linear-gradient(
				  -45deg, 
			      rgba(255, 255, 255, .2) 25%, 
			      transparent 25%, 
			      transparent 50%, 
			      rgba(255, 255, 255, .2) 50%, 
			      rgba(255, 255, 255, .2) 75%, 
			      transparent 75%, 
			      transparent
			   );
			z-index: 1;
			-webkit-background-size: 50px 50px;
			-moz-background-size: 50px 50px;
			-webkit-animation: move 2s linear infinite;
			   -webkit-border-top-right-radius: 8px;
			-webkit-border-bottom-right-radius: 8px;
			       -moz-border-radius-topright: 8px;
			    -moz-border-radius-bottomright: 8px;
			           border-top-right-radius: 8px;
			        border-bottom-right-radius: 8px;
			    -webkit-border-top-left-radius: 20px;
			 -webkit-border-bottom-left-radius: 20px;
			        -moz-border-radius-topleft: 20px;
			     -moz-border-radius-bottomleft: 20px;
			            border-top-left-radius: 20px;
			         border-bottom-left-radius: 20px;
			overflow: hidden;
		}
		
		.animate > span:after {
			display: none;
		}
		
		@-webkit-keyframes move {
		    0% {
		       background-position: 0 0;
		    }
		    100% {
		       background-position: 50px 50px;
		    }
		}
		
		.orange > span {
			background-color: #f1a165;
			background-image: -moz-linear-gradient(top, #f1a165, #f36d0a);
			background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f1a165),color-stop(1, #f36d0a));
			background-image: -webkit-linear-gradient(#f1a165, #f36d0a); 
		}
		
		.red > span {
			background-color: #f0a3a3;
			background-image: -moz-linear-gradient(top, #f0a3a3, #f42323);
			background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f0a3a3),color-stop(1, #f42323));
			background-image: -webkit-linear-gradient(#f0a3a3, #f42323);
		}
		
		.nostripes > span > span, .nostripes > span:after {
			-webkit-animation: none;
			background-image: none;
		}
	</style>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script> 
  $(document).ready(function(){
      $("#flip").click(function(){
          $("#panel").slideToggle("slow");
      });
  });
  </script>

  <style> 
  #panel, #flip {
      padding: 5px;
      text-align: center;
      background-color: background:rgba(0,0,0,0.5);

  }

  #panel {
      padding: 20px;
      display: none;
      border-radius: 25px;

  }

  #boxshadow {
    position: relative;
    -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    background: white;
  }

  /* Make the image fit the box */
  #boxshadow img {
      width: 100%;
      border: 1px solid #8a4419;
      border-style: inset;
  }

  #boxshadow::after {
      content: '';
      position: absolute;
      z-index: -1; /* hide shadow behind image */
            
      width: 70%; 
      left: 15%; /* one half of the remaining 30% */
      height: 100px;
      bottom: 0;
  }
  </style>

	<script>
var timer=setInterval("showHint()",1000);

function showHint() {
  var xhttp;

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var x=this.responseText;
      var splited=x.split("@");
      var name=splited[0].split("?");
      var score=splited[1].split("!");
      var length=score.length;

      var anonymous="?";
      document.getElementById("number").innerHTML=length-1;
		
      //json
      var j={"table":[{"name":name[1],"score":score[1]}]};
      for(i=2;i<length;i++){
        j['table'].push({"name":name[i],"score":score[i]});
        if(i>=10)
          break;
      }

    //show bar
    for(i=1;i<length;i++){
    	document.getElementById(i).style.width = score[i]+"%";
    	document.getElementById(i+".div").style.display = "block";
    	document.getElementById(i).innerHTML=score[i];
    }
	
    

    }
  };
  var school_name=<?php echo $_GET['school']; ?>;
  xhttp.open("GET", "gethint.php?"+"school="+"\""+school_name+"\"", true);
  xhttp.send();   
}
</script>

</head>

<body>

	<div id="page-wrap">
		<?php 
		    $school=$_GET['school'];
		    $link="score_table.php?school=".$school;
		    echo "<h1 align=\"center\" style=\"font-family:Microsoft JhengHei;\"><a href=".$link." style=\"text-decoration:none;\">遊戲開始</a></h1>" ;
  		?>  
  		<hr  style="margin:auto;width:40%; ">
		<hr id="flip"  style="margin:auto;width:40%; height:0px; border:none;">
  		<div id="panel"  style="margin:auto;width:40%"   ><h2 style="font-size:1.7vw;">goo.gl/RvrF41</h2></div>
  		<h3 align="center" style="font-family:Microsoft JhengHei; font-size:30px;">挑戰人數:<span id="number">0</span><span>人</span></h3>

		<div id="1.div" style="display:none;" class="meter red">
			<span id="1" style="width: 0%; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="2.div" style="display:none;" class="meter red">
			<span id="2" style="width: 0%; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="3.div" style="display:none;" class="meter red">
			<span id="3" style="width: 0%; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="4.div" style="display:none;" class="meter">
			<span id="4" style="width: 0% ; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="5.div" style="display:none;" class="meter">
			<span id="5" style="width: 0%; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="6.div" style="display:none;" class="meter">
			<span id="6" style="width: 0%; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="7.div" style="display:none;" class="meter">
			<span id="7" style="width: 0%; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="8.div" style="display:none;" class="meter">
			<span id="8" style="width: 0%; font-size:22.5px; font-weight: 900; "></span>
		</div>
		<div id="9.div" style="display:none;" class="meter">
			<span id="9" style="width: 0% ; font-size:22.5px; font-weight: 900;"></span>
		</div>
		<div id="10.div" style="display:none;" class="meter">
			<span id="10" style="width: 0%; font-size:22.5px; font-weight: 900;"></span>
		</div>

		

	

	</div>
	
</body>

</html>