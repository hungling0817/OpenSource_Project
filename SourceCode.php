<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}
/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  margin: 4% auto 0% auto ; 
}

table {
  border-collapse: collapse;
  width: 100%;
  background-color:white;
  opacity:0.8;
}

tr, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#8bb0f2; opacity:0.6;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button2 {
  background-color:  #8bb0f2;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button2:hover {
  opacity: 0.6;
  background-color: #ffad85;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #8bb0f2;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(1,1,1,0.1); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: white;
  opacity: 0.8;
  margin: 5% auto 15% auto ; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #ffad85;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #8bb0f2;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate1 {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    
</style>
</head>
<h1 align="center" class="sdij-r1">在 DroneEview，你可以不只在天空飛，更能遨遊全世界<br>因為我們給了你「全世界」</h1>
<body style ="background-image:url('https://images.pexels.com/photos/116720/pexels-photo-116720.jpeg?cs=srgb&dl=city-clouds-ocean-116720.jpg&fm=jpg');">


<div class="navbar">
  <a href="http://127.0.0.1:64046/index.html#">Home</a>
  <a href="https://uavcoach.com/news/">News</a>
  <a href="https://dronesplayer.com/product-review/">Reviews</a>
  <a href="http://dronestore.com.br/">Store</a> 
  <div class="dropdown">
    <button class="dropbtn">Brands
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.dji.com/tw/products/consumer?clickaid=MLFjeA2-2F4uyVQjUSyCgO73FZkMdYv-&clickpid=3078573&clicksid=72407cdeec13d8ab36ff92b2c32adf3a&from=dap_unique&pm=custom">DJI</a>
      <a href="https://us.yuneec.com/">YUNEEC</a>
      <a href="https://www.parrot.com/global/">Parrot</a>
      <a href="https://www.hubsan.com/na/index.php?main_page=index&country=%E5%8F%B0%E7%81%A3&lang=English%20%2F%20%24%20TWD&origin=Asia&spt_lang=en&zenid=th2e74dsupgh83jnc4r90ku967">Hubsan</a>
      <a href="https://www.horizonhobby.com/content/bladehelis">Blade</a>
      <a href="https://www.jjrc.com/goods/drone.html">JJRC</a>
      <a href="http://www.symatoys.com/">SYMA</a>
      <a href="http://www.udirc.com/drone">UDIRC</a>
      <a href="https://www.walkera.com/">walkera</a> 
    </div>
  </div> 

   <button2 onclick="document.getElementById('id01').style.display='block'" style="margin-right:10px;">Login</button2>

<div id="id01" class="modal">
  
  <form class="modal-content animate1" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button2 type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button2>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

</div>

<img src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/4UUSXxPtlik2jv75z/4k-aerial-view-drone-footage-flight-180-degree-high-shooting-of-beautiful-river-and-green-meadows-in-dramatic-sunset-light-with-sun-beams-turn-right-ukraine-europe-beauty-world-nature-landscape_bohufbhpx_thumbnail-full04.png" width="100%" height="450" ></a>


 <div class="sdij">
  <h3 class="sdij-r1">Developer   Introduction</h3>
</div>
<style type="text/css">
.sdij {
  font-family: Yanone Kaffeesatz, sans-serif;
  color: #fff;
  background-size: cover;
  text-transform: uppercase;
}
.sdij-r1 {
  font-size: 2.2em;
  line-height: 0.9em;
  padding-left: 0.05em;
  font-weight: 20;
}
</style>

<div style="width:100%;height:25%;content:300px;">
<div class="tab">
  <button class="tablinks" onclick="openDeveloper(event, 'HungLing')">HungLing</button>
  <button class="tablinks" onclick="openDeveloper(event, 'Pishi')">Pishi</button>
  <button class="tablinks" onclick="openDeveloper(event, 'Li')">Li</button>
  <button class="tablinks" onclick="openDeveloper(event, 'Dingray')">Dingray</button>
