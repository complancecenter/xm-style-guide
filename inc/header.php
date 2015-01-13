<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ICC Website Style Guide</title>
  <!-- CALL STYLESHEET -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- CALL CUSTOM TYPOGRAPHY -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6579332/617026/css/fonts.css" />
  <!-- CALL FONTAWESOME -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- CALL JQUERY -->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
</head>

<body>
<? include_once("top-bar.php") ?>
<div class="content">



<div class="welcome-notice">
  <div class="welcome name">Welcome Eric Frisino</div>
  <div class="welcome info">TRUI001 (switch customer)</div>
</div>

<div class="branding">
  <div class="col3-1 logo"><img src="img/header-logo.png" /></div>

  <div class="col3-1 search">
    <div class="form-search">
      Search Entire Store Here...
    </div>
  </div>

  <div class="col3-1 cart">
    <p class="right">
      <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;Cart (0)&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i><br />
      <a href="#">Log Out</a> | <a href="#">Admin</a> | <a href="#">Account</a>
    </p>
  </div>
</div>
<div class="clear"></div>
<?  if ( $page != "home" ) { 
      include_once("small-nav.php");
    } else { 
      include_once("nav-full.php"); } ?>