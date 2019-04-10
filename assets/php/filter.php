    <head>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
    </head>
    <script>
      $(function() {
      $('#filter').select2({
        placeholder: "Select between rarity",
        selectOnClose: true
      });
    });
    </script>
    <div class="panel panel-default col-xs-12" data-cms-node="5724">
          <input class="field desktop search filter" id="search" placeholder="&#xf002; try searching.." type="text">

          <p data-cms-node="5725">

          <div class="desktop" data-cms-node="5726">
            <!--<select id="filter" style="min-width:300px;">
            <option></option>
            <option class="selectionValue" value="reset">
                None
            </option>
            <option class="selectionValue" value="rl-items-item-rare">
                Rare
            </option>
            <option class="selectionValue" value="rl-items-item-exotic">
                Exotic
            </option>
            <option class="selectionValue" value="rl-items-item-import">
                Import
            </option>
            <option class="selectionValue" value="rl-items-item-limited">
                Limited
            </option>
            <option class="selectionValue" value="rl-items-item-very-rare">
                Very Rare
            </option>
            <option class="selectionValue" value="rl-items-item-black-market">
                Black Market
            </option>
            </select>-->
          </div>
          <p data-cms-node="5727">

    <p class="phone" data-cms-node="5728">
    <div class="phoneScroll phone" data-cms-node="5729">
      <div class="greyBox" data-type="cars" data-cms-node="5730">
        <i class="color1 fas fa-truck" data-cms-node="5731"></i> Cars
      </div>
      <div class="greyBox" data-type="boost" data-cms-node="5732">
       <i class="color2 fas fa-shipping-fast" data-cms-node="5733"></i> Boost
      </div>
      <div class="greyBox" data-type="beta" data-cms-node="5734">
        <i class="color3 fas fa-flask" data-cms-node="5735"></i> Beta Items
      </div>
      <div class="greyBox" data-type="crates" data-cms-node="5736">
       <i class="color4 color1 fas fa-box" data-cms-node="5737"></i> Crates
      </div>
      <div class="greyBox" data-type="trail" data-cms-node="5738">
        <i class="color5 fas fa-traffic-cone" data-cms-node="5739"></i> Trails
      </div>
      <div class="greyBox" data-type="explosion" data-cms-node="5740">
       <i class="color6 fas fa-bomb" data-cms-node="5741"></i> Goal Explosions
      </div>
      <div class="greyBox" data-type="mystery" data-cms-node="5742">
       <i class="color7 fas fa-star" data-cms-node="5743"></i> Mystery
      </div>
      <div class="greyBox" data-type="rlcs" data-cms-node="5744">
        <i class="color8 fab fa-twitch" data-cms-node="5745"></i> RLCS
      </div>
      <div class="greyBox" data-type="wheels" data-cms-node="5746">
       <i class="color9 fas fa-tire" data-cms-node="5747"></i> Wheels
      </div>
    </div>
<p class="phone" data-cms-node="5748">
  <br class="phone">
    <!--
    skille mellom phone og desktop
    desktop under
  -->

  <div class="filterBox desktop" data-cms-node="5749">
  <div class="greyBox" data-type="cars" data-cms-node="5750">
    <i class="color1 fas fa-truck" data-cms-node="5751"></i> Cars
  </div>
  <div class="greyBox" data-type="boost" data-cms-node="5752">
   <i class="color2 fas fa-shipping-fast" data-cms-node="5753"></i> Boost
  </div>
  <div class="greyBox" data-type="beta" data-cms-node="5754">
    <i class="color3 fas fa-flask" data-cms-node="5755"></i> Beta Items
  </div>
  <div class="greyBox" data-type="crates" data-cms-node="5756">
   <i class="color4 color1 fas fa-box" data-cms-node="5757"></i> Crates
  </div>
  <div class="greyBox" data-type="trail" data-cms-node="5758">
    <i class="color5 fas fa-traffic-cone" data-cms-node="5759"></i> Trails
  </div>
  <div class="greyBox" data-type="explosion" data-cms-node="5760">
   <i class="color6 fas fa-bomb" data-cms-node="5761"></i> Goal Explosions
  </div>
  <div class="greyBox" data-type="mystery" data-cms-node="5762">
   <i class="color7 fas fa-star" data-cms-node="5763"></i> Mystery
  </div>
  <div class="greyBox" data-type="rlcs" data-cms-node="5764">
    <i class="color8 fab fa-twitch" data-cms-node="5765"></i> RLCS
  </div>
  <div class="greyBox" data-type="wheels" data-cms-node="5766">
   <i class="color9 fas fa-tire" data-cms-node="5767"></i> Wheels
  </div>
  </div>
<p data-cms-node="5768">
  <style>
  .color1{
    color:#6ab04c;
  }
  .color2{
    color:#ff7979;
  }
  .color3{
    color:#ffbe76;
  }
  .color4{
    color:#22a6b3;
  }
  .color5{
    color:#e17055;
  }
  .color6{
    color:#ff7675;
  }
  .color7{
    color:#fdcb6e;
  }
  .color8{
    color:#a29bfe;
  }
  .color9{
    color:#a29bfe;
  }
  </style>
  <!--
<div class="select select-type-box">
    <select id="filter1">
        <optgroup label="What kind of item?">
            <option value="" selected="">
                None
            </option>
            i
            <option value="boost">
                Boost
            </option>
            <option value="beta">
                Beta items
            </option>
            <option value="crates">
                Crates
            </option>
            <option value="trail">
                Trails
            </option>
            <option value="explosion">
                Goal explosions
            </option>
            <option value="black_market">
                Mystery
            </option>
            <option value="rlcs">
                RLCS
            </option>
            <option value="wheels">
                Wheels
            </option>
        </optgroup>

    </select>
</div>
-->
<p class="desktop" style="margin-bottom:100px;" data-cms-node="5769">
<style>
    input { font-family: 'FontAwesome', 'Muli', sans-serif;; } /* This is for the placeholder */
</style>

<br>
<!--
<div class="col-sm-6" style="padding:0;">
    <a href="" class="refresh btn-dark link-normal" onclick=""><i class="fa fa-filter" aria-hidden="true"></i> Clear filters</a>
</div>
-->
</div>
