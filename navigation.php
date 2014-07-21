<?php

$content= <<<END
<!-- Navigation Bar Begins -->
<div id="nav-head" class="fixed" data-magellan-expedition>
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.php"><img src="img/logo.png"></a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="index.php">Menu</a></li>
  </ul>
  <!-- Right Nav Section -->
<section id="topBarRight" class="top-bar-section">
  <ul class="right">
    <li data-magellan-arrival="home" id="navItemHome"> <a id="home" href="index.php">Home</a></li>
    <li class="divider"></li>
<!-- About -->
  <li data-magellan-arrival="about" id="navItemAbout">
    <a id="#about" href="index.php#about">About</a>
  </li>
  <li class="divider"></li>
<!-- Portfolio -->
  <li data-magellan-arrival="portfolio" id="navItemPortfolio"> <a id="#portfolio" href="index.php#portfolio">Portfolio</a></li>
  <li class="divider"></li>
<!-- Office -->
  <li data-magellan-arrival="office" id="navItemOffice"> 
    <a id="#office" href="index.php#office">Office</a> 
  </li>
  <li class="divider"></li>
<!-- Contact -->
  <li data-magellan-arrival="contact" id="navItemContact"><a id="#contact" href="index.php#contact">Contact</a></li>  
<!-- End of Nav, Closing Nav Div -->
  </ul>
</section>
</nav>
</div>
END;

echo $content;
?>