<script async src="https://www.google-analytics.com/analytics.js">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
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
<meta name="theme-color" content="#1798e5">
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
<meta content="Rocket League prices guide for PS4 and PC pricelist. The most updated one, always up to date with the new items; no sign-in required!" property="og:description">
<meta content="en_GB" property="og:locale">
<meta content="https://i.gyazo.com/68a96f8180969056a3531152914a62db.png" property="og:image">
<meta content="https://rocketprices.net" property="og:url">
<script src="/ads.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-oi8o31xSQq8S0RpBcb4FaLB8LJi9AT8oIdmS1QldR8Ui7KUQjNAnDlJjp55Ba8FG" crossorigin="anonymous">


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
<meta content="Rocket League prices guide for PS4 and PC pricelist. The most updated one, always up to date with the new items; no sign-in required!" name="description">
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
          <div class="navbar-header"><button class="navbar-toggle" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a href="https://rocketprices.net"><img class="logo" src="https://rocketprices.net/dist/img/only-text.png"></a>
          </div>
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
                  <a href="/xbox"><i class="fab fa-xbox"></i></a>
              </li>

              <li>
                  <a href="/certified"><i class="fa fa-list"></i></a>
              </li>
              <li>
                  <a href="/giveaways"><i class="fa fa-trophy"></i></a>
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
                  <a href="/xbox"><i class="fab fa-xbox"></i></a>
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
                  <a href="https://discord.gg/faWa4KH"><img src="https://i.imgur.com/XSynYB1.png" style="width: 15px;margin-left:9px;color:white;"> Official Discord</a>
              </li>
              <li>
                <a href="https://www.instagram.com/rocketprices/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Official Instagram</a>
              </li>
              <li>
                <a href="https://www.facebook.com/rocketprices" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> Official Facebook</a>
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
                  <a href="/giveaways">&nbsp;</a>
              </li>
              <div class="line">
                &nbsp;
              </div>
          </ul>
      </div>
      <!--
      <div class="pot-nav">
        <div class="container">
        We're updating our website with the new color schemes, some pages might be under the process of changing colors. Please be patient.</div>
      </div>-->
      <a id="back-top" href="#top" style="display: none;"><i class="fa fa-chevron-up" data-cms-node="3770"></i></a>
    <script>
        $("button").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <div id="mybutton">
            <a class="icon-insta" href="https://www.instagram.com/rocketprices/">Giveaways</a>
        </div>
    <style>
    #mybutton {
    z-index: 100;
    position: fixed;
    bottom: 30px;
    right: 30px;
}
.icon-insta {
    background-color: #f06595;
    color: white;
    padding: 12px;
    border-radius: 100vh;
    border: none;
}
    .pot-nav{
      background:#32343c;
      padding: 16px;
      text-align:left;
      margin:0;
      color:#949ba2;
    }
    .modal-content{
      color: black !important;
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
    .navbar-header{
      position:relative;
    }
    .header-bar{
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
      position:absolute;
      height:10px;
      width:100%;
    }
    .blueBar{
      background:#60acf3;

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
          background-color: #2f323b;
          font-family: 'Muli', sans-serif;
          min-height: 100%;
          color:#949ba2;
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
      background: #2d3038;
      color: #7b7b7b;
      appearance: none;
    }
    .bs
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
      color: white;
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
          background-color: #24262d;
          color: #FFFFFF;
          border: none;
      }

      .navbar-default .navbar-toggle {
          border: none;
      }

      .navbar-default .navbar-toggle:hover,
      .navbar-default .navbar-toggle:focus {
          border-radius: 0;
          background-color: #3079ab;
      }

      .navbar-default .navbar-toggle .icon-bar {
          background-color: #FFF;
      }

      .navbar-default .navbar-nav>.active>a,
      .navbar-default .navbar-nav>.active>a:focus,
      .navbar-default .navbar-nav>.active>a:hover {
          background-color: #3079ab;
          color: #FFFFFF;
      }

      .navbar-default .navbar-nav>li>a {
          color: white;
          background-color: #24262d;
          text-decoration: none;
      }

      .navbar-default .navbar-nav>li>a:hover {
          background-color: #32343c;
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
            color: #848c94;
            border-left: 1px solid #eceded;
            border-right: 1px solid #eceded;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }
        .fontMonster{
          font-family: 'Montserrat', sans-serif;
        }
        .newUpdate{
          border: 2px solid #2ecc71;
          padding:10px 10px;
          color:#2ecc71;
          margin-bottom:20px;
          width:100%;
          border-radius:10px;
        }
        .btnGreen{
          position: relative;
          display: inline-block;
          padding: 10px 29px 10px;
          text-decoration: none;
          border-radius:50px;
          text-align: center;
          font-family: 'Montserrat', sans-serif;
          cursor: pointer;
          color:white;
          text-transform: uppercase;
          background: #3ad483;
          color: white;
          letter-spacing: 0.15px;
          font-size:11px;
          -webkit-transition: background-color 0.2s ease-out;
          -moz-transition: background-color 0.2s ease-out;
          -o-transition: background-color 0.2s ease-out;
          transition: background-color 0.2s ease-out;
        }
        .btnGreen:hover{
          background-color:#2faf6c;
          position: relative;
          display: inline-block;
          padding: 10px 29px 10px;
          text-decoration: none;
          border-radius:50px;
          text-align: center;
          font-family: 'Montserrat', sans-serif;
          cursor: pointer;
          color:white;
          text-transform: uppercase;
          color: white;
          letter-spacing: 0.15px;
          font-size:11px;
          -webkit-transition: background-color 0.2s ease-out;
          -moz-transition: background-color 0.2s ease-out;
          -o-transition: background-color 0.2s ease-out;
          transition: background-color 0.2s ease-out;
        }
        .btnGrey {
        position: relative;
        display: inline-block;
        padding: 10px 29px 10px;
        text-decoration: none;
        border-radius:50px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        cursor: pointer;
        color:white;
        text-transform: uppercase;
        background: #bcbdc1;
        color: white;
        letter-spacing: 0.15px;
        font-size:11px;
        -webkit-transition: background-color 0.2s ease-out;
        -moz-transition: background-color 0.2s ease-out;
        -o-transition: background-color 0.2s ease-out;
        transition: background-color 0.2s ease-out;
      }
      .btnGrey:hover {
        background-color:#bcbdc1;
        color:white !important;
      }
        .btnBlue {
        position: relative;
        display: inline-block;
        padding: 10px 29px 10px;
        text-decoration: none;
        border-radius:50px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        cursor: pointer;
        text-transform: uppercase;
        background: #60acf3;
        color: white !important;
        letter-spacing: 0.15px;
        font-size:11px;
        -webkit-transition: background-color 0.2s ease-out;
        -moz-transition: background-color 0.2s ease-out;
        -o-transition: background-color 0.2s ease-out;
        transition: background-color 0.2s ease-out;
      }
      .btnBlue:hover {
        background-color:#579ee0;
        color:white !important;
        position: relative;
        display: inline-block;
        padding: 10px 29px 10px;
        text-decoration: none;
        border-radius:50px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        cursor: pointer;
        text-transform: uppercase;
        color: white !important;
        letter-spacing: 0.15px;
        font-size:11px;
        -webkit-transition: background-color 0.2s ease-out;
        -moz-transition: background-color 0.2s ease-out;
        -o-transition: background-color 0.2s ease-out;
        transition: background-color 0.2s ease-out;
      }
      a.btnBlue{
        color:#60acf3;
      }
      a.btnBlue:visited{
        color:#60acf3;
      }
      a.btnBlue:hover{
        color:#60acf3;
      }
        .panel-insider{
          background-color:#32343c;
          padding:15px 15px;
          color:#848c94;
          border-radius:12px;
        }
        .panel-body {
            background-color: rgba(68, 70, 79, 0.5);
            color:#848c94;
            padding: 20px;
            border-radius:4px;
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
          color:#949ba2;
          background: #24262d;
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
          color:white !important;
          padding: 0;
          list-style: none;
          background-color: #24262d;
      }

      .sidebar-nav li {
          text-indent: 10px;
          line-height: 40px;
      }

      .sidebar-nav li a {
          display: block;
          text-align: left;
          text-decoration: none;
          color: #949ba2;
      }

      .sidebar-nav li a:active,
      .sidebar-nav li a:focus,
      .sidebar-nav li a:hover {
          text-decoration: none;
          color: #949ba2;
          background: #4A76A8;
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
        background: #3ad483;
        padding: 11px 10px;
        color:white;
        border-radius:7px;
        display:block;
      }
      .btn-dark:hover{
        background-color:#2eaa69;
        color:white;
      }
      .title1{
        font-size:17px !important;
        opacity:1 !important;
        color:white !important;
        font-weight:900 !important;
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
          .btns{
            text-align: center;
          }
          .btnBlue{
            margin-bottom:10px;
          }
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
        border: 1px solid #2d3038;
        background-color:#2d3038;
      }
      .label{
        -webkit-appearance:none;
        color:#949ba2;
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
  .rl-items.rl-background-import .rl-items-item::before {
    background: linear-gradient(to bottom,transparent 0,rgba(227,90,82,.4) 80%);
  }

  .rl-items.rl-background-premium .rl-items-item::before {
    background: linear-gradient(to bottom,transparent 0,rgba(107,241,174,.4) 80%);
  }

  .rl-items.rl-background-rare .rl-items-item::before {
    background: linear-gradient(to bottom,transparent 0,rgba(116,151,235,.4) 80%);
  }

  .rl-items.rl-background-very-rare .rl-items-item::before {
    background: linear-gradient(to bottom,transparent 0,rgba(158,124,252,.4) 80%);
  }

  .rl-items.rl-background-limited .rl-items-item::before {
    background: linear-gradient(to bottom,transparent 0,rgba(247,121,57,.4) 80%);
  }

  .rl-items.rl-background-black-market .rl-items-item::before {
    background: linear-gradient(to bottom,transparent 0,rgba(255,0,255,.4) 80%);
  }

  .rl-items.rl-background-exotic .rl-items-item::before {
    background: linear-gradient(to bottom,transparent 0,rgba(236,219,108,.4) 80%);
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
    height: 280px;
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

  .rl-items-item img {
    width: 134px;
    border-radius: 20%;
    margin: 20px auto 0;
    transition: all .2s ease-in-out;
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
    <div id="page-content-wrapper">
        <div class="container">
            <script>
                    (adsbygoogle = window.adsbygoogle || []).push({
                      google_ad_client: "ca-pub-3070420145299092",
                      enable_page_level_ads: true
                    });
            </script>
