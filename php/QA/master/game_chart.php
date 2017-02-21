<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="http://d3js.org/d3.v4.min.js"></script>
<script src="http://dimplejs.org/dist/dimple.v2.3.0.min.js"></script><head>

<title>Mifriend 快問快答</title>
<link rel="stylesheet"
        href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <link rel="stylesheet"
       href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <script src="http://code.jquery.com/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
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

<script>
var timer=setInterval("showHint()",500);

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


    $(function(){
      //find screen weight & height
      var w = $(window).width();
      var h = $(window).height();
      $("#show").html(w+":"+h);

      //chart1
      d3.selectAll("svg > *").remove();
      var svg = dimple.newSvg("body", w/3, h/1.5);
      var chart = new dimple.chart(svg.style("position", "fixed"), j['table']);
      var x=chart.addCategoryAxis("x", "name");
      x.fontSize="0px";
      var y=chart.addMeasureAxis("y", "score");
      y.fontSize=w/70+"px";
      y.title="";
      chart.addSeries("chart", dimple.plot.bar);
      chart.assignColor("chart","#00FFFF");
      chart.draw();

      //chart2
      d3.selectAll("svg2 > *").remove();
      var svg2 = dimple.newSvg("body", w/3, h/3);
      var chart2 = new dimple.chart(svg2.style("top", "377.5px"), j['table']);
      var x2=chart2.addCategoryAxis("x", "name");
      x2.hidden=true;
      var y2=chart2.addMeasureAxis("y", "score");
      y2.hidden=true;
      y2.showGridlines=false;
      chart2.addSeries("chart2", dimple.plot.bar);
      chart2.assignColor("chart2","white");
      chart2.draw();

      });

    

    }
  };
  var school_name=<?php echo $_GET['school']; ?>;
  xhttp.open("GET", "gethint.php?"+"school="+"\""+school_name+"\"", true);
  xhttp.send();   
}
</script>
<style type="text/css">
  svg{
    position: absolute;
    top: 150px;
    left: 35%;
  }
</style>
</head>
<body>


<br><br>
<?php 
    $school=$_GET['school'];
    $link="score_table.php?school=".$school;
    echo "<h1 align=\"center\" style=\"font-family:Microsoft JhengHei;\"><a href=".$link." style=\"text-decoration:none;\">遊戲開始</a></h1>" ;
  ?>  
  
  <hr id="flip" class="w3-border-black" style="margin:auto;width:40%">
  <div id="panel" style="margin:auto;width:40%"   ><h2 style="font-size:1.7vw;">goo.gl/RvrF41</h2></div>
  <h3 align="center" style="font-family:Microsoft JhengHei;">挑戰人數:<span id="number">0</span><span>人</span></h3>
 
</body>
</html>
