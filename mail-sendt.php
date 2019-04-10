<?php
if(isset($_POST['submit'])){
    $to = "support@rocketprices.net"; // this is your Email address
    $from = "no-reply@rocketprices.net";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $fylke = $_POST["fylke"];
    $subject = "New ticket.";
    $message = wordwrap($message, 70, "\r\n");
    $message = "First name: " . $first_name
    . "\n\n" . "Whats wrong: " . $_POST['beskrivelse']
    . "\n\n" . "Email: " . $_POST['email'];


    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

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
        <h1>Sent! 🙌 </h1>
        <h3>Our staff will get back to you within 48 hours. </i></h3>
          <p>
            <br>
            <div class="title">
            Please wait patiently - send us a direct message on Instagram if you don't receive an answer. @Rocketprices
          </div>

          </div>
          <br>
          <p>
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
