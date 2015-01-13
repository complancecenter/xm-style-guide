<nav class="main-nav">
  <ul class="nav">
    <li <? if ( $active == "home" ) { echo 'class="active"'; } ?> class="home"><a href="#"><i class="fa fa-home"></i></a></li>
    <li <? if ( $active == "products" ) { echo 'class="active"'; } ?>><a href="#">Products&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a></li>
    <li <? if ( $active == "training" ) { echo 'class="active"'; } ?>><a href="#">Training&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a></li>
    <li <? if ( $active == "services" ) { echo 'class="active"'; } ?>><a href="#">Services&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a></li>
    <li <? if ( $active == "about" ) { echo 'class="active"'; } ?>style="float: right;"><a href="#">About Us</a></li>
  </ul>
</nav>