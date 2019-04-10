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
          <h3>What does <span id="blue">Beta Tester</span> mean?</i></h3>
            <p>
              <br>
            <div class="text">
            Beta-testers is a role given to people in our Discord who wants to help give feedback on new features and ideas before we release them to the public.
            <p>
              Their main job is to give feedback on content shown by the administrator of Rocketprices - to make sure we release designs and features that's been tested a good thousands of times, before it's shown to the public.
              <p>
                As a beta tester, you are not allowed to share anything you've seen with the community.
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
