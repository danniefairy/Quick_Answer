<!DOCTYPE html>
<html>
<head>
  <title>Mifriend 快問快答</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      display:block; 
      margin:auto;
      height: 400px; 
      width:300px;
      text-align:center;
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
    img {
        opacity: 0.5;
        filter: alpha(opacity=50); /* For IE8 and earlier */
    }
    img:hover {
        opacity: 1.0;
        filter: alpha(opacity=100); /* For IE8 and earlier */
    }
  </style>
</head>
  
<body>
  
  <h1 align="center" style="font-family:Microsoft JhengHei;">Mifriend 快問快答</h1>
  <hr class="w3-border-black" style="margin:auto;width:40%">
  <h3 align="center" style="font-family:Microsoft JhengHei;">由主持人輸入校名來建立活動</h3>
  <div class="bootstrap-demo  w3-animate-top" style="border-radius: 50%;">
  <br>
    <form method="post" action="addschool.php"  align="center">
      <h5 tyle="font-family:Microsoft JhengHei;">學校名稱:</h5>
      <input type="text" name="school_name" size="15">
      <br><br>
      <input type="submit"  class="btn btn-success" style="font-family:Microsoft JhengHei;">
      <input type="reset"  class="btn btn-danger" style="font-family:Microsoft JhengHei;">
    </form>

    <br>
    <img src="../image/microsoft.png" style="height:200px; display:block; margin:auto;  border-radius: 50%; " >
    <br>
    <br>
    <br>

  </div>
</body>
</html>