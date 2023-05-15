<?php
global $name; ?>
<nav>
  <ul>
    <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li <?php if ($name == "header") echo 'class="current"'; ?>><a href="header.php"><span class="glyphicon glyphicon-star"></span> Advisors</a></li>
    <li <?php if ($name == "categories") echo 'class="current"'; ?>><a href="categories.php""><span class="glyphicon glyphicon-comment"></span> Sample Advice</a></li>
    <li <?php if ($name == "about") echo 'class="current"'; ?>><a href="about.php"><span class="glyphicon glyphicon-shopping-cart"></span> Subscribe Now</a></li>
  </ul>
</nav>