</div>
	<div id="container" style type="text/css"
#longer{height:80px;overflow:auto;word-break: normal;}
#long{overflow:hidden;word-break: normal;}>
 
<div id="HungLing" class="tabcontent">
  <h4 align="center">
  &nbsp&nbsp&nbsp&nbsp從C語言到物件導向的Java、到網站架構的前端語言html、css跟JavaScript，這些都是我曾接觸過的，但無一專精也無一精通。在大二下選修了開放軟體實務的課程，希望能藉此機會認識更多程式語言與應用介面。<br>
<br>&nbsp&nbsp&nbsp&nbsp除了寫程式之外，我更喜歡「設計」，希望未來可以找到慣用的語言以及學好它，更期許未來能學會如何設計及建構網頁，實用所學。
</h4>
	</div>
</div>

<div id="Pishi" class="tabcontent">
  <h4 align="center">
  &nbsp&nbsp&nbsp&nbsp基礎程式設計C及C++，雅思6.5。曾任Google程式設計師助理。</h4> 
</div>

<div id="Li" class="tabcontent">
  <h4 align="center">&nbsp&nbsp&nbsp&nbsp My name is LI HUA-YU, I'm group1's member.</h4>
</div>

<div id="Dingray" class="tabcontent">
  <h4 align="center">&nbsp&nbsp&nbsp&nbsp 就讀淡江大學資訊創新與科技學系二年級，目前致力於JETEKS團隊製作線上恐怖解謎遊戲，主要負責故事優化與以Blender製作場。
景與各類物品的3D模組。</h4>
</div>
</style>

 <div class="sdij">
  <h3 class="sdij-r1">About   DroneEview</h3>
 </div>
<style type="text/css">
.sdij {
  font-family: Yanone Kaffeesatz, sans-serif;
  color: #fff;
  background-size: cover;
  text-transform: uppercase;
}
.sdij-r1 {
  font-size: 2.2em;
  line-height: 0.9em;
  padding-left: 0.05em;
  font-weight: 20;
}
</style>


<div style="width:100%;height:25%;content:300px;">
<div class="tab">
	 <button class="tablinks" onclick="openIntro(event, 'About Us')">About</button>
 	<button class="tablinks" onclick="openIntro(event, 'Our Motivation')">Motivation</button>
</div>
	<div id="container" style type="text/css"
#longer{height:80px;overflow:auto;word-break: normal;}
#long{overflow:hidden;word-break: normal;}>

 <div id="About Us" class="tabcontent">
  <h4 align="center">
&nbsp&nbsp&nbsp&nbsp DroneEview is here to make sure you, the consumer, are up to date on all the latest drone news,
product releases, YouTube videos and legal precedents so you can stay informed about the rise of the commercial drone.
<br><br>
&nbsp&nbsp&nbsp&nbsp When you find or capture something cool, the only natural way is to share it with your friendsor members you met at DroneEview.<br>
The part of DroneEview contain online socializing where those sharing similar interests may interact with one another in member.
<br><br>
&nbsp&nbsp&nbsp&nbsp You are able to share photos and videos at anytime, keeping on trend with all that stuffs of drone. 
</h4>
</div>

<div id="Our Motivation" class="tabcontent">
  <h4 align="center">
