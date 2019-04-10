<?php session_start();
if(isset($_SESSION["login_token"])){
    //replace this with trade
    header("Location: /trading");

}


?>
<head>
 <title>Welcome to Rocketprices.</title>
 <script>
 function login(){
    var form = $("#loginform");
    var formData = $(form).serialize();
    $.ajax({
        type: "POST",
        url: $(form).attr("action"),
        data: formData
    }).done(function(resp){
        resp = $.trim(resp);
        if(resp == "logged"){
            window.location.replace("./../trading");
        }else if(resp == "password"){
            alert("Wrong password");
        }else{
            alert(resp);
        }
    });

 }
 </script>
</head>
  <?php  require_once 'php/head.php';


   ?>
  <header>
    <center>
    <div class="container">
      <a href="/">
    <img src="https://rocketprices.net/dist/img/logo-long.png" alt="RocketPrices.net" style="height: auto; max-width: 250px; display: block; display: inline-block; text-decoration: none;" data-cms-node="2017">
          </a>
        </div>
      </center>
  </header>
<div class="container">
    <form action="php/login" id="loginform" method="POST">
    <div class="content-new" style="border-radius:.3em;">
          <div class="title1">Sign in to Rocketprices.net, start your trading adventure.</div> <p>
        </p>
        <p>

        <input type="text" name="name" id="name" placeholder="Username" required="required" class="input-txt" />
        <br>
        <p>
        <input type="password" name="password" id="password" placeholder="Password" required="required" class="input-txt" />
        <br>
        <p><br>
          <a class="btn-color" target="_blank" onclick="login();">Login now</a><a href="/trading/sign-up" > <br><p>, I don't have an account, make me one!</a>
        </div>
        </form>
    </div>
  </div>

<style>
body{
  background-color:#4A76A8 !important;
}
.info{
  background-color:#f9f9f9;
  color:black;
  font-size:10px;
  margin: 4px 0 15px 0;
  display:block;
  letter-spacing: 1px;
  padding: 5px 10px;
  line-height:15px !important;
}
.input-txt{
  width: 100%;
  padding: 20px 10px;
  background: $blue;
  border: none;
  font-size: 1em;
  border-bottom:  1px solid #ddd;
  color: #1789eb;;
  @include box-sizing(border-box);
  @include placeholder(lighten(#1789eb;, 10%));
  @include transition(background-color .5s ease-in-out);

    &:focus{
     background-color: darken(#1789eb;, 10%);
    }
  }
  @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
  .btn-color {
  position: relative;
  display: inline-block;
  padding: 10px 10px;
  background-color:#4A76A8;
  width:100%;
  text-align: center;
  color: white;
}
a.btn-color:visited{
  text-transform: none;
}
a.btn-color:hover{
  text-transform: none;
  color:white;
  cursor: pointer;
}


header{
  padding: 20px 20px;
  background-color: #4A76A8;
}
    .title1{font-size:15px;padding:10px 10px;position:relative;opacity:.67;-ms-filter:"alpha(opacity=67)";border-radius:.2em;font-weight:600}
.content-new{
  margin-left:auto;
  margin-right:auto;
  background-color:white;
  color: black;
  border-bottom-left-radius: .2em;
  border-bottom-right-radius: .2em;
  padding: 20px 20px;
  clear:both;
  width: 100%;
  position:relative;
}
.content-header{
  background-color: #1798eb;
  padding: 20px 20px;
  color:white;
  margin-top:10px;
  width: 100%;
  margin-left:auto;
  margin-right:auto;
  border-top-left-radius:.2em;
  border-top-right-radius:.2em;
  display: flex;
  align-items: center;
  margin-left: 0px;
}
body{
  background-color: #d8d9da;
  margin: 0;
}
.choose{
  background-color:#1d1d1d;
  color:white;
  width: 140px;
  border-radius:.2em;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  margin-left: auto;
  margin-right: auto;
  border: 2px solid transparent;
}
.otherChoose{
  width:150px;
  height:150px;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  margin-left: auto;
  border: 2px solid transparent;
}
.arrowRight:hover{
  background-image: url('http://i.imgur.com/WDi94H7.png');
}
.arrowLeft:hover{
  background-image: url('http://i.imgur.com/r1vdXrk.png');
}
.choose:hover{
  border: 2px solid #1789eb;
  cursor:pointer;
}

.container{
  max-width:550px;margin-left:auto;margin-right:auto
}
</style>
