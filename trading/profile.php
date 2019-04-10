<?php 
include_once("./php/new-login/db_connect.php");
include_once("./php/new-login/functions.php");

sec_session_start();
$loggedin = false;
$username = "";
if(login_check($conn)){
    $loggedin = true;
    $username = $_SESSION["username"];
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Trading | Rocket Prices</title>
  <script>
  var colors = ["rl-items-item-rare", "rl-items-item-exotic", "rl-items-item-limited", "rl-items-item-very-rare","rl-items-item-import","rl-items-item-black-market"];
  var type = ["boost", "beta", "crates", "trail","explosion","black_market", "cars", "rlcs", "wheels", "none"];


  $(document).ready(function(){

        //put code needed here
    $("#filter").on('change', function(){

   $(".rl-list").show();
   //new code
   var selected = $("#filter option:selected").val();
   $.each(colors, function(index, obj){
     if(selected === ""){
       return false;
     }

     if(obj !== selected){
       $("."+obj).closest(".rl-list").hide();
     }

   });
   var selected1 = $("#filter1 option:selected").val();
   $.each(type, function(index, obj){
     if(selected1 === ""){
       return false;
     }

     if(obj !== selected1){
       $("."+obj).closest(".rl-list").hide();
     }

   });




    });

    $("#filter1").on('change', function(){

        $(".rl-list").show();
   //new code
   var selected = $("#filter option:selected").val();
   $.each(colors, function(index, obj){
     if(selected === ""){
       return false;
     }

     if(obj !== selected){
       $("."+obj).closest(".rl-list").hide();
     }

   });
   var selected1 = $("#filter1 option:selected").val();
   $.each(type, function(index, obj){
     if(selected1 === ""){
       return false;
     }

     if(obj !== selected1){
       $("."+obj).closest(".rl-list").hide();
     }

   });


    });



  /*//put code needed here
    $("#filter").on('change', function(){

        var selected = $("#filter option:selected").val();
        console.log($.inArray(selected, colors));
        if($.inArray(selected, colors) > -1){
            $(".rl-list").hide();
            $("."+selected).each(function(){
                $(this).closest(".rl-list").show();
            });
        }else{
            $(".rl-list").show();
        }

    });

    $("#filter1").on('change', function(){

        var selected = $("#filter1 option:selected").val();
        console.log($.inArray(selected, colors));
        if($.inArray(selected, type) > -1){
            $(".rl-list").hide();
            $("."+selected).each(function(){
                $(this).closest(".rl-list").show();
            });
        }else{
            $(".rl-list").show();
        }

    });*/

    $("#search").on("input", function(){
        var search = $("#search").val();
        $(".rl-list h2").each(function(){
            if($(this).text().toLowerCase().indexOf(search.toLowerCase()) !== -1 ){
                $(this).closest(".rl-list").show();
            }else{
                $(this).closest(".rl-list").hide();
            }
        });

    });
 $(".share").on("click",function(){
   window.location.hash = encodeURI($(this).find("h2").text());

 });
 if(window.location.hash !== ""){
    $("#search").val(decodeURIComponent(window.location.hash.slice(1)));
    $("#search").trigger("input");
  }
  });

$(window).on("hashchange", function(){
  if(window.location.hash !== ""){
   $("#search").val(decodeURIComponent(window.location.hash.slice(1)));
   $("#search").trigger("input");

  }else{
   $(".rl-list").show();
  }
});






</script>
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-1.9.1.js">
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-88967903-1', 'auto');
ga('send', 'pageview');
</script>
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="favicon.ico" rel="icon" type="image/x-icon">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<link href="dist/css/main.min.css" rel="stylesheet" type="text/css">
<meta content="width=device-width initial-scale=1" name="viewport">
<link href="http://domain/humans.txt" rel="author" type="text/plain">
<meta content="guides" property="og:type">
<meta content="RocketPrices is the best place to get reliable, up-to-date Rocket League item prices on both PC and console; no sign-in required!" property="og:description">
<meta content="en_GB" property="og:locale">
<meta content="https://i.gyazo.com/68a96f8180969056a3531152914a62db.png" property="og:image">
<meta content="https://rocketprices.net" property="og:url">
<script>
function myFunction() {
// Get the snackbar DIV
var x = document.getElementById("snackbar")

// Add the "show" class to DIV
x.className = "show";

// After 3 seconds, remove the show class from DIV
setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
</script>
<script>
</script>
<title>PS4 | Rocket Prices</title>
<meta content="RocketPrices is the best place to get reliable, up-to-date Rocket League item prices on both PC and console; no sign-in required!" name="description">
<script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3070420145299092",
        enable_page_level_ads: true
      });