&nbsp&nbsp&nbsp&nbsp 在網路炙手可得的時代，任何想了解的資訊總能透過"搜尋"鍵，找到幾乎無奇不有的解答。而在密密麻麻的搜尋結果中，我們難免需要透過一些篩選及整理才能找到最想要的答案。因此我們希望能透過架設專屬網頁，打造一個整合相關資訊的平台。
<br><br>
&nbsp&nbsp&nbsp&nbsp 以亞洲目前最大的無人機資訊整合平台「DronesPlayer」為例，DronesPlayer 是全球最大的中文 UAV 無人機新聞平台，用戶群遍及台灣、香港、澳門、馬來西亞、新加坡，以及美國和澳洲的海外華人社區。主要為報導無人機產業新聞和航拍科技資訊，平台內容更是涵蓋無人機法規演變、無人機應用方案，並提供提供空拍機評測、航拍機教學、多軸飛行器產品情報、攝影器材介紹，還包羅航天航太、人工智慧等的最新動態，以及空拍圖和航拍影片。<br><br>
&nbsp&nbsp&nbsp&nbsp 而我們更盼望能與全世界的無人機愛好者、無人機專業人員、航拍師、空拍愛好者和相關從業員接軌，架設專屬平台「DroneEview」分享此領域的相關知識和資訊，創建專屬無人機愛好者的交流平台之餘，推廣無人機文化！<br><br>
&nbsp&nbsp&nbsp&nbsp 有別於前者，你不僅能在DroneEview 上找到你想知道得任何無人機相關資訊，更能把DroneEview 當作一線交流媒體，無時無刻與其他無人機愛好者分享、交流。你可以選擇閱覽平台上官方用戶更新的新聞資訊與最新消息，或者直接以訊息框回應、聯絡，你也可以瀏覽其他用戶上傳的資訊與消息，按讚、分享及留言，就像你熟悉的社交平台一樣。我們不僅想與世界接軌，甚至想與世界沒有距離、沒有侷限 !
</h4> 
	</div>
</div>

<br>
 <div class="sdij">
  <h3 class="sdij-r1">Maps</h3>
</div>
<style type="text/css">
.sdij {
  font-family: Yanone Kaffeesatz, sans-serif;
  color: #fff;
  background-size: cover;
  text-transform: uppercase;
}
.sdij-r1 {
  font-size: 2.2em;
  line-height: 0.9em;
  padding-left: 0.05em;
  font-weight: 20;
}
</style>

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1OkEtyCaGNjKhLeMr6L2IU975SP8&ll=11.344750192106085%2C-174.39973820111732&z=3" width="100%" height="400" frameborder="0" style="border:0" align=center allowfullscreen></iframe>
<br>
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aii3_ZwyR6rqBpmybSaeY6jKZ-k&hl=en_US&ll=23.39150947449059%2C120.33229125210869&z=8" width="100%" height="400" align=center frameborder="0" style="border:0" allowfullscreen>
</iframe>  


<br><br>
 <div class="sdij">
<h3 class="sdij-r1">Comment   Area</h3>
</div>
<style type="text/css">
.sdij {
  font-family: Yanone Kaffeesatz, sans-serif;
  color: #fff;
  background-size: cover;
  text-transform: uppercase;
}
.sdij-r1 {
  font-size: 2.2em;
  line-height: 0.9em;
  padding-left: 0.05em;
  font-weight: 20;
}
</style>

<center id="commentArea">

<p>
<table  border="1">
<tr>
<td>No.</td>
<td>Comments：</td>
</tr>

<?php
$link=mysqli_connect("localhost","DroneEview","DroneEview") or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link, "Drone"); //選擇資料庫abc
$sql = "SELECT * FROM eview"; //在test資料表中選擇所有欄位
mysqli_query($link,'SET CHARACTER SET utf8');   // 送出Big5編碼的MySQL指令
mysqli_query($link,"SET collation_connection 'utf8'");
$result = mysqli_query($link,$sql); // 執行SQL查詢
$total_fields=mysqli_num_fields($result); // 取得欄位數
$total_records=mysqli_num_rows($result);  // 取得記錄數
?>
</p>
</table>
<form action="/POSS107G01/action.php" method="post">
  <font size="3">Leave comment here<br></font>
  <input type="text" name="comment">
  <br><br>
  <input type="submit" value="Comment!">
</form>
</center>


<script>
function openIntro(evt, options) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(options).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
function openDeveloper(evt, developerName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(developerName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div id="footer" style="background-color:lightgray;clear:both;text-align:center;bottom:0px;">
Copy Right © DroneEview</div>
   
</body>
</html> 
