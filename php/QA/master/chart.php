<!DOCTYPE html>
<html>
<body>
<script src="http://d3js.org/d3.v4.min.js"></script>
<script src="http://dimplejs.org/dist/dimple.v2.3.0.min.js"></script><head>


<script>



      var svg = dimple.newSvg("body", 500, 600);

    var data =[
      { "Word":"Hello", "Awesomeness":2000 },
      { "Word":"World", "Awesomeness":3000 },
      { "Word":"ww", "Awesomeness":5000 }
    ];
    var chart = new dimple.chart(svg, data);

    chart.addCategoryAxis("x", "Word");
    chart.addMeasureAxis("y", "Awesomeness");
    chart.addSeries(null, dimple.plot.bar);
    chart.draw();
      
 



</script>

</body>
</html>
