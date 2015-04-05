<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ByteMe</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- tabs -->
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#tabcontainer").tabs({
        event: "click"
    });
});
</script>
<!-- / tabs -->
<script type="text/javascript" src="layout/scripts/jquery-photostack.js"></script>
<!-- coinslider -->
<script type="text/javascript" src="layout/scripts/jquery-coin-slider.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#portfolioslider').coinslider({
        width: 480,
        height: 280,
        navigation: false,
        links: false,
        hoverPause: true
    });
});
</script>
<!-- / coinslider -->
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="Byteme_index.php">ByteMe</a></h1>
      <p>Stuff</p>
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="topbar" class="clear">
    <ul id="topnav">
      <li class="active"><a href="Byteme_index.php">Home</a></li>
      <li><a href="">Group Members</a></li>
      <li><a href="">Page of things</a></li>
      <li><a href="#">Another</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </li>
      <li><a href="">Another</a></li>
      <li class="last"><a href="">Another</a></li>
    </ul>
    <form action="#" method="post" id="search">
      <fieldset>
        <legend>Site Search</legend>
        <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
        <input type="image" id="go" src="layout/images/search.gif" alt="Search" />
      </fieldset>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <div id="slider">
      <ul id="categories">
        <li class="category">
          <h2>Featured One</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
        <li class="category">
          <h2>Featured Two</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
        <li class="category">
          <h2>Featured Three</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
        <li class="category">
          <h2>Featured Four</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
        <li class="category">
          <h2>Featured Five</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
        <li class="category">
          <h2>Featured Six</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
        <li class="category">
          <h2>Featured Seven</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
        <li class="category">
          <h2>Featured Eight</h2>
          <a href="#"><img src="images/demo/150x110.gif" alt="" /></a>
          <p>Text Goes here</p>
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </li>
      </ul>
      <a class="prev disabled"></a> <a class="next disabled"></a>
      <div style="clear:both"></div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="tabcontainer">
      <ul id="tabnav">
        <li><a href="#tabs-1">Our Services</a></li>
        <li><a href="#tabs-2">Latest Apps</a>
        </li><li><a href="#tabs-3">SlideShow plus info</a></li>
        <li><a href="#tabs-4">One Column Content</a></li>
        <li><a href="#tabs-5">Two Column Content</a></li>
      </ul>
      <div id="tabs-1" class="tabcontainer">
        <div id="hpage_services" class="clear">
          <div class="block"><img src="images/demo/46x46.gif" alt="" /><strong>You can become a user!</strong>
            <p>Sign up now</p>
          </div>
          <div class="block"><img src="images/demo/46x46.gif" alt="" /><strong>Submit Some apps!</strong>
            <p>This is how its gonna be!</p>
          </div>
          <div class="block last"><img src="images/demo/46x46.gif" alt="" /><strong>Forum Admins needed!</strong>
            <p>Heres How!</p>
          </div>
          <div class="spacer">&nbsp;</div>
          <div class="block"><img src="images/demo/46x46.gif" alt="" /><strong>More things</strong>
            <p>And Stuff</p>
          </div>
          <div class="block"><img src="images/demo/46x46.gif" alt="" /><strong>Woo Hoo</strong>
            <p>...and some more</p>
          </div>
          <div class="block last"><img src="images/demo/46x46.gif" alt="" /><strong>Six for my OCD</strong>
            <p>Hope we can fill them all.</p>
          </div>
        </div>
      </div>
      <!-- ########### -->
      <div id="tabs-2" class="tabcontainer">
        <h2 class="title">The Latest Apps</h2>
        <ul class="line clear">
          <li>
            <div class="imgholder"><a href="#"><img src="images/demo/280x160.gif" alt="" /></a></div>
            <p class="name">Almost App Number Two            </p>
            <p class="readmore"><a href="#">View This APP &raquo;</a></p>
          </li>
          <li>
            <div class="imgholder"><a href="#"><img src="images/demo/280x160.gif" alt="" /></a></div>
            <p class="name">Almost App Number One</p>
            <p class="readmore"><a href="#">View This APP &raquo;</a></p>
          </li>
          <li class="last">
            <div class="imgholder"><a href="#"><img src="images/demo/280x160.gif" alt="" /></a></div>
            <p class="name">Almost App Number Three</p>
            <p class="readmore"><a href="#">View This APP &raquo;</a></p>
          </li>
        </ul>
      </div>
      <!-- ########### -->
      <div id="tabs-3" class="tabcontainer">
        <div id="hpage_portfolio" class="clear">
          <div class="fl_left">
            <div id="portfolioslider">
              <ul>
                <li><img src="images/demo/portfolioslider/1.gif" alt="" /></li>
                <li><img src="images/demo/portfolioslider/2.gif" alt="" /></li>
                <li><img src="images/demo/portfolioslider/3.gif" alt="" /></li>
                <li><img src="images/demo/portfolioslider/4.gif" alt="" /></li>
                <li><img src="images/demo/portfolioslider/5.gif" alt="" /></li>
              </ul>
            </div>
          </div>
          <div class="fl_right">
            <h2>TITLE Goes Here</h2>
            <p>BLANK</p>
            <ul>
              <li>BLANK</li>
              <li>BLANK</li>
            </ul>
            <p>&nbsp;</p>
            <p>BLANK</p>
            <p class="readmore"><a href="#">View The Full Project &raquo;</a></p>
          </div>
        </div>
      </div>
      <!-- ########### -->
      <div id="tabs-4" class="tabcontainer">
        <h2>One Column Content</h2>
        <p>This text will span the entire page...dunno if we will need it.</p>
      </div>
      <!-- ########### -->
      <div id="tabs-5" class="tabcontainer">
        <div id="content">
          <h1>Two Column Content</h1>
          <img class="imgr" src="images/demo/imgr.gif" alt="" width="125" height="125" />
          <p>There is supposed to be a good explanation of our project here... Who wants it?</p>
          <p>...</p>
          <p>...</p>
          <p>... <img class="imgl" src="images/demo/imgl.gif" alt="" width="125" height="125" />          </p>
          <p>....</p>
          <p>.........</p>
          <p>..................</p>
        </div>
        <div id="column">
          <div id="featured">
            <ul>
              <li>Looks good in this format. Do we even need it?
                <p class="imgholder"><img src="images/demo/240x90.gif" alt="" /></p>
                <p>Info and text here</p>
                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
              </li>
            </ul>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <!-- ########### --> 
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear">
    <div class="footbox">
      <h2>About Us</h2>
      <p>BLANK FOR NOW.</p>
    </div>
    <div class="footbox">
      <h2>Group Members</h2>
      <ul><li><a href="#">BLANK</a><a href="#"></a></li>
        <li><a href="#">BLANK</a></li>
        <li><a href="#">BLANK</a></li>
        <li><a href="#">BLANK</a></li>
        <li><a href="#">BLANK</a></li>
        <li><a href="#">BLANK</a></li>
        <li class="last"></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Keep In Touch</h2>
      <ul>
        <li>Facebook</li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">LinkedIn</a></li>
        <li><a href="#">Project Repository</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Keep in Touch</h2>
      <ul>
        <li><strong>Telephone:</strong><br />
          xxx-xxx-xxxx</li>
        <li><strong class="title">Email:</strong><br />
          <a href="#">contact@fake.com</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; ect....</p>
    <p class="fl_right">OS-Template<a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
  </div>
</div>
</body>
</html>