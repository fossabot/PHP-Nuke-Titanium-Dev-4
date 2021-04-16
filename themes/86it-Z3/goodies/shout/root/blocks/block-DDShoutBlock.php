<?php

if (eregi("block-Block_Creator.php",$PHP_SELF)) {
    Header("Location: index.php");
    die();
}

$content  = "<p align=\"center\">";
$content  .= "  <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0\" width=\"272\" height=\"314\">";
$content  .= "    <param name=\"movie\" value=\"includes/shout/shout.swf\">";
$content  .= "    <param name=\"quality\" value=\"high\">";
$content  .= "    <embed src=\"includes/shout/shout.swf\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"272\" height=\"314\"></embed>";
$content  .= "  </object> ";
$content  .= "</p>";

?>