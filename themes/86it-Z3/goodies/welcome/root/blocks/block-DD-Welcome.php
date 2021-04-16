<?php



if (eregi("block-DD-Welcome.php",$PHP_SELF)) {
    Header("Location: index.php");
    die();
}

    
$content .= "<center><OBJECT classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0\" WIDTH=\"272\" HEIGHT=\"228\" id=\"logo\" ALIGN=\"\"><PARAM NAME=movie VALUE=\"includes/welcome/welcome.swf\"> <PARAM NAME=menu VALUE=false> <PARAM NAME=quality VALUE=best> <PARAM NAME=wmode VALUE=transparent> <PARAM NAME=bgcolor VALUE=#0E1B24> <EMBED src=\"includes/welcome/welcome.swf\" menu=false quality=best wmode=transparent bgcolor=#0E1B24  WIDTH=\"272\" HEIGHT=\"228\" NAME=\"nav\" ALIGN=\"\" TYPE=\"application/x-shockwave-flash\" PLUGINSPAGE=\"http://www.macromedia.com/go/getflashplayer\"></EMBED></OBJECT></center>";

                            
?>