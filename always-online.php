<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Rocketprices</title>
    <?php require_once ('assets/php/head.php');?>
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
        <h1>
        <div class="wrap">
          <div class="loading">
            <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
            <div class="text">Loading in..</div>
        </div>
        </h1>
      </div>
    </div>
  </body>
</html>
<style>
a:link{
  cursor:progress !important;
  pointer-events: none;
}
</style>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
