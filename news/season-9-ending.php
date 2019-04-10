<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">

    <title>Season 10! > Rocketprices</title>
    <?php require_once ('../assets/php/head.php');?>
  </head>
  <body>
    <div class="container">
        <?php require_once ('../assets/php/sidebar.php'); ?>
      <div class="content column">
        <div class="phoneHeader">
          <button type="button" class="navbar-toggle marginPhone">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="phoneHeaderSpace"></div>
        <h1>
         Season 10 starting!
        </h1>
        <p>
        <br>
          <a class="btn-new-green" href="http://rocketprices.net/season" style="display:inline-block;">Check when Season ends! <i style="margin-left:15px;"class="fas fa-arrow-alt-right"></i></a>
      </div>
    </div>
  </body>
</html>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<style>
.btn-new-green{
  background-color: #6fd874;
  border-radius: 15px;
  padding: 0px 50px;
  transition: all 0.2s ease;
  line-height: 61px;
  font-family: 'Baloo Bhaijaan', cursive;
  color:white !important;
  border-bottom: 5px solid rgba(0, 0, 0, 0.15);
}
.lightpill_blue{
  color: #1798e5;
  background-color: rgb(23, 152, 229, 0.16);
  padding: 10px 20px;
  border-radius: 1px;
  border-radius: 15px;
  font-size: .75em;
  display: inline-block;
}
.lightpill_blue_phonehead {
  color: #ffffff;
  background-color: rgba(255, 255, 255, 0.16);
  padding: 10px 20px;
  border-radius: 1px;
  border-radius: 15px;
  font-size: .75em;
  display: inline-block;
}
.btn-new-green:active{
  border-bottom: 0px solid rgba(0, 0, 0, 0.15);
 transform: translateY(5px);
}
.btn-new-green:hover{
  background-color: #53a257;
}
</style>
