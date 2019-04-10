<script type="text/javascript" src="dist/js/main.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(".lightpill-hidden").click(function() {
  $('header').toggleClass("header-alt");
  $('.pot-nav').toggleClass("pot-nav-alt");
  $('.lightpill').toggleClass("lightpill-alt");
  $('.btn-blue1').toggleClass("btn-blue1-alt");
  $('.discord-widget').toggleClass("discord-widget-alt");
});
$(document).ready(function(){
  $("#report-click").click(function(){
    $("#form-see").fadeToggle();
    $("#form-see-nb").fadeToggle();
  });
});
    /* forms for /bugs*/
$(document).ready(function(){
  $("#bug-form").click(function(){
    $("#bug-see").fadeToggle();
    $("#bug-note").fadeToggle();
  });
});
$(document).ready(function(){
  $("#prices-form").click(function(){
    $("#prices-see").fadeToggle();
    $("#prices-note").fadeToggle();
  });
});
$(document).ready(function(){
  $("#other-form").click(function(){
    $("#other-see").fadeToggle();
    $("#other-note").fadeToggle();
  });
});

$(document).ready(function(){


    $("h1").delay("1000").fadeIn();


    // hide #back-top first
    $("#back-top").hide();


    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();

            }
        });


        // scroll body to 0px on click
        $('a#back-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });


});
</script>
