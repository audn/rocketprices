<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Contact > Rocketprices</title>
    <?php require_once ('assets/php/head.php');?>
    <style>
    .active{border-left:3px solid #e67e22;}
    </style>
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
          <?php require_once ('assets/partners/aoeah.php');?>
        <h1>Support Center</h1>
        <h3>Please read our FAQ <i>(Frequently Asked Questions) before contacting us.</i></h3>
          <p>
            <br>
            <div class="title">
            How often do you update the prices?
          </div>
            <div class="text">
              We can't give an accurate estimate on this, as our prices make changes and updates whenever they feel its necessary. This is dependant on the fluctuations of the market, as we like to retain prices which properly reflect the current market.
              <p>
                However, we can ensure you that our pricers are always working hard to keep Rocketprices on top
          </div>
          <p>
            <div class="title">
            I need a middleman for my trade, can you help?
          </div>
            <div class="text">
             We offer middleman services in our
             <a href="https://discordapp.com/invite/rocketprices" class="lightpill ignoreahref">Discord
               <i class="fas fa-external-link" style="font-size:10px;margin-right:0px;"></i></a> server.
          </div>
          <br>
          <p>
          <a href="/contact" class="btn-blue1">
            <i class="fas fa-user-shield"></i>Contact staff
        </a>
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
