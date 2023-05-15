<?php
$file_name = substr(strchr($_SERVER['SCRIPT_NAME'], "/"), 1);
$name = substr($file_name, 0, strrpos($file_name, "."));
?>
<header>
    <h1>Azariah's Favourite Songs</h1>
    <img src="images/logo.png" alt="Music logo">
</header>