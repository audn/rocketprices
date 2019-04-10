<?php
include_once("./php/new-login/db_connect.php");
include_once("./php/new-login/functions.php");

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
    <?php require_once ('../assets/php/head.php');?>
    <style>
    .content {padding: 40px 52px;}
    .active{border-left:3px solid #00ff6c;}
    </style>
  </head>
  <body>
    <div class="container">
        <?php require_once ('../assets/php/sidebar.php'); ?>
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
          <h1 class="white">Welcome to Rocketprices</h1>
          <span class="btn-trade"><i class="fas fa-exchange-alt overlayTrade"></i> Trade items</span>
          <span class="btn-ps4"><i class="fas fa-gamepad overlayPs4"></i> PS4 Prices</span>
          <span class="btn-pc"><i class="fas fa-desktop-alt overlayPc"></i> PC Prices</span>
          <p>
            <h2 class="regular">
              Use Rocketprices.net to browse freshly made trades <br> and see the most updated prices on most of the items ingame!
            </h2>
        </div>
      </div>
        <img src="../assets/images/banner.png" class="bannerIMG"/>
        <p>
          <br>
          <p>
            <div class="tradingContainer">
            <div class="tradingContent">
          <a class="btn-new btn" href="/trading/new">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> New trade</a>
            <a class="btn-new1 btn" href="https://discord.gg/rocketprices">
              <i class="fas fa-user-shield"></i> Request a middleman</a>
              <span style="float:right" class="text">
                By using our trading feature, you accept our <a href="/trading/rules">trading rules</a>.</span>
                <p>
            <br>
          <div class="trade-template-light">
            <div class="trade-title_left-light">
              <a href="#profile" class="verified"> <span style="color: #1798e5;"><i class="fal fa-rocket"></i></span> Pebbles</a>  wants to trade:
            </div>
            <div class="trade-title_right-light">
              for: <font style="float:right;font-size:12px;"> 5 seconds ago</font>
            </div>
              <div class="trade_items_has-light">
                <div class="trade_item-light rare-trading">
                <img src="http://rocketprices.net/dist/items/secret_santa.png">
                <div class="trade_item_count">80</div>
                <div class="trade-item-quanty rare-quanty">Secret Santa Crate</div>
              </div>

                <div class="trade_item-light exotic-trading" >
                <img src="http://rocketprices.net/dist/items/wonderment.png">
                <div class="trade_item_count">5</div>
                <div class="trade-item-quanty exotic-quanty">Wonderment</div>
              </div>
                <div class="trade_item-light import-trading">
                  <img src="http://rocketprices.net/dist/items/dueling_dragons.png">
                  <div class="trade_item_count">2</div>
                  <div class="trade-item-quanty black-market-quanty">Dueling Dragons</div>
                </div>
                <div class="trade_item-light import-trading">
                  <img src="http://rocketprices.net/dist/items/dueling_dragons.png">
                  <div class="trade_item_count">2</div>
                  <div class="trade-item-quanty black-market-quanty">Dueling Dragons</div>
                </div>
              </div>
              <div class="trade-title_right-light-phone">
                for: <font style="float:right;font-size:12px;"> 5 seconds ago</font>
              </div>
              <div class="trade_items_want-light">
                <div class="trade_item-light premium-trading">
                <img src="https://rocketprices.net/dist/items/key.png">
                <div class="trade-item-quanty premium-quanty">Key</div>
              </div>
              </div>
              <div class="trade-custom-comment-light">
                Trading my Dueling Dragons away for some keys.
                <p>
                  <span style="color: #1798e5;"><i class="fas fa-comment-alt-check" style="margin-right:0;"></i> Verified Rocketprices staff</span>
                  <?php if($loggedin){ ?>
                  <p>
                  <div class="btn-report"><i class="fa fa-flag" aria-hidden="true"></i> Report trade</div>
                  <div class="btn-profile"><i class="fa fa-user" aria-hidden="true"></i> Visit profile</div>
                  <div class="btn-delete"><i class="far fa-trash-alt"></i> Delete this trade</div>
                  <?php } ?>

              </div>
          </div>

          <div class="trade-template-light">
            <div class="trade-title_left-light">
              <a href="#profile"> Anthony</a> wants to trade:
            </div>
            <div class="trade-title_right-light">
              for: <font style="float:right;font-size:12px;"> 5 seconds ago</font>
            </div>
              <div class="trade_items_has-light">
                <div class="trade_item-light rare">
                <img src="http://rocketprices.net/dist/items/secret_santa.png">
                <div class="trade_item_count">80</div>
                <div class="trade-item-quanty rare-quanty">Secret Santa Crate</div>
              </div>
                <div class="trade_item-light black-market" >
                <img src="http://rocketprices.net/dist/items/poly_pop.png">
                <div class="trade_item_count">5</div>
                <div class="trade-item-color">&nbsp;</div>
                <div class="trade-item-cert">Juggler</div>
                <div class="trade-item-quanty black-market-quanty">Poly Pop</div>
              </div>
            <div class="trade_item-light premium">
            <img src="http://rocketprices.net/dist/items/all_offer.jpg">
            <div class="trade-item-quanty premium-quanty">Item offer</div>
            </div>
            <div class="trade_item-light rare">
            <img src="http://rocketprices.net/dist/items/nitro.png">
            <div class="trade-item-quanty rare-quanty">Nitro Crate</div>
            </div>
              </div>
              <div class="trade-title_right-light-phone">
                for: <font style="float:right;font-size:12px;"> 2 hours ago</font>
              </div>
              <div class="trade_items_want-light">
                <div class="trade_item-light black-market">
                <img src="https://rocketprices.net/dist/items/popcorn.png">
                <div class="trade-item-quanty black-market-quanty">Popcorn</div>
              </div>
              </div>
              <div class="trade-custom-comment-light">
                i have three wreaths
                <br>want dueling dragons pls
                <?php if($loggedin){ ?>
                <p>
                <div class="btn-report"><i class="fa fa-flag" aria-hidden="true"></i> Report trade</div>
                <div class="btn-profile"><i class="fa fa-user" aria-hidden="true"></i> Visit profile</div>
                <div class="btn-delete"><i class="far fa-trash-alt"></i> Delete this trade</div>
                <?php } ?>
              </div>
          </div>

          <div class="trade-template-light">
            <div class="trade-title_left-light">
              <a href="#profile" class="verified"><span style="color: #1798e5;"><i class="fal fa-rocket"></i></span> Felps</a> wants to trade:
            </div>
            <div class="trade-title_right-light">
              for: <font style="float:right;font-size:12px;"> 5 seconds ago</font>
            </div>
              <div class="trade_items_has-light">
                <div class="trade_item-light premium">
                <img src="http://rocketprices.net/dist/items/key.png">
                <div class="trade_item_count">80</div>
                <div class="trade-item-quanty premium-quanty">Key</div>
              </div>
              </div>
              <div class="trade-title_right-light-phone">
                for: <font style="float:right;font-size:12px;"> 2 hours ago</font>
              </div>
              <div class="trade_items_want-light">
                <div class="trade_item-light black-market">
                <img src="https://rocketprices.net/dist/items/popcorn.png">
                <div class="trade-item-quanty black-market-quanty">Popcorn</div>
              </div>
          </div>
            <div class="trade-custom-comment-light">
                 I WANT POPCORN
                <p><span style="color: #1798e5;"><i class="fas fa-comment-alt-check" style="margin-right:0;"></i> Verified Rocketprices staff</span>
                <?php if($loggedin){ ?>
                <p>
                <div class="btn-report"><i class="fa fa-flag" aria-hidden="true"></i> Report trade</div>
                <div class="btn-profile"><i class="fa fa-user" aria-hidden="true"></i> Visit profile</div>
                <div class="btn-delete"><i class="far fa-trash-alt"></i> Delete this trade</div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
<style>
.tradingContainer{
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;

}
.tradingContent{
  position: relative;
}
.trade-title_left-light {
    float: left;
    display: block;
    width: 47%;
    border-bottom: 1px solid #b7babb;
    border-top-left-radius: .2em;
    font-size: 15px;
    color: #888a8b;
    background-color: #e4e4e4!important;
    padding: 20px;
}

@media only screen and (max-width: 1200px){
.trade-title_left-light {
    width: 100% !important;
}
}
@media only screen and (max-width: 1200px){
.trade-title_right-light-phone {
    display: block !important;
    width: 100% !important;
}
}
.trade-title_right-light {
  float: right;
  display: block;
  border-bottom: 1px solid #b7babb;
  width: 46.1%;
  border-top-right-radius: .2em;
  font-size: 15px;
  color: #7c8184;
  background-color: #cdd0d2 !important;
  padding: 20px;
}
.btn-new {
    padding: 8px 88px;
    background-color: #2ecc71;
    color: #fff;
    border-radius:500px;
    display: inline-block;
}
.btn-new1 {
    padding: 8px 55px;
    background-color: #16a085;
    color: white;
    border-radius:500px;
    display: inline-block;
}
@media only screen and (max-width: 1200px)){
.trade-title_right-light {
    display: none !important;
}
}
.trade_items_has-light {
    float: left;
    font-weight: 900;
    display: table-row;
    width: 47%;
    background-color: #e4e4e4 !important;
    padding: 20px;
    background-color: white;
}

.trade-title_right-light-phone {
    float: left;
    display: none;
    border-bottom: 1px solid #b7babb;
    width: 45%;
    border-top-right-radius: .2em;
    font-size: 15px;
    color: #7c8184;
    background-color: #cdd0d2 !important;
    padding: 20px;
}
.trade-template-light{
  margin-bottom:20px;
}
@media only screen and (max-width: 1200px){
.trade-title_right-light {
    display: none !important;
}
}
.trade_items_want-light {
  width: 46.1%;
  background-color: #cdd0d2;
  float: right;
  font-weight: 900;
  display: table-row;
  padding: 20px;
}

.trade_item_count {
    border-radius: 50%;
    z-index: 5;
    width: 25px;
    height: 25px;
    background-color: rgba(100,100,100,0.75);
    position: absolute;
    float: left;
    line-height: 25px;
    font-size:12px;
    font-weight:400;
    color: white;
    transform: translateY(-0px) translateX(5px);
    text-align: center;
}
@media only screen and (max-width: 1200px){
    .trade_items_want-light {
        width: 96.6% !important;
      }
    .trade_items_has-light {
        width: 100% !important;
        }
}
.trade-custom-comment-light {
    width: 98.3%;
    background-color: #bcbec0;
    color: #6f7476;
    display: inline-block;
    padding: 10px;
}
.trade_item-light {
    border: 1px solid #083b59;
    background-color: black;
    display: inline-block;
    width: 100px;
    border-radius: 4px;
    margin: 0 4px 4px 0;
    height: 100px;
}
.trade_item-light img {
    width: 80px;
    vertical-align: middle;
    float:left;
    margin: 10px 0px 0px 10px;
}
a.verified:visited {
    color: #74b4db;
}

a.verified:link {
    color: #1798e5;
}
.import-trading {
 border: 1px solid rgba(227,90,82,.4);
}

.premium-trading {
 border: 1px solid rgba(107,241,174,.4);
}

.rare-trading {
 border: 1px solid rgba(116,151,235,.4);
}

.very-rare-trading  {
  border: 1px solid rgba(158,124,252,.4);
}

.limited-trading {
  border: 1px solid rgba(247,121,57,.4);
}

.black-market-trading{
  border: 1px solid rgba(255,0,255,.4);
}

.exotic-trading{
  border: 1px solid rgba(236,219,108,.4);
}

.premium-title{
  color:rgba(107,241,174,.4);
  font-size:15px;
}
.import-title {
 color: rgba(227,90,82,.4);
 font-size:15px;
}
.rare-title {
 color: rgba(116,151,235,.4);
 font-size:15px;
}

.very-rare-title  {
color: rgba(158,124,252,.4);
font-size:15px;
}

.limited-title {
color: rgba(247,121,57,.4);
font-size:15px;
}

.black-market-title{
  color: rgba(255,0,255,.4);
  font-size:15px;
}

.exotic-title{
color: rgba(236,219,108,.4);
font-size:15px;
}

.import-quanty {
background-color: rgba(227,90,82,.4);
}
.yellow-quanty {
background-color: #ffd700;
}
.premium-quanty {
 background-color:rgba(107,241,174,.4);
}

.rare-quanty {
 background-color: rgba(116,151,235,.4);
}

.very-rare-quanty  {
  background-color: rgba(158,124,252,.4);
}

.limited-quanty {
  background-color: rgba(247,121,57,.4);
}

.black-market-quanty{
  background-color: rgba(255,0,255,.4);
}

.exotic-quanty{
  background-color:rgba(236,219,108,.4);
}
.trade-item-quanty{
  height: 25px;
  width: 100px;
  position: absolute;
  color: white;
  font-size: 11px;
  line-height: 25px;
  transform: translateY(75px);
  vertical-align: middle;
  text-align: center;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 4px;
}
.trade-item-cert{
  height:18x;
  width:98px;
  position: absolute;
  color:white;
  font-size:11px;
  background-color: #17181c;
  transform:translateY(62px);
  vertical-align: middle;
  opacity:0.8;
  text-align:center;
  /*border-bottom-left-radius: 3px;
  border-bottom-right-radius: 4px;*/
}
.btn-delete {
    padding: 10px 15px;
    color: white;
    display: inline-block;
    float: right;
    border-radius: .2em;
    background-color: #c0392b;
}
.btn-report {
    padding: 5px 10px;
    color: #c0392b;
    display: inline-block;
    border-radius: .2em;
    border: 1px solid #c0392b;
}
.btn-profile {
    padding: 5px 10px;
    color: #4f6a72;
    display: inline-block;
    border-radius: .2em;
    border: 1px solid #1d2c18;
}
.trade-item-color{
  width:20px;
  border-radius:50%;
  position: absolute;
  transform:translate(73px,-0);
  background-color: red;
  /*
  vertical-align: middle;
  text-align:center;
  background: red;
  width: 35px;
  height: 20px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  border: 2px solid rgba(255,255,255,.6);
  */
}
</style>
  <?php require_once '/php/scripts.php'; ?>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
