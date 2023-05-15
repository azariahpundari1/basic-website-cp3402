<?php
$file_name = substr(strchr($_SERVER['SCRIPT_NAME'], "/"), 1);
$name = substr($file_name, 0, strrpos($file_name, "."));
$page_title = '';
$logoImage = 'images/logo.png';
echo $name
?>
<header>
    <?php
        if ($name == 'basic-website/index') {
            $page_title = "Azariah's Favourite Songs";
        }
        elseif ($name == 'basic-website/trending') {
            $page_title = 'Trending';
        } elseif ($name == 'basic-website/categories') {
            $page_title = 'Categories';
        }
        elseif ($name == 'basic-website/about'){
            $page_title = 'About Us';
        }
        else {
            $page_title = '404 page not found';
            $logoImage = '';
        }
    ?>
    <h1><?php echo $page_title; ?></h1>
    <img src= <?php echo $logoImage; ?>  alt="" alt="Page Logo">
</header>