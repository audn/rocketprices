<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Launching Rocketprices V3 > Rocketprices</title>
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
          Launching Rocketprices V3.
        </h1>
        <h3 style="margin-top:-20px;">It's been a while since our last big update, but damn its right about time we did something.</h3>
        <p>
        <br>
        <div class="info">
        <font size="5">
          <i class="fas fa-exclamation-circle" style="color:#1798e5"></i>
          What's changed?
          </font>
          <p>
          The most noticable change is our design, but we've also done a <strong>massive</strong> job by <strong>rewriting</strong> Rocketprices from scratch.
          <br>
          The last design's code was extremly messy - making the loadingtime on the website much longer. We also made sure to make it easier to use for phone users. This update made viewing items for you a lot easier!
          <p>
            We added a better <a href="/x/favicon" class="bluehref">favicon</a> to our website. From now on, if you have Rocketprices as <a href="/x/rocketprices-application" class="bluehref">an application</a> on your phone or tablet, the icon will be a lot better. <i>(The favicon was released before v3 update - so you might have seen it before.)</i>
            <p>
              The feature of selecting rarity in our filtering has been taken away at this moment for styling. We do  not know when it will come back - but it will come back for sure.
              <p>
        </div>
        <p>
          <div class="info">
          <font size="5">
            <i class="fas fa-palette" style="color:#8c7ae6;"></i></i>
            Painted prices<p>
            </font>
            <strong>Visible changes to painted items,</strong>
            <br>From now on, you will not be able to see the text "Painted Prices" when scrolling through Rocketprices.
            <p> - but how do I know if the item is painted or not then?
              <br> If theres an item that's painted, it will  have a
              <a href="#"class="bluehref">&nbsp;
                <i class="fas fa-spray-can"></i>
              </a>(spraycan) visible on it, with a blue background > meaning you can click the item to open the painted prices modal.
              <p>
                When opening the modal, there will no longer be a black background behind it due to a recent bug that was discovered before this release. We can't make a word on it coming back within the first few weeks, but we'll try to add something back later.
          </div>
          <p>
          <div class="info">
          <font size="5">
            <i class="fas fa-book-heart" style="color:#fd7e14;"></i></i>
            Rocketprices Dictionary
            </font>
            <p>
            We felt like we had to.. so we did.
            <p>
              You can now click words that <a href="#" class="bluehref">has this color on it</a> to view what it means > it's usually used on words such as slangs or things we belive is difficult for people to understand - such as favicon.
          </div>
        <p>
          <div class="info">
          <font size="5">
            <i class="fas fa-flask"style="color:#00ff6c;"></i>
            Huge thanks to everyone who participated!
            </font>
            <p>
            We would not have been able to release Rocketprices V3 without our amazing <a href="/x/beta-testers" class="bluehref">Beta Tester's</a> feedback in our Discord.
            <p> A huge thanks to everyone that has helped us on Instagram too! You made the new update special.
          </div>
          <p>
            <br>
            <span style="color:#1798e5;">thanks.</span>
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
