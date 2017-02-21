<!DOCTYPE html>
<html>
<body>
<script src="http://d3js.org/d3.v4.min.js"></script>
<script src="http://dimplejs.org/dist/dimple.v2.3.0.min.js"></script><head>


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


      document.getElementById("test").innerHTML=score[1];

      //json
      var j={"table":[{"name":name[1],"score":score[1]}]};
      for(i=2;i<length;i++){
        j['table'].push({"name":name[i],"score":score[i]});
        if(i>=10)
          break;
      }


    d3.selectAll("svg > *").remove();
    var svg = dimple.newSvg("body", 500, 600);
    var chart = new dimple.chart(svg.style("position", "fixed"), j['table']);
    chart.addCategoryAxis("x", "name");
    chart.addMeasureAxis("y", "score");
    chart.addSeries(null, dimple.plot.bar);
    chart.draw();

    }
  };
  xhttp.open("GET", "gethint.php?"+"school=\"交通大學\"", true);
  xhttp.send();   
}




</script>

<p id="test"></p>

</body>
</html>
