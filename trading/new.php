
<?php
include_once("./php/new-login/db_connect.php");
include_once("./php/new-login/functions.php");

sec_session_start();
$loggedin = false;
if(login_check($conn)){
    $loggedin = true;
}
if(!$loggedin){
    header("Location: /trading");
}
?>

<?php

	$call = $conn->prepare("SELECT * FROM items");
	$result = "error";
	if($call->execute()){
		$result = $call->fetchAll();

	}else{

		print_r($call->errorInfo());

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
              Tickets &nbsp;<span class="lightpill" style="background-color:#c0392b;">412</span></a>
            </li>
            <?php } ?>
            <li class="pot-nav-trade">
                <a href="/trading" class="menu-pot"> <i class="fa fa-exchange" aria-hidden="true"></i>
              trade</a>
            </li>
            <?php if($loggedin){ ?>
            <li class="pot-nav">
                <a href="/trading/profile" class="menu"> <i class="fa fa-user" aria-hidden="true"></i>
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
       color: #888a8b;
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
.text{
  color:#888a8b;
}
 </style>
 <div id="page-content-wrapper">
     <div class="container">
         <script>
                 (adsbygoogle = window.adsbygoogle || []).push({
                   google_ad_client: "ca-pub-3070420145299092",
                   enable_page_level_ads: true
                 });
         </script>

  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-88967903-1', 'auto');
      ga('send', 'pageview');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <meta name= viewport content="width=device-width initial-scale=1">
  <link type="text/plain" rel="author" href="http://domain/humans.txt" />

  <meta property="og:type" content="guides">
  <meta property="og:description" content="RocketPrices is the best place to get reliable, up-to-date Rocket League item prices on both PC and console; no sign-in required!">
  <meta property="og:locale" content="en_GB">
  <meta property="og:image" content="https://i.gyazo.com/68a96f8180969056a3531152914a62db.png">
  <meta property="og:url" content="https://rocketprices.net">
  <script>
  function myFunction() {
      // Get the snackbar DIV
      var x = document.getElementById("snackbar")

      // Add the "show" class to DIV
      x.className = "show";

      // After 3 seconds, remove the show class from DIV
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }</script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
	// Created by Håvard Nygård on 1/13/2018
	// Feel free the snippet as you please.


	// Old prototype, HTML5 did not work all that well.
	/*function drag(e){
		e.dataTransfer.setData("text", e.target.id);

	}

	function allowDrop(e){
		e.preventDefault();
	}

	function drop(e){
		e.preventDefault();
		var d = e.dataTransfer.getData("text");
		console.log(e.target);
		e.target.appendChild(document.getElementById(d));
	}*/
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <p></p>
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-3070420145299092"
                   data-ad-slot="8821986368"
                   data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
              <script>
                var slots = []
                var i = 0;
                var y = 0;
                var modal = "";
                $(document).ready(function(){
                    modal = $(".trade-edit");

                    slots = $(".trade_item_empty_left-dark").toArray();

                    $(".trade_item_empty_left-dark").click(function(){
                        $(".trade_item_empty_left-dark").removeClass("selected");
                        $(this).addClass("selected");
                        i = slots.findIndex(i => $(i).is($(".trade_item_empty_left-dark.selected")));
                    });

                    modal.hide();

                    $(document).unbind().click(function(e){
                       if($(modal).is(":visible") && $(e.target).is($(modal)) === false){
                           modal.hide(100);
                       }
                    });
                    
                    $(".trade_item-dark").click(function(){
                        var item = $(this).clone();
                        item.attr("id", y);
                        y++;
                        $(".trade_item_empty_left-dark.selected").empty();
                        $(".trade_item_empty_left-dark.selected").append(item);


                        if($(slots[i]).is($(".trade_item_empty_left-dark.selected"))){
                            i++;
                        }
                        $(".trade_item_empty_left-dark").removeClass("selected");
                        //alert(JSON.stringify(slots[i]));
                        if(i>slots.length){
                            return;
                        }
                        $(".trade_item_empty_left-dark .trade_item-dark").unbind().click(function(e){
                            console.log("why");
                            e.stopPropagation();
                            if($(this).is($(modal).parent()) && $(modal).is(":visible")){
                                modal.hide(100);
                                return;
                            }
                            $(".trade_item_empty_left-dark.selected").removeClass("selected");
                            $(this).closest(".trade_item_empty_left-dark").addClass("selected");
                            
                            $(this).append(modal);
                            $(this).find(modal).click(function(){
                                return false;
                            });
                            modal.show();
                            $(".btn-remove").click(function(){
                                console.log("remove");
                                $(modal).closest(".trade_item-dark").remove();
                            });
                        })
                        
                        
                        $(slots[i]).addClass("selected");
                    });


                });
              </script>
                <p></p>

            <div class="container">
              <div class="btn-change">
                <i class="fa fa-desktop" aria-hidden="true"></i> Change to desktop version<br>
                <span style="font-size:14px;">Makes it easier to create a new trade for phone users.</span>
              </div>
              <p>
              <div class="trade-template-dark">
                <div class="trade-title_left-dark">
                <img src="psn_grey.svg" class="psn networkSize2"> The items you have
                </div>
                <div class="trade-title_right-dark">
                  The items you want<font style="float:right;font-size:12px;"></font>
                </div>
                  <div class="trade_items_has-dark">
                    <div class="trade_item_empty_left-dark rare selected"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                  </div>
                  <div class="trade-title_right-dark-phone">
                    for: <font style="float:right;font-size:12px;"> 5 seconds ago</font>
                  </div>
                  <div class="trade_items_want-dark">
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>
                    <div class="trade_item_empty_left-dark rare"></div>


                    <div class="trade-edit">
                    <tr>
                      <td style="padding: 5px; padding-top: 20px; text-align: right;">
                        <div class="title" style="font-size:16px;text-align:left;padding:2px 2px;">Edit item</div>
                        <div class="line">&nbsp;</div>
                      </td>
                      <p>
                      Select Color
                      <td style="padding: 5px;">
                        <select name="platform" required="required" class="input-txt1" style="color: #888a8b;">
                          <option disabled selected hidden>None</option>
                          <option>None</option>
                          <option>White</option>
                          <option>Black</option>
                          <option>Burnt Sienna</option>
                          <option>Cobalt</option>
                          <option>Crimson</option>
                          <option>Forest Green</option>
                          <option>Grey</option>
                          <option>Lime</option>
                          <option>Orange</option>
                          <option>Pink</option>
                          <option>Purple</option>
                          <option>Saffron</option>
                          <option>Sky blue</option>

                        </select>
                      </td>
                    </tr>
                    <p><br>
                    <tr>
                      Select amount
                      <td style="padding: 5px;">
                        <select name="platform" data-live-search="true" required="required" class="input-txt1" style="color: #888a8b;">
                          <option disabled selected hidden>None</option>
                            <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                          <option>32</option>
                          <option>33</option>
                          <option>34</option>
                          <option>35</option>
                          <option>36</option>
                          <option>37</option>
                          <option>38</option>
                          <option>39</option>
                          <option>40</option>
                          <option>41</option>
                          <option>42 </option>
                          <option>43</option>
                          <option>44</option>
                          <option>45</option>
                          <option>46</option>
                          <option>47</option>
                          <option>48</option>
                          <option>49</option>
                          <option>50</option>
                        </select>
                      </td>
                    </tr>
                    <p><br>
                    <tr>
                      Select certification
                      <td style="padding: 5px;">
                        <select name="platform" data-live-search="true" required="required" class="input-txt1" style="color: #888a8b;">
                          <option disabled selected hidden>None</option>
                            <option>None</option>
                          <option>Acrobat</option>
                          <option>Aviator</option>
                          <option>Goalkeeper</option>
                          <option>Guardian</option>
                          <option>Juggler</option>
                          <option>Paragon</option>
                          <option>Playmaker</option>
                          <option>Scorer</option>
                          <option>Show-Off</option>
                          <option>Sniper</option>
                          <option>Striker</option>
                          <option>Sweeper</option>
                          <option>Tactican</option>
                          <option>Turtle</option>
                          <option>Victor</option>
                        </select>
                      </td>
                    </tr>
                    <p>
                      <!--<div class="btn-save">Save item</div>-->
                      <p>
                      <div class="btn-remove" id="remove-item">Remove item</div>
                  </div>


                  </div>
                  <div class="trade-header">
                    <div class="title3">Select the items you want to trade</div>
                  </div>
                  <div class="content-items">
										<input type="text" placeholder="Search through the items.." class="inpt-search">
										<p>
											<style>
											input[type=text] {
									    width: 100%;
											color:#6f7476;
											background-color:#202126;
									    padding: 12px 20px;
											border:#40434f;
									    margin: 8px 0;
									    box-sizing: border-box;
										}
									</style>
					<div id="0" class="trade_item-dark common"><img src="/trading/items/key.jpg">
					<div class="trade-item-quanty key-quanty">Key Offer</div></div>
					<div id="0" class="trade_item-dark common"><img src="/trading/items/all_offer.jpg">
					<div class="trade-item-quanty offer-quanty">All Offers</div></div>
					<?php
					foreach($result as $item){

						$name = str_replace("/", "", $item["name"]);
						$name = explode(":",$name)[0];
						$rarity = explode(" ",strtolower($item["rarity"]));
						$temp = sprintf("<div trade_id=\"%s\" class=\"trade_item-dark %s\"><img src=\"/trading/items/%s/%s.jpg\">", $item["type"] . $item["id"] ,join("-",$rarity), $item["type"],$name);
						echo $temp;
						$temp2 = sprintf("<div class=\"trade-item-quanty %s-quanty\">%s</div></div>", join("-",$rarity), $item["name"]);
						echo $temp2;

					}

					?>

                </div>
                <div class="trade-header" style="margin-top:20px;background-color:#26272c;">
                  <div class="title3">Notes</div>
                </div>
                <div class="content-note" contenteditable="true" >
                  Here you can enter some notes for your trade, keep in mind we  have rules applied to what's allowed / not allowed to write here.
                </div>
								<div class="trade-header" style="background-color:#26272c;">
                  By posting this trade offer, you accept our <a href="http://rocketprices.net/trading/rules">trading rules</a>.
									<p>
										<div class="title3">
										<div class="btn-new">Make trade</div>
									</div>
                </div>
              </div>

  <?php require_once 'php/scripts.php'; ?>
  <style>
  .trade-header{
    width:100%;
    background-color: #202126;
    color:#6f7476;
    display:inline-block;
    padding:20px 20px;
  }
  .content-items{
    background-color:#25262a;
    color:#888a8b;
    padding:20px 20px;
    height:500px;
    overflow-y: scroll;
  }
  .content-note{
    background-color:#202126;
    color:#888a8b;
    padding:20px 20px;
    height:300px;
  }
  .title3{
    font-weight:600;
    font-size:15px;
  }
  .networkSize2{
    padding-left:10px;
    width:30px;
    color:#1798e5;
  }
  .title-tooltip{
    font-size:15px;

  }
    .btn-save{
      padding: 8px 15px;
      background-color:#2ecc71;
      color:white;
      border-radius:500px;
      display:inline-block;
    }
    .btn-save:hover{
      background-color:#27ae60;
      cursor:pointer;
    }
  .btn-remove{
    padding: 8px 15px;
    background-color:#d35400;
    color:white;
    border-radius:500px;
    display:inline-block;
  }
  .btn-remove:hover{
    background-color:#d65f53;
    cursor:pointer;
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
  .trade_item_empty_left-dark{
    background-color:#202227;
    width:100px;
    height:100px;
    display:inline-block;
    border:2px solid transparent;
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
  @media only screen and (max-width: 1200px) {
    .trade_items_has-dark{
      width:100% !important;
    }
    .trade_items_want-dark{
      width:100% !important;
    }
    .trade-title_left-dark{
      width:100%  !important;
    }
    .trade-title_right-dark{
      display:none !important;
    }
    .trade-title_right-dark-phone{
      display:block !important;
      width:100% !important;
    }
    .btn-change{
      display:block !important;
      width:100% !important;
      text-align:center;
    }
  }
  @media (min-width: 1200px)
  {
   .container {
      width: 1170px;
    }
  }
  .btn-change{
    display:none;
    background-color:#26272c;
    color:#888a8b;
    font-size:17px;
    padding:20px 44px;
    width:100%;
  }
  .trade-edit{
    position: absolute;
    width:210px;
    border-radius:.2em;
    background-color:#202126;
    padding:20px 20px;
    z-index:9999;
    color:#6f7476;
    text-align: center;
  }
  .trade-edit:hover{
    cursor:default;
  }
  .input-txt1 {
    width: 100%;
    padding: 10px 10px;
    border: none;
    font-size: 1em;
    color: #888a8b;
    background-color: #26272c;
  }
  .trade_item-dark{
    /*border: 1px solid #083b59;*/
    background-color:black;
    display:inline-block;
    width:98px;
    margin: 0 4px 4px 0;
    vertical-align: left;
    height:98px;
    position:relative;
  }
  .trade_item-dark:hover{
    cursor: pointer;
  }
  .trade_item-dark img{
   width:80px;
   vertical-align: super !important;
   margin: 14px 0px 0px 10px;
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
  .trade-title_right-dark-phone{
    float: left;
    display:none;
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
    height:25px;
    width:96px;
    position: absolute;
    color:white;
    font-size:11px;
    border: 2px solid transparent;
    transform:translateY(-33px);
    vertical-align: middle;
    text-align:center;
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
    text-transform: uppercase;
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
.span_1 {
    width: 11.1111%;
}
.span_2 {
    width: 44.4444%;
    text-align:left;

}
.span_3 {
    width: 50.0000%;
    text-align:left;
		background-color:white;
}
.span_4 {
    width: 44.4444%;
	background-color:yellow;
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
  .selected {
   border: 1px solid rgba(23, 152, 229, 1) !important;
  }
  .import {
   border: 1px solid rgba(227,90,82,.4);
  }
  .yellow {
   border: 1px solid #ffd700;
  }
  .yellow-title {
   color: #ffd700;
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
  <script>
  var tooltip = document.body.querySelectorAll('[data-tooltip]')
  for (i=0;i<tooltip.length;i++){
    tooltip[i].setAttribute('data-tooltip',i)
    tooltip[i].addEventListener('mouseenter',popTip)
    tooltip[i].addEventListener('touchenter',popTip)
    tooltip[i].addEventListener('mouseleave',fadeTip)
    tooltip[i].addEventListener('touchleave',fadeTip)
  }
  function popTip(e){
    var tip = document.createElement('aside')
        nub = document.createElement('i'),
        title = this.getAttribute('data-title') || '',
        caption = this.getAttribute('data-caption') || ''
    tip.setAttribute('data-tip',this.getAttribute('data-tooltip'))
    tip.style.top = measureTop(e.target)+e.target.offsetHeight+7+'px'
    if (window.innerWidth > 500){
      if (measureLeft(e.target)>window.innerWidth-300){
        tip.style.left = nub.style.left = 'auto'
        tip.style.right = window.innerWidth-(measureLeft(e.target)+e.target.offsetWidth)+'px'
        nub.style.right = 20+'px'
      } else {
        tip.style.left = measureLeft(e.target)+'px'
      }
    } else {
      nub.style.left = measureLeft(e.target)-5+(e.target.offsetWidth/2-10)+'px'
      tip.style.left = 0
    }
    if (title) {
      tip.innerHTML += '<div class="title">'+title+'</div>'
    }
    if (caption) {
      tip.innerHTML += '<p>'+caption+'</p>'
    }
    tip.addEventListener('click',function(){})
    document.body.appendChild(tip).appendChild(nub)
    setTimeout(function(){
      tip.style.opacity = 1
      tip.style.pointerEvents = 'none'
    },200)
  }
  function fadeTip(e){
    var attr = this.getAttribute('data-tooltip')
        tip = document.querySelectorAll('[data-tip="'+attr+'"]')[0]
    tip.style.opacity = 0
    tip.style.pointerEvents = 'none'
    setTimeout(function(){
      var tip = document.querySelectorAll('[data-tip="'+attr+'"]')[0]
      document.body.removeChild(tip)
    },200)
  }
  function measureTop(el){
    var top = 0
    while (el) {
      top += el.offsetTop
      el = el.offsetParent
    }
    return top
  }
  function measureLeft(el){
    var left = 0
    while (el) {
      left += el.offsetLeft
      el = el.offsetParent
    }
    return left
  }</script>
