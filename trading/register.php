
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=relpath("dist/favicon.ico")?>" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=relpath("dist/css/main.min.css")?>">
  <meta name= viewport content="width=device-width initial-scale=1">

  <meta property="og:type" content="guides">
  <meta property="og:description" content="Get updated daily on the current Rocket League prices for PS4 and PC.">
  <meta property="og:locale" content="en_GB">
  <meta property="og:image" content="https://i.gyazo.com/68a96f8180969056a3531152914a62db.png">
  <meta property="og:url" content="https://rocketprices.net">
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
</head><body>
  <div class="container">
    <div class="content-header">
      <i class="fa fa-rocket" aria-hidden="true"></i> &nbsp;Become a part of something bigger.
    </div>
    <div class="content-new" style="border: 0px transparent;">
      <p class="title1" style="text-align: center;">Signing up</p>
      <p>
        Create your free account on RocketPrices, and receive email price updates for your favorite items!
      </p>
      <form action="register.php" method="POST">
      <table>
        <tr>
          <td style="width: 25%; padding: 5px; text-align: right;">
            <div class="register-field1">Username</div>
          </td>
          <td style="padding: 5px;">
            <input type="text" name="username" placeholder="Max 32 alphanumeric characters (A-Z, a-z, 0-9)" required="required" class="input-txt" style="color: #333;" />
          </td>
        </tr>
        <tr>
          <td style="padding: 5px; padding-top: 20px; text-align: right;">
            <div class="register-field1">Email</div>
          </td>
          <td style="padding: 5px;">
            <input type="text" name="email" placeholder="Your valid email address" required="required" class="input-txt" style="color: #333;" />
          </td>
        </tr>
        <tr>
          <td style="padding: 5px; text-align: right;">
            <div class="register-field1">Repeat Email</div>
          </td>
          <td style="padding: 5px;">
            <input type="text" name="email2" placeholder="Once again." required="required" class="input-txt" style="color: #333;" />
          </td>
        </tr>
        <tr>
          <td style="padding: 5px; padding-top: 20px; text-align: right;">
            <div class="register-field1">Password</div>
          </td>
          <td style="padding: 5px;">
            <input type="password" name="password" placeholder="At least 8 characters, and one number" required="required" class="input-txt" style="color: #333;" />
          </td>
        </tr>
        <tr>
          <td style="padding: 5px; text-align: right;">
            <div class="register-field1">Repeat PW</div>
          </td>
          <td style="padding: 5px;">
            <input type="password" name="password2" placeholder="Once again." required="required" class="input-txt" style="color: #333;" />
          </td>
        </tr>
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
          <div class="g-recaptcha" data-sitekey="6LcImT4UAAAAANKvZHwAfOXw6TydsY-2HlTvzsZ_"></div>
        </tr>
      </table>
      </form>
      <p style="padding-top: 30px; width: 100%; text-align: center;">
        <a class="btn-color" data-title="Make my account!" data-target="#read-more" data-toggle="modal" target="_blank"></a>
        <br /><br />
        Already have an account?<br />
        <a href="/login" style="color: rgb(23, 137, 235); font-size: 16px;">Log in</a>
      </p>
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
    .input-txt {
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
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    .btn-color {
      position: relative;
      display: inline-block;
      padding: 10px 10px;
      text-decoration: none;
      text-align: center;
      cursor: pointer;
      user-select: none;
      color: white;
    }
    .btn-color::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      background: linear-gradient(135deg, #1798EB, #107abf);
      border-radius: 4px;
      transition: box-shadow .5s ease, transform .2s ease;
      will-change: transform;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      transform: translateY(var(--ty, 0)) rotateX(var(--rx, 0)) rotateY(var(--ry, 0)) translateZ(var(--tz, -12px));
    }
    .btn-color:hover::before {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    .btn-color::after {
      position: relative;
      display: inline-block;
      content: attr(data-title);
      transition: transform .2s ease;
      font-weight: bold;
      letter-spacing: .01em;
      will-change: transform;
      transform: translateY(var(--ty, 0)) rotateX(var(--rx, 0)) rotateY(var(--ry, 0));
    }
    a:visited {
      text-transform: none;
    }
    a:hover {
      text-transform: none;
    }

    header {
      padding: 20px 20px;
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
    body {
      background-color: #d8d9da;
      margin: 0;
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
