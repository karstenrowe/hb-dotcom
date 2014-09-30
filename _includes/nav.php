<?php
$page = $_SERVER['SCRIPT_NAME'];
?>

<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($page == "/index.php"){ echo "class='active'";} ?> ><a href="/">Home</a></li>
        <li
        	<?php if ($page == "/about/team/index.php"){ echo "class='active'";} ?>
        	<?php if ($page == "/about/testimonials/index.php"){ echo "class='active'";} ?>
        	<?php if ($page == "/about/the-clinic/index.php"){ echo "class='active'";} ?>
        	<?php if ($page == "/about/our-approach/index.php"){ echo "class='active'";} ?>
        	class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
				  <ul class="dropdown-menu" role="menu">
	          <li <?php if ($page == "/about/the-clinic/index.php"){ echo "class='active'";} ?> ><a href="/about/the-clinic/">About the clinic</a></li>
	          <li <?php if ($page == "/about/team/index.php"){ echo "class='active'";} ?> ><a href="/about/team/">The team</a></li>
	          <li <?php if ($page == "/about/our-approach/index.php"){ echo "class='active'";} ?> ><a href="/about/our-approach/">Our approach</a></li>
	          <li <?php if ($page == "/about/testimonials/index.php"){ echo "class='active'";} ?> ><a href="/about/testimonials/">Client testimonials</a></li>
	        </ul>
      	</li>
        <li
        	<?php if ($page == "/treatments/advanced/index.php"){ echo "class='active'";} ?>
        	<?php if ($page == "/treatments/beauty/index.php"){ echo "class='active'";} ?>
        	<?php if ($page == "/treatments/men/index.php"){ echo "class='active'";} ?>
        	<?php if ($page == "/treatments/before-after-photos/index.php"){ echo "class='active'";} ?>
        	class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown">Treatments <b class="caret"></b></a>
				  <ul class="dropdown-menu" role="menu">
          	<li <?php if ($page == "/treatments/advanced/index.php"){ echo "class='active'";} ?> ><a href="/treatments/advanced/">Advanced treatments</a></li>
          	<li <?php if ($page == "/treatments/beauty/index.php"){ echo "class='active'";} ?> ><a href="/treatments/beauty/">Beauty treatments</a></li>
						<li <?php if ($page == "/treatments/men/index.php"){ echo "class='active'";} ?> ><a href="/treatments/men/">Men's treatments</a></li>
						<li <?php if ($page == "/treatments/before-after-photos/index.php"){ echo "class='active'";} ?> ><a href="/treatments/before-after-photos/">Before & after photos</a></li>
				  </ul>
				</li>
        <li <?php if ($page == "/products/index.php"){ echo "class='active'";} ?> ><a href="/products/">Products</a></li>
        <li <?php if ($page == "/news/index.php"){ echo "class='active'";} ?> ><a href="/news/">News</a></li>
        <li <?php if ($page == "/contact-us/index.php"){ echo "class='active'";} ?> ><a href="/contact-us/">Contact us</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
