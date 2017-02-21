<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>
<script src="http://d3js.org/d3.v4.min.js"></script>
<script src="http://dimplejs.org/dist/dimple.v2.3.0.min.js"></script><head>


<p id="demo"></p>

<script>
var timer=setInterval("showHint()",1000);
var count=0;
function showHint() {

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  count=count+1;
  xhttp.open("GET", "temp_get.php?name=大學&timer="+count, true);
  xhttp.send();
}
loadDoc();
}
</script>


</body>
</html>
