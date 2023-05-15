<?php
$file_name = substr(strchr($_SERVER['SCRIPT_NAME'], "/"), 1);
$name = substr($file_name, 0, strrpos($file_name, "."));
echo $name;
?>
<header>
    <h1>The music List</h1>
    <img src="images/logo.png" alt="Music logo">
</header>