<?php
include_once("./trading/php/new-login/db_connect.php");
include_once("./trading/php/new-login/functions.php");

sec_session_start();
$loggedin = false;
if(login_check($conn)){
    $loggedin = true;
}

?>
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Rocketprices</title>
    <?php require_once ('assets/php/head.php');?>
    <style>
    .content {padding: 40px 52px;}
    .active{border-left:3px solid #00ff6c;}
    </style>
  </head>
  <body>
    <div class="container">
        <?php require_once ('assets/php/sidebar.php'); ?>
      <div class="content column" style="flex:none;">
        <div class="phoneHeader">
          <button type="button" class="navbar-toggle marginPhone">
            <span class="icon-bar"></span>
            <span class="icon-barMiddle"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="phoneHeaderSpace"></div>
        <div class="banner">
          <div class="bannerthings">
          <h1 class="white">Tickets</h1>
          <span class="btn-trade"><i class="fas fa-engine-warning"></i> Scam (21)</span>
          <span class="btn-ps4"><i class="fas fa-engine-warning"></i> Other (63)</span>
          <span class="btn-pc"><i class="fas fa-bug"></i> Bug (4)</span>
          <p>
            <h2 class="regular">
              Welcome to the Tickets table.
              <br> Here you can delete and edit trades.
            </h2>
        </div>
      </div>
        <img src="assets/images/banner.png" class="bannerIMG"/>
        <p>
          <div class="ticket">
        <div class="span_1 column">
        <span id="tradeID">41512ssc2tradeID</span>
        <br>User has <span id="amountWarnings">2</span> warnings.
        <br>This report was made <span id="time">54</span> minutes ago.
        <br>Reported by user <span id="username">audn</span>.
        </div>
        <div class="span_2 column">
        <span id="title">Type</span>
        <br>
        <div id="topic-scam">Scam</div>
        <p>
        </p><div id="topic-spam">Spam</div>
        </div>
        <div class="span_3 column">
        <span id="title">Reason</span>
        <br>
        links to a phising site
        </div>
        <div class="span_4 column">
        <div class="btn-green">Mark as done</div>
        <p>
        </p><div class="btn-red">Deactivate user</div>
        <p>
        </p><div class="btn-red">Warn &amp; Delete</div>
        </div>
        </div>
    </div>
  </div>
  </body>
</html>
<style>
.ticket {
    background-color: #e7f3ff;
    color: #888a8b;
    width: 100%;
    padding: 10px 10px;
    float: left;
}
.column {
    float: left;
    font-weight: 900;
    display: table-row;
}
.span_3 {
    width: 450px;
    text-align: left;
}
.span_3 {
    width: 450px;
    text-align: left;
}

.span_1 {
    width: 275px;
}
#topic-spam {
    background-color: #2c3e50;
    display: inline-block;
    padding: 3px 3px;
    border-radius: .2em;
    color: white;
}
#topic-scam {
    background-color: #c0392b;
    display: inline-block;
    padding: 3px 3px;
    border-radius: .2em;
    color: white;
}
.btn-red {
    border-radius: .2em;
    font-weight: normal;
    font-size: 12px;
    display: inline-block;
    background-color: #e74c3c;
    text-transform: uppercase;
    color: white;
    padding: 10px 10px;
}
.btn-green {
    border-radius: .2em;
    display: inline-block;
    font-size: 12px;
    background-color: #2ecc71;
    text-transform: uppercase;
    font-weight: normal;
    color: white;
    padding:10px 10px;
  }
#title {
    font-size: 1.1em;
    padding: 3px 3px;
    color: #888a8b;
    text-transform: uppercase;
}
.span_2 {
    width: 100px;
    text-align: left;
}
#tradeID {
    font-size: 1.3em;
    padding: 3px 3px;
    color: #1798e5;
}
#time, #username, #amountWarnings {
    color: #404447;
}
</style>
  <?php require_once 'trading/php/scripts.php'; ?>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
