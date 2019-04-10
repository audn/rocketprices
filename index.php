<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title>Rocketprices</title>
    <?php require_once ('assets/php/head.php');?>
    <style>
    .active{border-left:3px solid #00ff6c;}
    </style>
  </head>
  <body>
    <div class="container">
        <?php require_once ('assets/php/sidebar.php'); ?>
      <div class="content column">
        <div class="phoneHeader">
          <button type="button" class="navbar-toggle marginPhone">
            <span class="icon-bar"></span>
            <span class="icon-barMiddle"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="phoneHeaderSpace"></div>
        <h1>News and updates</h1>
        <h4>Last: Nothing at the moment.</h2>
          <p>
            <style>
            .news-box {margin-right: 20px;float: left;}
            .two{
              background-position: -75px -41px;
            background-image: url("https://rocketprices.net/assets/images/two.png");
            background-repeat: no-repeat;
            background-size: 547px 286px;
            border-top-left-radius: .5em;
            width: 100%!important;
            border-top-right-radius: .5em;
            }
        </style>
        <a href="/news/season-9-ending" class="ignoreahref">
        <div class="news-box">
          <div class="news two"></div>
            <div class="text" style="display:Block;">
              <span id="datetime">February 19</span>
              <img src="https://i.imgur.com/kbbtD8t.png" class="span_1 column" id="pb-audn"/>
              <div class="news-name" class="span_2 column">Season 10!</div>
              <div class="news-date" class="span_2 column">Posted by audn</div>
            </div>
          </div>
        </a>
            <a href="/news/discord-channel" class="ignoreahref">
            <div class="news-box">
              <div class="news three"></div>
                <div class="text" style="display:Block;">
                  <span id="datetime">January 10</span>
                  <img src="https://i.imgur.com/kbbtD8t.png" class="span_1 column" id="pb-audn"/>
                  <div class="news-name" class="span_2 column">Discord channel!</div>
                  <div class="news-date" class="span_2 column">Posted by audn</div>
                </div>
              </div>
            </a>
            <a href="/news/launching-rocketprices-v3" class="ignoreahref">
            <div class="news-box">
              <div class="news four"></div>
                <div class="text" style="display:Block;">
                  <span id="datetime">20th August</span>
                  <img src="https://i.imgur.com/kbbtD8t.png" class="span_1 column" id="pb-audn"/>
                  <div class="news-name" class="span_2 column">Introducing RP v3!</div>
                  <div class="news-date" class="span_2 column">Posted by audn</div>
                </div>
              </div>
            </a>
          <!-- Animated car
            <div class="wrap">
    <div class="bg">
    </div>
      <div class="car">
        <div class="boost"></div>
      <div class="body">
    <svg width="338" height="132" viewBox="0 0 338 132" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M1.172 95.432c3.8-3.553 23.674-16.102 39.533-21.782C51.99 69.61 57.65 70.574 71.533 66c6.117-2.015 19.215-14.33 35.254-22.533 19.646-10.048 42.92-16.083 53.495-16.086.584 0 2.075-3.9 4.63-2.372 1.2.717 15.173-1.062 16.633 0 4.384 3.19-8.39 8.62-8.39 8.62s19.42 13.247 20.247 13.038c15.965-4.036 51.22-.042 64.952-5.496 13.715-5.448 18.44-13.79 21.97-22.3.42-1.016-11.828.888-10.685 0 .975-.76-1.018-4.432 0-5.196C289.793-1.466 327.533.204 327.533.204S320.34 10.695 320 18.87c-.094 2.25-27.713-1.69-27.713 0s-9.12 16.29-14.394 22.3c-.916 1.042 12.567 4.705 14.394 10.09.613 1.806 4.096 8.474 0 8.474s-63.45 30.05-63.45 30.05h-10.353s-28.876 39.29-33.355 40.327c-12.83 2.97-15.306 0-24.848 0-3.568 0-50.494-23.71-76.07-22.426-7.173.36-14.984 4.607-21.3 6.146-31.4 7.653-54.324 0-54.324 0S-2.627 98.984 1.172 95.432z" id="a"/>
      <path d="M1.172 95.432c3.8-3.553 23.674-16.102 39.533-21.782C51.99 69.61 57.65 70.574 71.533 66c6.117-2.015 19.215-14.33 35.254-22.533 19.646-10.048 42.92-16.083 53.495-16.086.584 0 2.075-3.9 4.63-2.372 1.2.717 15.173-1.062 16.633 0 4.384 3.19-8.39 8.62-8.39 8.62s19.42 13.247 20.247 13.038c15.965-4.036 51.22-.042 64.952-5.496 13.715-5.448 18.44-13.79 21.97-22.3.42-1.016-11.828.888-10.685 0 .975-.76-1.018-4.432 0-5.196C289.793-1.466 327.533.204 327.533.204S320.34 10.695 320 18.87c-.094 2.25-27.713-1.69-27.713 0s-9.12 16.29-14.394 22.3c-.916 1.042 12.567 4.705 14.394 10.09.613 1.806 4.096 8.474 0 8.474s-63.45 30.05-63.45 30.05h-10.353s-28.876 39.29-33.355 40.327c-12.83 2.97-15.306 0-24.848 0-3.568 0-50.494-23.71-76.07-22.426-7.173.36-14.984 4.607-21.3 6.146-31.4 7.653-54.324 0-54.324 0S-2.627 98.984 1.172 95.432z" id="b"/><linearGradient x1="63.79%" y1="93.911%" x2="13.235%" y2="50%" id="d"><stop stop-opacity="0" offset="0%"/><stop stop-color="#0E0E0E" stop-opacity=".231" offset="82.919%"/><stop stop-color="#3F3F3F" offset="100%"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><path d="M198 64l109.916 1.96L305 102.046h-58.734s-2.696 8.25-6.354 9.603c-3.658 1.35-47.276 1.35-47.276 1.35L198 64zM176 31h25.188V20.214l17.63 1.998V31h26.28l34.314 19.977s-50.788 6.126-67.475 6.126C199.957 57.103 176 53 176 53V31z" fill="#ACABAB"/><path d="M192 7s24.275.48 31.888 4.287C231.5 15.094 226 24 226 24h-31.12L192 7z" fill="#BBB"/><path d="M.54 96.787c-.394-5.308 7.544-10.2 7.544-10.2s6.156-4.313 7.484-3.822c.995.368 2.493 3.585 2.493 3.585S7.475 91.755 6.623 95.823c-.852 4.068 7.314 21.924 10.06 24.174.85.694 4.902-3.365 6.233-3 4.626 1.273 8.147 3.73 8.147 3.73l-17.816 7.472S1.236 106.23.54 96.786z" fill="#C9C9C9"/><g transform="translate(10)"><mask id="c" fill="#fff"><use xlink:href="#b"/></mask><use fill="#3875BC" xlink:href="#b"/><path d="M-9 0s118.382 6.734 174.074 15.48c32.787 5.15 91.363 26.207 91.363 26.207l-259.68 56.73L-9 0z" fill="#FFF" opacity=".179" mask="url(#c)"/></g><path d="M127.426 43.343c22.99-10.943 37.973-9.89 37.973-9.89l25.565 20.04s-71.683 15.208-84.358 18.46c-12.674 3.252-14.935-1.633-18.54-3.706-1.212-.698 16.368-13.962 39.36-24.904z" fill="#3F3F3F"/><path d="M41.68 75c7.012-1.53 28.2-1.934 45.87 4.18 18.767 6.49 33.848 19.574 33.848 19.574s-1.42 2.5-3.897 1.69c-11.233-3.67-34.464-15.596-60.857-15.596-21.312 0-26.857 8.326-26.857 8.326S14.18 81 41.68 75z" fill="#3268A7"/><path d="M182.738 71.454l-6.416-5.14 112.094-24.648s4.734 2.085 8.95 5.105c3.895 2.792 7.35 6.493 6.155 7.47-11.143 9.11-56.01 20.86-56.01 20.86s-1.178 1.12-1.725 1.655c-1.24 1.214 0 6.677 0 6.677s-22.834 1.516-25.147 2.72c-5.338 2.78-15.843 3.228-15.843 3.228l10.512 8.577s-29.16 4.626-57.798 2.716c-28.64-1.91-51.683-14.52-51.683-14.52l76.91-14.7z" fill="#50C1E3"/><path d="M220.318 96.943C214.584 95.343 209 88.96 209 88.96s12.863-15.33 43.616-24.32c30.753-8.992 41.177-9.9 51.165-9.9 9.99 0 4.508 11.883 4.508 11.883s-22.698 2.047-42.754 10.02c-20.056 7.97-29.475 20.3-29.475 20.3s-10.007 1.6-15.742 0z" fill="#3268A7"/><path d="M134.938 107.123s-.554-9.266 22.308-18.906C180.108 78.577 204 78 204 78s7.48 18.038 0 29.123-31.15 17.043-31.15 17.043l-37.912-17.043z" fill="url(#d)" transform="translate(-2)"/><path d="M305.118 60.5c-.878-4.427-3.7-10.064-3.7-10.064s5.22.284 6.815 2.04c1.597 1.754 2.34 5.488 2.34 8.024 0 3.13-1.573 9.607-1.573 9.607h-2.384s-.62-5.18-1.498-9.607z" fill="#FF6E00"/></g></svg>
      </div>
      <div class="wheel wheel1"></div>
      <div class="wheel wheel2"></div>
    </div>
    </div>
      -->
      </div>
    </div>
  </body>
</html>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
