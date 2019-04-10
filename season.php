<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan&amp;subset=arabic,latin-ext,vietnamese" rel="stylesheet">

    <title>Season 10 Countdown!</title>
    <?php require_once ('assets/php/head.php');?>
    <style>
    .active{border-left:3px solid #e67e22;}
    li {
      display: inline-block;
      list-style-type: none;
      padding: 1em;
      color:#989898;
      text-transform: uppercase;
    }

    li span {
      display: block;
      font-size: 1.5rem;
      color:#3c454b;
    }
    ul {
    margin-top: 50px;
    list-style-type: none;
    padding: 0;
        width: 100% !important;
    padding: 5px;
    background-color: transparent;
}
  .btn-new-green{
    background-color: #6fd874;
    border-radius: 15px;
    padding: 0px 50px;
    transition: all 0.2s ease;
    line-height: 61px;
    font-family: 'Baloo Bhaijaan', cursive;
    color:white !important;
    border-bottom: 5px solid rgba(0, 0, 0, 0.15);
  }
  .lightpill_blue{
    color: #1798e5;
    background-color: rgb(23, 152, 229, 0.16);
    padding: 10px 20px;
    border-radius: 1px;
    border-radius: 15px;
    font-size: .75em;
    display: inline-block;
  }
  .lightpill_blue_phonehead {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.16);
    padding: 10px 20px;
    border-radius: 1px;
    border-radius: 15px;
    font-size: .75em;
    display: inline-block;
}
  .btn-new-green:active{
    border-bottom: 0px solid rgba(0, 0, 0, 0.15);
   transform: translateY(5px);
  }
  .btn-new-green:hover{
    background-color: #53a257;
  }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="content column">
        <div class="phoneHeader">
        <a href="/" class="lightpill_blue_phonehead"><i class="fas fa-arrow-alt-left"></i> back to main menu</a>
        </div>
        <div class="phoneHeaderSpace"></div>
        <a href="/" class="lightpill_blue desktop"><i class="fas fa-arrow-alt-left"></i> back to main menu</a>
        <h1>Bye Season 9, Hi Season 10!</h1>
          <p>
            <div class="container">
          <ul>
            <li><span id="dasys">Good luck in Season 10!</span></li>
          </ul>
        </div>
            <br>
            <div class="text">
            Find people to play with in Season 10 in our Discord server!
            <p>
              <!-- https://discord.gg/F6XmHVF -->
               <a class="btn-new-green" href="https://discord.gg/F6XmHV" style="display:inline-block;"> Join Discord! <i style="margin-left:15px;"class="fas fa-arrow-alt-right"></i></a>
          </div>
      </div>
    </div>
  </body>
</html>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Feb 19, 2019 17:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);



    }, second)
</script>
