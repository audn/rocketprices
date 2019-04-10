<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Certifications > Rocketprices</title>
    <?php require_once ('assets/php/head.php');?>
    <style>
    .active{border-left:3px solid #f1c40f;}
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
        <h1>
          Certifications
          </h1>
          <p class="phone">
        <h3>Check all the available certifications you can get on your items.
        <br>The list is sorted by tiers. Tier 1 on top, and tier 5 at last.</h3>
        <p>
        <br>
        <div class="certified tier1">
          <div class="title1 padding1030">Striker</div>
          <div class="text1 padding1030">
            Shots on Goal
          </div>
        </div>
        <p>
        <div class="certified tier2">
          <div class="title1 padding1030">Scorer</div>
          <div class="text1 padding1030">
            Goals scored
          </div>
        </div>

        <div class="certified tier2">
          <div class="title1 padding1030">Tactician</div>
          <div class="text1 padding1030">
            Centering the ball
          </div>
        </div>

        <div class="certified tier2">
          <div class="title1 padding1030">Sweeper</div>
          <div class="text1 padding1030">
            Clear the ball
          </div>
        </div>
        <p>
        <div class="certified tier3">
          <div class="title1 padding1030">Aviator</div>
          <div class="text1 padding1030">
            Aerial goals
          </div>
        </div>

        <div class="certified tier3">
          <div class="title1 padding1030">Victor</div>
          <div class="text1 padding1030">
            Amount of wins
          </div>
        </div>

        <div class="certified tier3">
          <div class="title1 padding1030">Playmaker</div>
          <div class="text1 padding1030">
            Assists
          </div>
        </div>

        <div class="certified tier3">
          <div class="title1 padding1030">Goalkeeper</div>
          <div class="text1 padding1030">
            Saves
          </div>
        </div>
        <p>
        <div class="certified tier4">
          <div class="title1 padding1030">Paragon</div>
          <div class="text1 padding1030">
            Carry / MVP
          </div>
        </div>

        <div class="certified tier4">
          <div class="title1 padding1030">Sniper</div>
          <div class="text1 padding1030">
            Looong goals
          </div>
        </div>
        <p>
        <div class="certified tier5">
          <div class="title1 padding1030 ">Acrobat</div>
          <div class="text1 padding1030">
            Bicycle goal
          </div>
        </div>

        <div class="certified tier5">
          <div class="title1 padding1030">Guardian</div>
          <div class="text1 padding1030">
            Epic saves
          </div>
        </div>

        <div class="certified tier5">
          <div class="title1 padding1030">Juggler</div>
          <div class="text1 padding1030">
            Juggles, who even knows what
          </div>
        </div>

        <div class="certified tier5">
          <div class="title1 padding1030">Show off</div>
          <div class="text1 padding1030">
            Backflip goal!
          </div>
        </div>

        <div class="certified tier5">
          <div class="title1 padding1030">Turtle</div>
          <div class="text1 padding1030">
            Means you're winning
          </div>
        </div>
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