</script>
</head>
<body>
<nav class="rp navbar navbar-default navbar-fixed-top">
   <div class="container">
       <div class="navbar-header"><button class="navbar-toggle" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a href="https://rocketprices.net"><img class="logo" src="http://rocketprices.net/dist/img/logo-short-christmas.png"></a></div>
       <ul class="nav navbar-nav hidden-xs">
         <li>
             <a href="/index"><i class="fa fa-home"></i></a>
         </li>
         <li>
             <a href="/pc"><i class="fa fa-desktop"></i></a>
         </li>
         <li>
             <a href="/ps4"><i class="fa fa-gamepad"></i></a>
         </li>

         <li>
             <a href="/certified"><i class="fa fa-list"></i></a>
         </li>
         <li>
             <a href="/1-year-anniversary"><i class="fa fa-trophy"></i></a>
         </li>
         <li>
             <a href="https://www.aoeah.com/rocket-league-items"><i class="fa fa-shopping-cart"></i></a>
         </li>

       </ul>
   </div>
</nav>

<div id="wrapper">
   <div id="sidebar-wrapper">
       <ul class="sidebar-nav">
         <?php if($loggedin){ ?>
         <li class="pot-nav">
             <a href="/trading/tickets" class="menu"> <i class="fa fa-ticket" aria-hidden="true"></i>
           Tickets &nbsp;<span class="lightpill" style="background-color:#c0392b;">2</span></a>
         </li>
         <?php } ?>
         <li class="dropdown-header">Trading section</li>
         <li>
             <a href="/trading" class="menu-pot"> <i class="fa fa-exchange" aria-hidden="true"></i>
           Trading</a>
         </li>
         <?php if($loggedin){ ?>
         <li>
           <a href="/trading/profile" class="menu"> <i class="fa fa-user" aria-hidden="true"></i>
              My Profile</a>
         </li>
         <li>
             <a href="/trading/settings"class="menu"> <i class="fa fa-cogs" aria-hidden="true"></i>
               My Settings <!--&nbsp;<span class="lightpill" style="background-color:#c0392b;">setup</span>--></a>
         </li>
         <li>
             <a href="/trading/php/logout" class="menu"> <i class="fa fa-sign-out" aria-hidden="true"></i>
              Logout</a>
         </li>
         <?php } ?>
         <?php if($loggedin !== true){ ?>
           <li>
             <a href="/trading/sign-up" class="menu"> <i class="fa fa-user-plus" aria-hidden="true"></i>
              Register</a>
         </li>
         <li>
             <a href="/trading/login" class="menu"> <i class="fa fa-sign-in" aria-hidden="true"></i>
              Login</a>
         </li>
         <?php } ?>

           <div class="line">
             &nbsp;
           </div>
         <li class="dropdown-header">Popular</li>
           <li>
               <a href="/index"><i class="fa fa-home"></i> Home</a>
           </li>
           <li>
               <a href="/pc"><i class="fa fa-desktop"></i> PC List</a>
           </li>
           <li>
               <a href="/ps4"><i class="fa fa-gamepad"></i> PS4 List</a>
           </li>

           <li>
               <a href="/certified"><i class="fa fa-list"></i> Certified</a>
           </li>
           <li>
               <a href="https://www.aoeah.com/rocket-league-items"><i class="fa fa-shopping-cart"></i> Buy items</a>
           </li>
           <div class="line">
             &nbsp;
           </div>
          <li class="dropdown-header">Social</li>

           <li>
               <a href="https://discord.gg/faWa4KH"><img src="https://i.imgur.com/JBwpCFJ.png" style="width: 15px;margin-left:9px;color:white;"> Official Discord</a>
           </li>
           <li>
             <a href="https://www.instagram.com/rocketprices/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Official Instagram</a>
           </li>
           <li>
               <a href="https://twitter.com/rocketprices" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Official Twitter</a>
           </li>
           <div class="line">
             &nbsp;
           </div>

           <li class="dropdown-header">Giveaways</li>
           <li>
               <a href="/1-year-anniversary"><i class="fa fa-diamond"></i> 260 keys giveaway</a>
           </li>
           <li>
               <a href="/giveaways"><i class="fa fa-trophy"></i> Official Giveaways</a>
           </li>
           <li>
               <a href="/giveaways"><i class="fa fa-trophy"></i> Official Giveaways</a>
           </li>
           <li>
               <a href="/giveaways"><i class="fa fa-trophy"></i> Official Giveaways</a>
           </li>
           <div class="line">
             &nbsp;
           </div>
       </ul>
   </div>
   <div class="pot-nav">
      <div class="container">
          <ul class="nav navbar-nav hidden-xs">
            <?php if($loggedin){ ?>
            <li class="pot-nav">
                <a href="/trading/tickets" class="menu"> <i class="fa fa-ticket" aria-hidden="true"></i>
              Tickets &nbsp;<span class="lightpill" style="background-color:#c0392b;">2</span></a>
            </li>
            <?php } ?>
            <li class="pot-nav-trade">
                <a href="/trading" class="menu-pot"> <i class="fa fa-exchange" aria-hidden="true"></i>
              trade</a>
            </li>
            <?php if($loggedin){ ?>
            <li class="pot-nav">
              <a href="/trading/profile" class="menu-pot"> <i class="fa fa-exchange" aria-hidden="true"></i>
                 profile</a>
            </li>
            <li class="pot-nav">
                <a href="/trading/settings"class="menu"> <i class="fa fa-cogs" aria-hidden="true"></i>
                  settings <!--&nbsp;<span class="lightpill" style="background-color:#c0392b;">setup</span>--></a>
            </li>
            <li class="pot-nav">
                <a href="/trading/php/logout" class="menu"> <i class="fa fa-sign-out" aria-hidden="true"></i>
                 logout</a>
            </li>
            <?php } ?>
            <?php if($loggedin !== true){ ?>
            <li class="pot-nav">
                <a href="/trading/sign-up" class="menu"> <i class="fa fa-user-plus" aria-hidden="true"></i>
                 register</a>
            </li>
            <li class="pot-nav">
                <a href="/trading/login" class="menu"> <i class="fa fa-sign-in" aria-hidden="true"></i>
                 login</a>
            </li>
            <?php } ?>
          </ul>
      </div>
    </div>
   <a id="back-top" href="#top" style="display: none;"><i class="fa fa-chevron-up" data-cms-node="3770"></i></a>
 <script>
     $("button").click(function(e) {
         e.preventDefault();
         $("#wrapper").toggleClass("toggled");
     });
 </script>
   <style>
   .username-header{
     margin-left:30px;
     line-height:10px;
   }
  .pot-nav{
    background:#26272c;
    color:#888a8b;
    padding:0;
  }
  .pot-nav-trade{
    background:#2c2d32;
    color:white;
    padding:0;
  }
  .pot-nav-trade:hover{
    background:#2c2d32;
    color:white;
    padding:0;
  }
   .active{
     background-color: #1798e5;
   }
     .welcome-text{
       text-align: left;
     }
     .logged-in{
       float:right !important;
     }
     .header-profile {
     width: 25px;
     height: 25px;
     vertical-align:middle;
     overflow: hidden;
     position:absolute;
     border-radius: 100%;
     }

     li.pot-nav a:hover {
     background-color: #2c2d32;
     color:white;
     }
     li.pot-nav-trade a:hover {
     background-color: #2c2d32;
     color:white;
     }
   #back-top {
       z-index:100;
       position: fixed;
       display:none;
       font-size: 20px;
       color: white;
       bottom: 5px;
       border-radius: .2em;
       padding: 10px 10px;
       right:10px;
       width:auto;
       background-color:#1789eb;
       width: auto;
       height:auto;
   }

   a#back-top:active {
       background:none;
   }

   a#back-top {
       display: block;
       text-decoration: none;
   }

   .topup {
       bottom:5px;
   }

   #back-top i {
       display: block;
   }
     body {
         overflow-x: hidden;
         padding-top: 50px;
         background-color: #edf0f5;
         font-family: 'Muli', sans-serif;
         min-height: 100%;
         margin: 0;
     }
     .select {
     position: relative;
     display: inline-block;
     margin-bottom: 15px;
     width: 100%;
   }
   .select select {
     display: inline-block;
     width: 100%;
     cursor: pointer;
     padding: 10px 10px;
     outline: 0;
     border: 0;
     border-radius: 0;
     background: white;
     border: 1px solid #d8d8d8;
     color: #7b7b7b;
     appearance: none;
   }
   .bs-callout {
       padding: 20px;
       margin: 20px 0;
       border: 1px solid #eee;
       border-left-width: 5px;
       border-radius: 3px;
   }
   .bs-callout h4 {
       margin-top: 0;
       margin-bottom: 5px;
   }
   .bs-callout p:last-child {
       margin-bottom: 0;
   }
   .bs-callout code {
       border-radius: 3px;
   }
   .bs-callout+.bs-callout {
       margin-top: -5px;
   }
   .bs-callout-default {
       border-left-color: #777;
   }
   .bs-callout-default h4 {
       color: #777;
   }
   .bs-callout-primary {
       border-left-color: #428bca;
   }
   .bs-callout-primary h4 {
       color: #428bca;
   }
   .bs-callout-success {
       border-left-color: #5cb85c;
   }
   .bs-callout-success h4 {
       color: #5cb85c;
   }
   .bs-callout-danger {
       border-left-color: #d9534f;
   }
   .bs-callout-danger h4 {
       color: #d9534f;
   }
   .bs-callout-warning {
       border-left-color: #f0ad4e;
   }
   .bs-callout-warning h4 {
       color: #f0ad4e;
   }
   .bs-callout-info {
       border-left-color: #5bc0de;
   }
   .bs-callout-info h4 {
       color: #5bc0de;
   }
   .select select::-ms-expand {
     display: none;
   }
   .select select:hover,
   .select select:focus {
     color: #000;
     background: white;
   }
   .select__arrow {
     position: absolute;
     top: 16px;
     right: 15px;
     width: 0;
     height: 0;
     pointer-events: none;
     border-style: solid;
     border-width: 8px 5px 0 5px;
     border-color: #7b7b7b transparent transparent transparent;
   }
   .select select:hover ~ .select__arrow,
   .select select:focus ~ .select__arrow {
     border-top-color: #000;
   }

     .panel-ps4 a {
         background-image: url("/img/index-ps4.png");
         background-size: cover;
         background-position: center;
         height: 150px;
         width: 100%;
         border: 3px solid #ddd;
         background-color: white;
     }

     .footer {
         position: absolute;
         bottom: 0;
         width: 100%;
         text-align: center;
     }

     .logo {
         margin-right: 20px;
         height: 50px;
         max-width: 250px;
     }

     .cert-title {
         font-size: 15px;
         padding: 10px 10px;
         background-color: #f1f2f3;
         position: relative;
         opacity: .67;
     }

     .cert-text {
         font-size: 14px;
         padding: 10px 10px;
     }

     /* Navbar */
     .navbar-default {
         background-color: #2c2d32;
         color: #888a8b;
         border: none;
     }

     .navbar-default .navbar-toggle {
         border: none;
     }

     .navbar-default .navbar-toggle:hover,
     .navbar-default .navbar-toggle:focus {
         border-radius: 0;
         background-color: #26272c;
     }

     .navbar-default .navbar-toggle .icon-bar {
         background-color: #FFF;
     }

     .navbar-default .navbar-nav>.active>a,
     .navbar-default .navbar-nav>.active>a:focus,
     .navbar-default .navbar-nav>.active>a:hover {
         background-color: #26272c ;
         color: #FFFFFF;
     }

     .navbar-default .navbar-nav>li>a {
         color: #888a8b;
         background-color: #2c2d32;
         text-decoration: none;
     }

     .navbar-default .navbar-nav>li>a:hover {
         background-color: #26272c;
         color: #FFFFFF;
     }

     .navbar-default .navbar-nav>li>a>i {
     }

     /* Panel */
     .panel,
     .panel-default {
         background-color: transparent;
         border: none;
         box-shadow: none;
     }

     .panel-head {
         background-color: #f9fafa;
         padding: 20px;
         border-top: 3px solid #3079ab;
         color: #4A76A8;
         border-left: 1px solid #eceded;
         border-right: 1px solid #eceded;
         border-top-left-radius: 3px;
         border-top-right-radius: 3px;
     }

     .panel-body {
         border: 1px solid #E7E8EC;
         background-color: #FFF;
         margin-bottom: 20px;
         padding: 20px;
     }

     /* Toggle Styles */
     #wrapper {
         padding-left: 0;
         -webkit-transition: all 0.5s ease;
         -moz-transition: all 0.5s ease;
         -o-transition: all 0.5s ease;
         transition: all 0.5s ease;
     }

     #wrapper.toggled {
         padding-left: 250px;
     }

     #sidebar-wrapper {
         z-index: 1000;
         position: fixed;
         left: 250px;
         width: 0;
         height: 100%;
         margin-left: -250px;
         overflow-y: auto;
         background: #2c2d32;
         -webkit-transition: all 0.5s ease;
         -moz-transition: all 0.5s ease;
         -o-transition: all 0.5s ease;
         transition: all 0.5s ease;
     }

     #wrapper.toggled #sidebar-wrapper {
         width: 250px;
     }

     #page-content-wrapper {
         width: 100%;
         position: absolute;
         padding: 25px 15px;
     }

     #wrapper.toggled #page-content-wrapper {
         position: absolute;
         margin-right: -250px;
     }

     /* Sidebar */

     .sidebar-nav {
         position: absolute;
         top: 0;
         width: 250px;
         margin: 0;
         padding: 0;
         list-style: none;
         background-color: #2c2d32;
     }

     .sidebar-nav li {
         text-indent: 10px;
         line-height: 40px;
     }

     .sidebar-nav li a {
         display: block;
         text-align: left;
         text-decoration: none;
         color: #888a88;
     }

     .sidebar-nav li a:active,
     .sidebar-nav li a:focus,
     .sidebar-nav li a:hover {
         text-decoration: none;
         color: #888a8b;
         background: #2c2d32;
     }
     .logo {
         margin-left: 30px;
     }
     @media(max-width: 768px) {
         .navbar-default .navbar-toggle {
           position:absolute;
             right: 0;
         }
     }
     @media(min-width: 992px) {
       .col-md-20 {
          width: 20%;
         }
     }
     @media(min-width: 768px) {
         #wrapper.toggled #sidebar-wrapper {
             width: 0px;
         }

         #wrapper.toggled #page-content-wrapper {
             margin-left: -250px;
         }
         .select-rarity-label {
              width: 50%;
              display: inline-block;
          }

          .select-type-label {
              width: 50%;
              display: inline-block;
              float: right;
          }

          .select-rarity-box {
              width: 49.5%;
          }

          .select-type-box {
              width: 50%;
              float: right;
          }
     }

     .logonav{
        margin-right:20px;
        height: auto;
        max-width: 250px;
         text-decoration: none;
      }
      .logonav-p{
        height: 60px;
        max-width: 250px;
        text-align: left;
        margin: 0px auto;
         text-decoration: none;
     }
     .btn-dark{
       background-color:#3079ab;
       padding: 10px 10px;
       color:white;
       display:block;
     }
     .btn-send{
       background-color:#2ecc71;
       padding: 10px 10px;
       display:block;
       width:100%;
       text-align:left;
       color:white;
       border:none;
     }
     .link-normal:hover{
       color:white;
     }
     .img1 {display:block;}
     .img2 {display:none}

     @media all and (max-width: 767px) {
         .img1 {display: none;}
         .img2 {display: block;}
     }
     select{
         padding: 20px 20px;
       border: 1px solid #d8d8d8;
       -webkit-appearance:none;
     }
     .field{
       padding: 10px 10px;
       width:99%;
       -webkit-appearance:none;
       border: 1px solid #d8d8d8;
     }
     .label{
       -webkit-appearance:none;
       color:black;
       font-size:14px;
     }
     .rarity{
       cursor:pointer;
       padding:10px 5px;
       right:0;
       color:white;
       width:100%;
       opacity:0.70;
       top:0;
       background-color:#1c1c1c;
       font-size:15px;
       position:absolute;
       z-index:1;
     }
     .modal{
       z-index:3;
     }
     .modal-content {
     border: none;
     border-radius: 0;
     }
     tr:hover{
       background-color:#ddd;
     }
     .modal-close {
     opacity : 1;
     }
     .rl-list {
   padding-left: 5px;
   padding-right: 5px;
  }

  /* Background Color RL Items */

  ul.contentHeader {
   list-style-type: none;
   margin: 0;
   padding: 0;
   overflow: hidden;
   border-top: 1px solid #E7E8EC;
   border-left: 1px solid #E7E8EC;
   border-right: 1px solid #E7E8EC;
   padding: 0px 25px 0px;
   color:#000;
   background-color:white;
  }
  .activeLine{
  border-bottom:2px solid #4A76A8;
  color: black;
  z-index:2;
  }
  li.contentHeader {
   display: block;
   color: #656565;
   display:inline-block;
   padding:15px 5px 15px;
   margin: 0 5px;
   padding-left:10px;
   float: left;
   text-decoration: none;
  }

  li.contentHeader:hover {
   color: black;
  }
  .rl-items-item-premium {
   color: #6bf1ae;
  }
  a.ignoreAhref:visited{
   text-decoration: none;
   color:black;
  }
  a.ignoreAhref:hover{
   text-decoration: none;
   color:black;
   background:transparent;
  }
  a.ignoreAhref:link{
   text-decoration: none;
   color:black;
  }
  .content-header{
   background-color: #f9fafa;
   padding: 20px 20px;
   border-top: 3px solid #3079ab;
   color:#4A76A8;
   margin-top:10px;
   margin-left:auto;
   border-left: 1px solid #eceded;
   border-right: 1px solid #eceded;
   margin-right:auto;
   border-top-left-radius:.2em;
   border-top-right-radius:.2em;
   display: flex;
   align-items: center;
  }
  .rl-items-item-rare {
   color: #7497eb;
  }

  .rl-items-item-very-rare {
   color: #9e7cfc;
  }

  .rl-items-item-limited {
   color: #f77939;
  }

  .rl-items-item-black-market {
   color: #f0f;
  }

  .rl-items-item-exotic {
   color: #ecdb6c;
  }
   </style>
        <div class="container">
          <div class="profile">
            <div class="span_3 column">
              <div class="btn-report">Report this user</div>
            </div>
            <div class="span_3 column">
            <img src="https://i.imgur.com/Kr1OZxJ.png" class="profile-picture">
            <div class="title" style="color:white;margin-top:10px;"><!--<i class="fa fa-check-circle" aria-hidden="true" style="color:#1798e5;"></i>--> <?php echo $username ?>
            <!--<div class="verified">This badge indicates that this user has been <br>verified by the Rocketprices Administration.</div>-->
            <p>
            <div class="networks">
              <img src="psn_blue.svg" class="psn network"> audunrp
               <img src="xbox_blue.svg" class="xbox network"> audunrp
               <i class="fa fa-steam steam network" aria-hidden="true"></i> hrrs01
            </div>
          </div>
          </div>
          <div class="span_3 column">
            <div class="btn-report">Repitation</div>
          </div>
          </div>
        </div>
      </div>




  <?php require_once 'php/scripts.php'; ?>
  <style>
  .btn-report:hover{
  background-color:#2c2d32;
  cursor:pointer;
}
.btn-report{
  padding:5px 10px;
  color:white;
  display:inline-block;
  border-radius:.2em;
  border: 1px solid #2c2d32;
}
  .btn-dark{
    background-color:#3079ab;
    padding: 10px 10px;
    color:white;
    display:block;
  }
  .span_1 {
    width: 11.1111%;
  }
  .span_2 {
    width: 44.4444%;
    text-align:left;

  }
  .span_3 {
    width: 33.3333%;
    text-align:center;
  }
  .span_4 {
    width: 44.4444%;
  background-color:yellow;
  }
  .profile-picture{
    width:164px;
    border-radius:50%;
    margin-top:20px;
  }
  .network{
    padding-left:10px;
    width:25px;
    color:#1798e5;
  }
  .verified{
    color:#1798e5;
  }
  .networks{
    color:white;
    margin-top:20px;
  }
  .input-txt {
    width: 100%;
    padding: 10px 10px;
    background: $blue;
    border: none;
    font-size: 1em;
    color: #888a8b;
    background-color: #26272c;
    @include box-sizing(border-box);
    @include placeholder(lighten(#1789eb;, 10%));
    @include transition(background-color .5s ease-in-out);
  }
  .title{
    font-size:2rem;
    font-weight:600;
  }

  .content-dark{
    margin-top:20px;
    background-color: #2c2d32;
    padding:20px;
    color:#888a8b;
    width:50%;
    margin-right:auto;
    margin-left:auto;
  }
  /* Navbar */
  .navbar-default {
      background-color: #2c2d32;
      color: #888a8b;
      border: none;
  }

  .navbar-default .navbar-toggle {
      border: none;
  }

  .navbar-default .navbar-toggle:hover,
  .navbar-default .navbar-toggle:focus {
      border-radius: 0;
      background-color: #26272c;
  }

  .navbar-default .navbar-toggle .icon-bar {
      background-color: #FFF;
  }

  .navbar-default .navbar-nav>.active>a,
  .navbar-default .navbar-nav>.active>a:focus,
  .navbar-default .navbar-nav>.active>a:hover {
      background-color: #26272c ;
      color: #FFFFFF;
      clear:right;
  }
  body{
    background:#17181c;
  }
  .navbar-default .navbar-nav>li>a {
      color: #888a8b;
      background-color: #2c2d32;
      text-decoration: none;
      clear:right;
  }

  .navbar-default .navbar-nav>li>a:hover {
      background-color: #26272c;
      color: #FFFFFF;
  }

  .navbar-default .navbar-nav>li>a>i {
  }
  .title-tooltip{
    font-size:15px;

  }
  .btn-new{
    padding: 8px 88px;
    background-color:#2ecc71;
    color:white;
    display:inline-block;
  }
  .btn-new:hover{
    background-color:#1a914c;
    cursor:pointer;
  }
  a:visited{
    text-decoration: none;
    text-transform: none;
    color:#1798e5;
  }
  /*
  dark version
  */
  .item_name{
  margin-top:-20px;
  color:white;

  }
  .trade-custom-comment-dark{
    width:100%;
    background-color:#bac2c6;
    margin-bottom: 20px;
    color:#6f7476;
    display:inline-block;
    padding:10px;
  }
  .trade_item_count{
    border-radius:50%;
    z-index:5;
    width:25px;
    height:25px;
    background-color:rgba(100,100,100,0.75);
    position:absolute;
    float:left;
    line-height: 25px;
    color:white;
    transform:translateY(-85px) translateX(5px);
    text-align:center;
  }
  .trade_items_want-dark{
    float: right;
    width:50%;
    background-color:#26272c;
    font-weight: 900;
    display: table-row;
    padding:20px;
  }
  .trade_items_has-dark{
    float: left;
    font-weight: 900;
    display: table-row;
    width:50%;
    background-color:#2c2d32 !important;
    padding:20px;
    background-color:white;
  }
  @media (min-width: 1200px)
  {
   .container {
      width: 1170px;
    }
  }
  .trade_item-dark{
    /*border: 1px solid #083b59;*/
    background-color:#202227;
    display:inline-block;
    width:100px;
    border-radius:4px;
    margin: 0 4px 4px 0;
    height:100px;
  }
  .trade_item-dark img{
   width:80px;
   margin: 10px 0px 0px 10px;
  }
  .trade-title_left-dark{
    float: left;
    display:block;
    width:50%;
    border-bottom: 1px solid #26272c;
    border-top-left-radius: .2em;
    font-size:15px;
    color:#888a8b;
    background-color:#2c2d32!important;
    padding: 20px;
  }
  .trade-title_right-dark{
    float: left;
    display:block;
    border-bottom: 1px solid #34353a;
    width:50%;
    border-top-right-radius: .2em;
    font-size:15px;
    color:#7c8184;
    background-color:#26272c !important;
    padding: 20px;
  }

  .trade-custom-comment-dark{
    width:100%;
    background-color:#202126;
    color:#6f7476;
    display:inline-block;
    padding:10px;
  }
  body{
  background:#17181c;
  }
  [data-tooltip] {
  cursor: pointer;
  position: relative;
  white-space: nowrap;
  }
  [data-tip],
  [data-tip] *,
  [data-tip] *:before,
  [data-tip] *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-kerning: auto;
  }
  [data-tip],
  [data-tip] * {
  color: white;
  font-family: 'Open Sans', 'Source Sans Pro', Roboto, 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', 'Myriad Pro', 'Segoe UI', Myriad, Helvetica, 'Lucida Grande', 'DejaVu Sans Condensed', 'Liberation Sans', 'Nimbus Sans L', Tahoma, Geneva, Arial, sans-serif;
  -webkit-text-size-adjust: 100%;
  text-shadow: rgba(0,0,0,.3) 0 1px 2px;
  }
  [data-tip] {
  background: #2D2F32;
  width: 100%;
  max-width: calc(100% - 10px);
  margin-left: 5px;
  margin-right: 5px;
  position: absolute;
  padding: 5px 5px;
  border-radius: 3px;
  text-align: center;
  opacity: 0;
  transition: .2s opacity ease-in-out;
  z-index: 9999;
  }
  [data-tip] > i {
  display: block;
  z-index: 9000;
  position: absolute;
  top: -19px;
  left: 0;
  pointer-events: none;
  }
  [data-tip] > i:before {
  content: '';
  display: block;
  border: 10px solid transparent;
  border-bottom-color: #222;
  position: absolute;
  top: -1.5px;
  left: 0;
  z-index: 8998;
  }
  [data-tip] > i:after {
  content: '';
  display: block;
  border: 10px solid transparent;
  border-bottom-color: #2D2F32;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 8999;
  }
  [data-tip] h1 {
  margin: 0;
  font-size: 12pt;
  font-weight: 600;
  line-height: 1.2;
  letter-spacing: -.02em;
  text-align: left;
  }
  [data-tip] * + p {
  margin-top: .5em;
  }
  [data-tip] p {
  margin: 0;
  text-align: left;
  font-size: 10pt;
  line-height: 1.4;
  font-weight: 400;
  }
  @media (min-width: 500px){
  [data-tip] {
    width: auto;
    margin: 0;
    display:inline-block;
  }
  }
  /*
  [data-tooltip] {
  position: relative;
  z-index: 555;
  cursor: pointer;
  }

  [data-tooltip]:before,
  [data-tooltip]:after {
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
  }

  [data-tooltip]:before {
  position: absolute;
  top:100px;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -80px;
  padding: 7px;
  width: 160px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #2D2F32;
  background-color: hsla(0, 0%, 20%, 0.9);
  color: #a6adb7;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 13px;
  line-height: 1.2;
  }

  [data-tooltip]:after {
  position: absolute;
  top:100px;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid #2D2F32;
  border-top: 5px solid hsla(0, 0%, 20%, 0.9);
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
  }

  [data-tooltip]:hover:before,
  [data-tooltip]:hover:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
  }*/

  /*
  dark version end
  */
  .trade_items_has-white{
    float: left;
    font-weight: 900;
    display: table-row;
    width:50%;
    background-color:#e3e6e8 !important;
    padding:20px;
    background-color:white;
  }
  .trade-custom-comment-white{
    width:100%;
    background-color:#bac2c6;
    color:#6f7476;
    display:inline-block;
    padding:10px;
  }
  .trade_items_want-white{
    float: right;
    width:50%;
    background-color:#CFD8DC;
    font-weight: 900;
    display: table-row;
    padding:20px;
  }
  .trade_item_empty_left-white{
    background-color:#cccfd0;
    width:130px;
    height:130px;
    display:inline-block;
    border:2px solid transparent;
  }
  .trade_item_empty_right-white{
    background-color:#bac2c6;
    width:130px;
    height:130px;
    display:inline-block;
    border:2px solid transparent;
  }
  .trade_item-white{
    width:130px;
    height:130px;
    display:inline-block;
    background-color: black;
    border:2px solid transparent;
  }
  .trade_item-white img{
    margin: 10px 0px 0px 25px;
   max-width:60%;
  }
  .trade-title_left-white{
    float: left;
    display:block;
    width:50%;
    border-bottom: 1px solid #bac2c6;
    border-top-left-radius: .2em;
    font-size:15px;
    color:#888a8b;
    background-color:#e3e6e8!important;
    padding: 20px;
  }
  .trade-title_right-white{
    float: left;
    display:block;
    border-bottom: 1px solid #bac2c6;
    width:50%;
    border-top-right-radius: .2em;
    font-size:15px;
    color:#7c8184;
    background-color:#CFD8DC !important;
    padding: 20px;
  }
  .trade-title_left-white:hover{
    -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  transition:.5s;
    background-color:#d8dfe3 !important;
  }
  .trade-title_right-white:hover{
    background-color:#CFD8DC!important;
  }
  .trade-item-quanty{
    height:30px;
    width:140px;
    border: 2px solid transparent;
    transform:translateY(-30px);
  }
  .trade-item img{
    margin: 10px 15px 20px 15px;
    width:100px;
    height:100px;
  }

  #time{
    color:#1798e5;
  }
  a.btn:link{
    color:white;
    text-decoration: none;
  }
  a.btn:visited{
    color:white;
  }
  a.btn:hover{
    color:white;
  }
  a:link{
    color:white;
    text-decoration: none;
  }
  a:visited{
    color:white;
  }
  a.menu-pot:link{
    color:white;
    text-decoration: none;
  }
  a.menu-pot:visited{
    color:white;
  }
  a.menu-pot:link{
    color:white;
    text-decoration: none;
  }
  a.menu:visited{
    color:#888a8b;
  }
  a.menu:active {
    color:white;
  }
  a.menu-pot:active {
  color:white;
  }
  a.menu:link{
    color:#888a8b;
    text-decoration: none;
  }
  a.menu:hover{
    background-color:#2c2d32;
    color:white;
  }
  a.verified:link{
    color:#2ecc71;
  }
  a.verified:visited{
    color:#2ecc71;
  }
  a:hover{
    color:#1380c1;
  }
  .column {
    float: left;
    font-weight: 900;
    display: table-row;
    padding: 15px 15px;
  }
  .trade-title{
    float: left;
    text-transform: uppercase;
    font-weight: 900;
    border-right: 1px solid #90A4AE;
    font-size:15px;
    background-color:#CFD8DC!important;
    padding-left: 15px;
  }

  .trade-template{
    width:100%;
    display: table;
    margin-top:20px;
    background-color: white;

  }
  .content{
    border: 0px transparent;
    padding:0;
    width:100%;
  }
  .toast {
    position: relative;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-left: 5px solid;
    width: 100%;
    height: auto;
    margin-bottom: 1rem;
    cursor: pointer;
  }
  .toast__left {
    position: absolute;
    left: .85rem;
  }
  .toast__right {
    padding-left: 2rem;
  }
  .toast__right .toast_title {
    color: #666;
  }
  .toast p {
    margin: 0;
    color: #999;
  }


  .toast-danger {
    border-left-color: #E53935;
  }
  .toast-danger i {
    color: #E53935;
  }
  .import {
   border: 1px solid rgba(227,90,82,.4);
  }

  .premium {
   border: 1px solid rgba(107,241,174,.4);
  }

  .rare {
   border: 1px solid rgba(116,151,235,.4);
  }

  .very-rare  {
    border: 1px solid rgba(158,124,252,.4);
  }

  .limited {
    border: 1px solid rgba(247,121,57,.4);
  }

  .black-market{
    border: 1px solid rgba(255,0,255,.4);
  }

  .exotic{
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
  /* RL Items*/
  .rl-items .rl-items-item::before {
   content: "";
   display: block;
   position: absolute;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   transition: all .2s ease-in-out;
   z-index: 1;
  }

  .rl-items-item {
   background: #000;
   border-radius: 2px;
   text-align: center;
   margin-bottom: 5px;
   height: 140px;
   position: relative;
   display: -ms-flexbox;
   display: flex;
   -ms-flex-direction: column;
   flex-direction: column;
   -ms-flex-pack: distribute;
   justify-content: space-around;
  }

  .rl-items-item:hover{
  opacity:0.80;
  }


  .rl-items-item h2 {
   color: #fff;
   line-height: 1.1;
   font-size: 20px;
   margin: 0;
  }

  .rl-items-item h3 {
   color: #fff;
   line-height: 1.1;
   font-size: 15px;
   margin: 0;
  }

  /* Text Color RL Items */
  .rl-items-item-import {
   color: #e35a52;
  }
  </style>
