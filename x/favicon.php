<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Dictionary > Rocketprices</title>
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
            Rocketprices dictionary
          </h1>
          <p>
          <h3>What does <span id="blue">Favicon</span> mean?</i></h3>
            <p>
              <br>
            <div class="text">
            A favicon is the icon shown in your adress-bar, or the icon when making our website into an application.
            <p>
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/1d/Wikipedia_favicon_in_Firefox_on_KDE.png">
            </div>
            <p>
          <br>
          <a href="/"class="btn-blue">
           <i class="fas fa-location-arrow"></i> Okay, take me back now.
        </a>
      </div>
    </div>
  </body>
</html>
<script>
  document.getElementByClassName("path").innerHTML =
   window.location.pathname;

    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
