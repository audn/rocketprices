
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Contact > Rocketprices</title>
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
        <h1>Contact us</h1>
        <h3>You're sending us an email - please keep all information as accurate as possible.</i></h3>
          <p>
            <br>
            <div class="title">
            Fill out the form. Keep all information as accurate as possible.
          </div>
          <p>

            <form method="post" name="myemailform" style="display:block;" action="/mail-sendt">
              <table width="100%">
                <label for="first_name">Your first name</label>
                <br>
                <input type="text" name="first_name" maxlength="50" size="30">
                <p>
                  <label for="first_name">Your email</label>
                  <br>
                  <input type="text" name="email" maxlength="50" size="30">
                  <p>
                <label for="adresse">Whats wrong?</label>
                <br>
                 <textarea  name="beskrivelse" maxlength="125" rows="6"></textarea>
                 <p>
                 <input type="submit" name='submit' class="btn-blue1" value="Post it">
              </table>
            </form>
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
