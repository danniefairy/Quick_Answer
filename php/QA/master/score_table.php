<!DOCTYPE html>
<html>
<head>
  <title>Mifriend 快問快答</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet"
	      href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet"
	     href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<style>
	  .bootstrap-demo{
	  	width:500px;
	  	display:block; 
	  	margin:auto;
	  }
	  body{
	  	background-image: url("../image/score_table_background.jpg");
	  	background-size:cover;
	  	background-repeat: no-repeat; 
	  	background-attachment: fixed;
	  }
	  div{
	  	background-color:rgba(192,192,192,0.3);
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
</head>

<body>
	<?php 
		//取得總人數，並可以用$result在下面繼續找排名
		include 'connect_db.php'; 
		$school=$_GET['school'];
		$sql_search="SELECT c.name,c.total_score FROM master m JOIN competition c ON m.school=c.school Where m.school=$school ORDER BY c.total_score DESC";
		$result=mysqli_query($connect,$sql_search);
	?>	
	<h1 align="center" style="font-family:Microsoft JhengHei;">得分榜</h1>
	<hr id="flip" class="w3-border-black" style="margin:auto;width:40%">
	<div id="panel" style="margin:auto;width:40%" 	><h2 style="font-size:1.7vw;">goo.gl/RvrF41</h2></div>
	<h3 align="center" style="font-family:Microsoft JhengHei;"><?php echo "總人數: ".mysqli_num_rows($result)."人"; ?></h3>
	<div id="boxshadow" class="bootstrap-demo  w3-animate-top" >
		<table  class="table "> <!-- class table-condensed -->
		    <thead ><!-- table head-->
		        <tr style="background-color: lightgrey;">
		            <td><font size="5"><b>暱稱</b></font></th>
		            <td><font size="5"><b>成績</b></font></th>
		         </tr>
		    </thead>
		    <tbody>
		    	
				<?php
					$count=1;
					while($row=mysqli_fetch_array($result)){
						if($count==1)
							echo "<tr style=\"background-color: rgba(255,0,0,0.3);\">";
						elseif($count==2)
							echo "<tr style=\"background-color: rgba(0,0,255,0.3);\">";
						elseif($count==3)
							echo "<tr style=\"background-color: rgba(0,255,0,0.3);\">";
						else
							echo "<tr>";
						echo "<td><font size=\"5\">".$row[0]."</font></td><td><font size=\"5\">".$row[1]."</font></td>";
						echo "</tr>";
						$count++;
						if($count>10)
							break;
					}	
				?>
		    </tbody>
		</table>
	</div>
</body>
</html>