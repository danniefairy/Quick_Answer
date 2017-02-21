<!DOCTYPE html>
<html>
<title>Mifriend 快問快答</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('../image/master_start.jpg');
    min-height: 100%;
    
}



.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.click{
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

.click:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-white">
      <li><a href="#about" onclick="toggleFunction()">ABOUT</a></li>
      <li><a href="#portfolio" onclick="toggleFunction()">PORTFOLIO</a></li>
      <li><a href="#contact" onclick="toggleFunction()">CONTACT</a></li>
      <li><a href="#">SEARCH</a></li>
    </ul>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle click" style="white-space:nowrap; ">
    <span  class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity " style="border-radius: 25px;"><a href="start.php" style="text-decoration:none;"> <span>開始遊戲</span></a></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">遊戲說明</h3>
  <p>透過剛剛的演講，相信大家已經充分了解了微軟體驗計畫的精神以及細節。但大家聽完後都希望知道自己經過這一系列的演講到底吸收了多少，因此我們準備了一個小遊戲來帶領大家回顧今天的收穫吧~</p>
  <p>我們將透過快問快答讓大家快速的回想今天所吸收到的新知。快問快答總共有十個回合，每一回合開始前會有五秒準備時間，五秒一結束題目便會顯現出來，有十秒可以答題，答題方式是採取單選題，回答越快且答對的人當題可以得到越高分喔~ 最後我們會在投影幕上公布前十名的暱稱，並且將送精美小禮物給前三名的人喔~</p>


 
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-btn w3-padding w3-light-grey w3-hover-grey" style=" border-radius: 25px;"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>

  
</footer>
 

</body>
</html>
