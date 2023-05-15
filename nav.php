<?php
global $name; ?>
<nav>
  <ul>
    <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li <?php if ($name == "trending") echo 'class="current"'; ?>><a href="trending.php"><span class="glyphicon glyphicon-star"></span>Trending</a></li>
    <li <?php if ($name == "categories") echo 'class="current"'; ?>><a href="categories.php""><span class="glyphicon glyphicon-comment"></span> Categories</a></li>
    <li <?php if ($name == "about") echo 'class="current"'; ?>><a href="about.php"><span class="glyphicon glyphicon-shopping-cart"></span> About Us</a></li>
  </ul>
</nav>
