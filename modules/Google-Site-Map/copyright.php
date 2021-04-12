<?php
/************************************************************************/
/* NukeJMap [Site_Map]	4.0 by z3rb			                			*/
/* =================================                                    */
/*                                                                      */
/* Copyright (c) 2006 by Techgen			                			*/
/* http://www.techg3n.net                                               */
/*                                                                      */
/************************************************************************/
$module_name = basename(dirname(__FILE__));
$mod_name = "Google Site Map";
$author_name = "Bob Marion";
$author_email = "bob.marion@86it.us";
$author_homepage = "http://nukescripts.86it.us";
$license = "GNU/GPL";
$download_location = "http://nukescripts.86it.us";
$module_version = "1.0";
$release_date = "April 2021";
$module_description = "Google Site Map";
$mod_cost = "$50.00 US Dollars";

function show_copyright() 
{
    global $mod_cost, $forum, $mod_name, $module_name, $release_date, $author_name, $author_email, $author_homepage, $license, $download_location, $module_version, $module_description;

    if ($mod_name == "") { $mod_name = str_replace("-", " ", $module_name); }

    echo "<html>\n";
    echo "<head><title>$mod_name: Copyright Information</title></head>\n";
    
	echo "<body bgcolor=\"#FFFFFF\" link=\"#000000\" alink=\"#000000\" vlink=\"#000000\">\n";
    
	echo "<center><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n<tr>\n";
    
	echo "<td width=\"290\" align=\"center\"><font size=\"2\" face=\"Arial, Helvetica\"><strong>Copyright &copy; The 86it Developers Network</strong><br />";
    
	echo $mod_name." for <a href=\"http://www.86it.us\" target=\"_blank\">PHP-Nuke Titanium</a><br /><br />[<a href=\"javascript:void(0)\" onClick=javascript:self.close()>Close</a>]</font></td>\n";
    
	echo "</tr>\n</table>\n</center><hr />\n";
    
	echo "<font size=\"2\" face=\"Arial, Helvetica\">";
    
	echo "&#8226;&nbsp;<strong>Module Name:</strong> $mod_name<br />\n";
    
	if ($module_version != "") { echo "&#8226;&nbsp;<strong>Module Version:</strong> $module_version<br />\n"; }
    
	if ($release_date != "") { echo "&#8226;&nbsp;<strong>Module Release Date:</strong> $release_date<br />\n"; }
    
	if ($mod_cost != "") { echo "&#8226;&nbsp;<strong>Module Cost:</strong> $mod_cost<br />\n"; }
    
	if ($license != "") { echo "&#8226;&nbsp;<strong>License:</strong> $license<br />\n"; }
    
	if ($author_name != "") { echo "&#8226;&nbsp;<strong>Author Name:</strong> $author_name<br/ >\n"; }
    
	if ($author_email != "") { echo "&#8226;&nbsp;<strong>Author E-mail:</strong> $author_email<br />\n"; }
    
	if ($module_description != "") { echo "&#8226;&nbsp;<strong>Module Description:</strong> $module_description<br />\n"; }
    
	if ($download_location != "") { echo "&#8226;&nbsp;<strong>Download:</strong> <a href=\"$download_location\" target=\"new\">nukescripts.86it.us</a>\n"; }
	
	echo "<hr />\n";
    echo "</font>\n";
    echo "</body>\n";
    echo "</html>";
}
show_copyright();
?>
