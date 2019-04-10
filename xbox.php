<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$m = new MongoDB\Driver\Manager("mongodb://hrrs01:secretshit123@ds139992.mlab.com:39992/rocketprices"); // connect
$q = new MongoDB\Driver\Query(array("Platform" => "Xbox"));
$cursor = $m->executeQuery("rocketprices.items", $q);

?>
<head>
    <title>Xbox > Rocketprices</title>
    <?php require_once ('assets/php/head.php');?>
    <style>
    .active{border-left:3px solid #1798e5;}.phoneHeaderSpace{margin-bottom:140px;}
    </style>
  </head>
  <body class="editable" id="untitled-region-2">
    <div class="container">
        <?php require_once ('assets/php/sidebar.php'); ?>
      <div class="content column">
        <div class="phoneHeader">
          <div class="headerFilter" onclick="snackbar()">
            <i class="fas fa-tasks"></i>
          </div>
          <button type="button" class="navbar-toggle marginPhone">
            <span class="icon-bar"></span>
            <span class="icon-barMiddle"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="phoneHeaderSearch">
          <input class="search search-phone phone filter" placeholder="&#xf002; try searching.." type="text" style="color:white;">
        </div>
      </div>
        <div class="phoneHeaderSpace"></div>
          <?php require_once ('assets/partners/aoeah.php');?>
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <p>
        <div class="text1 bluetext phone">/xbox</div>
          <p>
          <?php require_once ('assets/php/filter.php');?>
          <p>
  <?php
  
    foreach($cursor->toArray() as $obj){
        foreach($obj->Items as $item){
  ?>
            <div class="col-md-20 col-sm-3 col-xs-12 rl-list" style="display: block;">
  <div class="<?php echo join(" ",$item->Classes); ?>">
  <div class="rl-items-item no-blur"><?php echo $item->Paint; ?><img src="<?php echo $item->Image; ?>">
  <h2><?php echo $item->Name; ?></h2>
  <h3 id="untitled-region-1" class="item-price <?php echo strtolower($item->Rarity); ?>"><?php echo $item->Price; ?>&nbsp;<i class="fa fa-key"></i></h3>
  <div class="rl-items-item-<?php $x=$item->Classes[count($item->Classes)-2];$x=explode("-",$x); echo strtolower(end($x)); ?>"><?php echo $item->Rarity; ?></div>
  </div>
  </div>
  </div>
  <?php
        
        }
        foreach($obj->Painted as $paint){
            
?>
<div id="<?php echo $paint->ID; ?>" class="modal fade" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<div class="close" data-dismiss="modal">x</div>
<h4 class="modal-title"><img class="logopng" src="dist/img/logo.png"> <?php echo ucfirst($paint->ID); ?> painted</h4>
</div>
<div class="modal-body">
<table border="0">
<tbody>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">BLACK:</td>
<td id="untitled-region-1817" style="width: 100px;">
<p><?php echo $paint->Values[2]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">WHITE:</td>
<td id="untitled-region-1818" style="width: 100px;">
<p><?php echo $paint->Values[5]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">GREY:</td>
<td id="untitled-region-11849" style="width: 100px;">
<p><?php echo $paint->Values[8]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">CRIMSON:</td>
<td id="untitled-region-1190" style="width: 100px;">
<p><?php echo $paint->Values[11]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">PINK:</td>
<td id="untitled-region-1911" style="width: 100px;">
<p><?php echo $paint->Values[14]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">COBALT:</td>
<td id="untitled-region-1192" style="width: 100px;">
<p><?php echo $paint->Values[17]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">SKY BLUE:</td>
<td id="untitled-region-1913" style="width: 100px;">
<p><?php echo $paint->Values[20]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">BURNT SIENNA:</td>
<td id="untitled-region-1194" style="width: 100px;">
<p><?php echo $paint->Values[23]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">SAFFRON:</td>
<td id="untitled-region-1195" style="width: 100px;">
<p><?php echo $paint->Values[26]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">LIME:</td>
<td id="untitled-region-1196" style="width: 100px;">
<p><?php echo $paint->Values[29]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">FOREST GREEN:</td>
<td id="untitled-region-1917" style="width: 100px;">
<p><?php echo $paint->Values[32]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">ORANGE:</td>
<td id="untitled-region-1918" style="width: 100px;">
<p><?php echo $paint->Values[35]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
<tr>
<td style="width: 20px;">&nbsp;</td>
<td style="width: 150px;">PURPLE:</td>
<td id="untitled-region-1199" style="width: 100px;">
<p><?php echo $paint->Values[38]; ?>&nbsp;<i class="fa fa-key"></i></p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="modal-footer">&nbsp;</div>
</div>
</div>
</div>
<?php


    }}

?>

           
      </div>
    </div>
  </body>
</html>
<script>
    $("button").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".icon-barMiddle").toggleClass("lineToggled");
        $(".quickNav").toggleClass("toggled");
    });
</script>
