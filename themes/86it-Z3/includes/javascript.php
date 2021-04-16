<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
{
    exit('Access Denied');
}
global $ThemeSel;
echo "<script language=\"javascript\" src=\"themes/".$ThemeSel."/js/liveclock.js\"></script>\n";
?>