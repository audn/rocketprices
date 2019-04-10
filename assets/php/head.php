<meta name="verifyownership"
 content="36c37b14942f17c863e008a8d3a6aa95"/>
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
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".quickNav").toggleClass("toggled");
    });
    function snackbar() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<script type="text/javascript">
    if ( !document.getElementById('test-block') ) {
        document.getElementById('adblock').style.display='block';
    }
</script>
<script src="../js/ads.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=0,maximum-scale=1.0,initial-scale=1">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-TXfwrfuHVznxCssTxWoPZjhcss/hp38gEOH8UPZG/JcXonvBQ6SlsIF49wUzsGno" crossorigin="anonymous">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=69P4EnAJeN">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=69P4EnAJeN">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=69P4EnAJeN">
<link rel="manifest" href="/site.webmanifest?v=69P4EnAJeN">
<link rel="mask-icon" href="/safari-pinned-tab.svg?v=69P4EnAJeN" color="#5bbad5">
<link rel="shortcut icon" href="/favicon.ico?v=69P4EnAJeN">
<meta name="apple-mobile-web-app-title" content="Rocketprices">
<meta name="application-name" content="Rocketprices">
<meta name="msapplication-TileColor" content="#1798e5">
<meta name="theme-color" content="#1b99e0">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<!--
REMEMBER TO RENAME THE LOCATION WHEN MAKING PUBLIC
-->
<script src="assets/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="https://rocketprices.net/assets/css/styles.css">
<!--
REMEMBER TO RENAME THE LOCATION WHEN MAKING PUBLIC
-->
<meta name= viewport content="width=device-width initial-scale=1">
<link type="text/plain" rel="author" href="http://domain/humans.txt" />
<meta property="og:keywords" name="keywords" content="value, rocketleaguevalues, rocket laegue value, rocket league, rocket league prices, rocketleague prices, rltprices, rlprices, rl, rleague, trading, rltrading, rocketleague trading">
<meta property="og:type" content="guides">
<meta property="og:description" content="Rocket League prices guide for PS4 and PC pricelist. The most updated one, always up to date with the new items; no sign-in required! ">
<meta property="og:locale" content="en_GB">
<meta property="og:image" content="https://i.imgur.com/Kr1OZxJ.png">
<meta property="og:url" content="https://rocketprices.net">
<div id="snackbar" data-cms-node="5713">This feature is currently disabled.</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!--
<a href="https://goo.gl/forms/hTKZkQ9ZJk4kIerH3" class="feedback" target="_blank">
  Give feedback
</a>
-->
<a href="/v2/ps4" class="quickNav" id="ps4"><i class="fas fa-gamepad"></i></a>
<a href="/v2/xbox" class="quickNav" id="xbox"><i class="fab fa-xbox"></i></a>
<a href="/v2/pc" class="quickNav" id="pc"><i class="fas fa-desktop"></i></a>
<script>
// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});


    $(function(){
    var current = location.pathname;
    console.log(current);
    $('ul li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href') == current){

            $this.addClass('active');

        }
    })
})

    $(window).resize(function(){
        var parentwidth = $(".content").width();
        $(".phoneHeader").width(parentwidth+10);
    });

     var colors = ["rl-items-item-rare", "rl-items-item-exotic", "rl-items-item-limited", "rl-items-item-very-rare","rl-items-item-import","rl-items-item-black-market"];
     var type = ["boost", "beta", "crates", "trail","explosion","black_market", "cars", "rlcs", "wheels", "none"];

     var multiFilter = [];
     $(document).ready(function(){
        //Fikser viewport issues her

        var parentwidth = $(".content").width();
        $(".phoneHeader").width(parentwidth+10);


        //SLUTT



    $(".greyBox").click(function(){
        if($(this).hasClass("activeBox")){
            $(this).removeClass("activeBox");
            var index = multiFilter.indexOf($(this).data("type"));
            if (index > -1) {
              multiFilter.splice(index, 1);
            }
        }else{
            $(this).addClass("activeBox");
            multiFilter.push($(this).data("type"));
        }

        $(".rl-list").show();
			//new code
			var selected = $("#filter option:selected").val();
			console.log(selected);
			$.each(colors, function(index, obj){
				if(selected === "" || selected === undefined){
					return false;
				}

				if(obj !== selected){
					$("."+obj).closest(".rl-list").hide();
				}

			});

			$.each(type, function(index, obj){
				if(multiFilter.length == 0){
					return false;
				}

				if(!multiFilter.includes(obj)){
					$("."+obj).closest(".rl-list").hide();
				}

			});

    });

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
			/*var selected1 = $("#filter1 option:selected").val();
			$.each(type, function(index, obj){
				if(selected1 === ""){
					return false;
				}

				if(obj !== selected1){
					$("."+obj).closest(".rl-list").hide();
				}

			});*/




       });


                   $(".search").on("input", function(){
           var search = $(this).val();
           $(".rl-list h2").each(function(){
               if($(this).text().toLowerCase().indexOf(search.toLowerCase()) !== -1 ){
                   $(this).closest(".rl-list").show();
               }else{
                   $(this).closest(".rl-list").hide();
               }
           });

       });

		if(window.location.hash !== ""){
		   $(".search").val(decodeURIComponent(window.location.hash.slice(1)));
		   $(".search").trigger("input");
	   }
     });

	 $(window).on("hashchange", function(){
		 if(window.location.hash !== ""){
			$(".search").val(decodeURIComponent(window.location.hash.slice(1)));
			$(".search").trigger("input");

		 }else{
			$(".rl-list").show();
		 }
	 });

</script>
