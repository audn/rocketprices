<?php 
include_once("./php/new-login/db_connect.php");
include_once("./php/new-login/functions.php");

sec_session_start();
$loggedin = false;
if(login_check($conn)){
    $loggedin = true;
}
if($loggedin){
    header("Location: /trading");
}

?>
<head>
  <title>Welcome to Rocketprices</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      }) (window,document,'script','https://www.google-analytics.com/analytics.js','ga');
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
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <header>
    <center>
      <div class="container">
        <a href="/">
          <img src="http://rocketprices.net/dist/img/logo-long.png" alt="RocketPrices.net" style="height: auto; max-width: 250px; display: block; display: inline-block; text-decoration: none;" data-cms-node="2017">
        </a>
      </div>
    </center>
  </header>
  <script>


      function checkForm(){

          if(passwordError()){
              return;
          }
          if(emailError()){
              return;
          }
          console.log("click");
          var form = $("#registerform");
          var formData = $(form).serialize();
          $.ajax({
              type: "POST",
              url: $(form).attr("action"),
              data: formData
          }).done(function(response){
              console.log(response);
              if(response == "username"){
                  usernameError();

              }
              if(response == "password"){
                  passwordError();

              }
              if(response == "email"){
                  emailError();
              }
              if(response == "finished"){
                  window.location.replace("./../trading/profile");
              }



          });



      }
      function passwordError(){
          if($("#password").val() != $("#password2").val()){
               $("#fix-password").html("<p>Passwords did not match</p>");
               return true;
          }else{
              $("#fix-password").html("");
              return false;
          }
          //if($("[attribute='password']"))


      }
      function passwordError2(){
          $("#fix-password").html("<p>Password did not meet the minimum requirements.</p>");
      }
      function usernameError(){
          $("#fix-name").html("<p>Username already taken, or exceeded 32 characters.</p>");

      }
      function emailError(){
          if($("#email").val() != $("#email2").val()){
               $("#fix-email").html("<p>Emails did not match</p>");
               return true;
          }else{
              $("#fix-email").html("");
              return false;
          }
      }
      $(document).ready(function(){
          $("#submit").click(function(){
              checkForm();
          });

      });
  </script>
  </head><body>
  <div class="container">
    <div class="content-new" style="border-radius:.3em;">
      <p class="title1" style="text-align: center;">Signing up</p>
      <p>
        Create your free account on RocketPrices, and be a part of our new trading feature!
      </p>
      <form action="php/register" id="registerform" method="POST">
      <table style="width: 100%;">
        <tr>
          <td style="width: 25%; padding: 5px; text-align: right;">
            <div class="register-field1">Username</div>
            <div style="color:red;" id="username-error"></div>
          </td>
          <td style="padding: 5px;">
            <input type="text" name="name" placeholder="Max 32 alphanumeric characters (A-Z, a-z, 0-9)" required="required" class="input-txt" style="color: #333;" />
            <div id="fix-name"></div>
          </td>

        </tr>
        <tr>
          <td style="padding: 5px; padding-top: 20px; text-align: right;">
            <div class="register-field1">Email</div>
          </td>
          <td style="padding: 5px;">
            <input type="email" name="email" id="email" placeholder="Your valid email address" required="required" class="input-txt" style="color: #333;" />
          </td>
        </tr>
        <tr>
          <td style="padding: 5px; text-align: right;">
            <div class="register-field1">Repeat Email</div>
          </td>
          <td style="padding: 5px;">
            <input type="email" name="email2" id="email2" placeholder="Once again." required="required" class="input-txt" style="color: #333;" />
            <div id="fix-email"></div>
          </td>
        </tr>
        <tr>
          <td style="padding: 5px; padding-top: 20px; text-align: right;">
            <div class="register-field1">Password</div>
          </td>
          <td style="padding: 5px;">
            <input type="password" name="password" id="password" placeholder="At least 8 characters, and one number" required="required" class="input-txt" style="color: #333;" />
          </td>
        </tr>
        <tr>
          <td style="padding: 5px; text-align: right;">
            <div class="register-field1">Repeat PW</div>

          </td>
          <td style="padding: 5px;">
            <input type="password" name="password2" id="password2" placeholder="Once again." required="required" class="input-txt" style="color: #333;" />
          <div id="fix-password"></div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td style="padding: 5px; text-align: right;">
            <div class="g-recaptcha" data-sitekey="6LcImT4UAAAAANKvZHwAfOXw6TydsY-2HlTvzsZ_"></div>
          </td>
        </tr>
        <!--
        <tr>
          <td style="padding: 5px; padding-top: 20px; text-align: right;">
            <div class="register-field1">Platform</div>
          </td>
          <td style="padding: 5px;">
            <select name="platform" required="required" class="input-txt" style="color: #333;">
              <option disabled selected hidden>Choose your default platform...</option>
              <option>PC</option>
              <option>PS4</option>
            </select>
          </td>
        </tr>
      -->
      </table>
      <p style="padding-top: 30px; width: 100%; text-align: center;">
        <a type="submit" class="btn-color"  data-target="#read-more" data-toggle="modal" target="_blank" id="submit">Make my account!</a>
        <br /><br />
        Already have an account?<br />
        <a href="/trading/login" style="color: rgb(23, 137, 235); font-size: 16px;">Log in</a>
      </p>
      </form>

    </div>
  </div>


  <style>
    .footer {
      width: 100%;
      height: 100px;
      padding: 20px 20px;
      text-align: center;
      bottom: 0;
    }
  </style>

  <script type="text/javascript" src="dist/js/main.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .info {
      background-color: #f9f9f9;
      color: black;
      font-size: 10px;
      margin: 4px 0 15px 0;
      display: block;
      letter-spacing: 1px;
      padding: 5px 10px;
      line-height: 15px !important;
    }
    @media(max-width:768px) {
      .input-txt {
      width:auto;
        }

    }
    .input-txt {
      width: 100%;
      padding: 5px;
      background: $blue;
      border: none;
      font-size: 1em;
      border-bottom: 1px solid #1789eb;
      color: #1789eb;;
      @include box-sizing(border-box);
      @include placeholder(lighten(#1789eb;, 10%));
      @include transition(background-color .5s ease-in-out);
      &:focus{
        background-color: darken(#1789eb;, 10%);
      }
    }
    #fix-password{
      color:red;
      text-decoration: underline;
    }
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    .btn-color {
    position: relative;
    display: inline-block;
    padding: 10px 10px;
    background-color:#4A76A8;
    cursor:pointer;
    width:100%;
    text-align: center;
    color: white;
  }
    a:visited {
      text-transform: none;
    }
    a:hover {
      text-transform: none;
      color:white;
    }

    .title1 {
      font-size: 20px;
      padding: 10px 10px;
      position: relative;
      opacity: .67;
      -ms-filter: "alpha(opacity=67)";
      border-radius: .2em;
      font-weight: 600;
    }
    .register-field1 {
      font-size: 15px;
      padding: 5px;
      position: relative;
      border-radius: .2em;
      font-weight: 600;
    }
    .content-new {
      margin-left: auto;
      margin-right: auto;
      background-color: white;
      color: black;
      border-bottom-left-radius: .2em;
      border-bottom-right-radius: .2em;
      padding: 20px 20px;
      clear: both;
      width: 100%;
      position: relative;
    }
    header{
      padding: 20px 20px;
      background-color: #4A76A8;
    }
    .content-header {
      background-color: #1789eb;
      padding: 20px 20px;
      color: white;
      margin-top: 10px;
      width: 100%;
      margin-left: auto;
      margin-right: auto;
      border-top-left-radius: .2em;
      border-top-right-radius: .2em;
      display: flex;
      align-items: center;
      margin-left: 0px;
    }
    body{
      background-color:#4A76A8 !important;
    }
    .choose {
      background-color: #1d1d1d;
      color: white;
      width: 140px;
      border-radius: .2em;
      -webkit-justify-content: flex-start;
      justify-content: flex-start;
      margin-left: auto;
      margin-right: auto;
      border: 2px solid transparent;
    }
    .otherChoose {
      width: 150px;
      height: 150px;
      -webkit-justify-content: flex-start;
      justify-content: flex-start;
      margin-left: auto;
      border: 2px solid transparent;
    }
    .arrowRight:hover {
      background-image: url('http://i.imgur.com/WDi94H7.png');
    }
    .arrowLeft:hover {
      background-image: url('http://i.imgur.com/r1vdXrk.png');
    }
    .choose:hover {
      border: 2px solid #1789eb;
      cursor: pointer;
    }

    .container {
      max-width: 550px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</body>
