<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Rocketprices</title>
    <?php require_once ('assets/php/head.php');?>
    <style>
    .active{border-left:3px solid #00ff6c;}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <div class="container">
        <?php require_once ('assets/php/sidebar.php'); ?>
      <div class="content column">
        <div class="phoneHeader">
          <button type="button" class="navbar-toggle marginPhone">
            <span class="icon-bar"></span>
            <span class="icon-barMiddle"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="phoneHeaderSpace"></div>
        <h1>Launching update!</h1>
          <p>
            <div class="w3-light-grey">
            <div id="myBar" class="w3-container w3-green">
            </div>
          </div>
            <p>
          <div class="btn-launch"onclick="move();this.disabled='true'">
            Update
          </div>
          <p class="myDiv" id="myP">Adding <span id="demo">0</span> new files.</p>
      </div>
    </div>
  </body>
</html>
<script>
function move() {
  var elem = document.getElementById("myBar");
  var width = 0;
  var id = setInterval(frame, 50);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      document.getElementById("myP").className = "w3-text-green w3-animate-opacity";
      document.getElementById("myP").innerHTML = "Successfully launched Rocketprices v3!";

    } else {
      width++;
      elem.style.width = width + '%';
      var num = width * 1 / 10;
      num = num.toFixed(0)
      document.getElementById("demo").innerHTML = num;
    }
  }
}
</script>
<style>
.green1{
  color:green;
}
.btn-launch{
  border-radius:.2em;
  padding:10px 40px;
  color:white;
  cursor:pointer;
  display:inline-block;
  background: #1798e5;
}
</style>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
