<?php
#########################################################################
# Titanium CHANGELOG v2.0                                               #
#########################################################################
# PHP-Nuke Titanium : Enhanced PHP-Nuke Web Portal System               #
#########################################################################
# [CHANGES]                                                             #
# Table Header Module Fix by TheGhost               v1.0.0   01/30/2012 #
# Nuke Patched                                      v3.1.0   06/26/2005 #
#########################################################################
if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

$module_name = basename(dirname(__FILE__));

if ( isset($HTTP_GET_VARS['name']) || isset($HTTP_POST_VARS['name']) )
{
        $name = ( isset($HTTP_POST_VARS['name']) ) ? htmlspecialchars($HTTP_POST_VARS['name']) : htmlspecialchars($HTTP_GET_VARS['name']);
}
else
{
        $name = '';
}

if ( isset($HTTP_GET_VARS['mode']) || isset($HTTP_POST_VARS['mode']) )
{
        $mode = ( isset($HTTP_POST_VARS['mode']) ) ? htmlspecialchars($HTTP_POST_VARS['mode']) : htmlspecialchars($HTTP_GET_VARS['mode']);
}
else
{
        $mode = '';
}

global $module_name;

$titanium_title = 'Live Change Log v6.0';
$pagetitle = 'PHP-Nuke Titanium &raquo; '.$titanium_title;

if(!isset($module_name) || empty($module_name)){
    $module_name = basename(dirname(__FILE__));
}

get_lang($module_name);

require_once("mainfile.php");
 
include_once(NUKE_MODULES_DIR.$module_name.'/includes/functions.php');

define(CUR_TITANIUM, strtolower(TITANIUM_EDITION));
function titanium_check_version() {
    $ver = titanium_get_version();
    return (NUKE_TITANIUM == $ver) ? 0 : 1;
}

include(NUKE_BASE_DIR.'header.php');

$CSSstyle = "<link rel=\"stylesheet\" href=\"modules/$module_name/style/style.css\" type=\"text/css\">\n";
echo $CSSstyle;

#########################################################################
# Table Header Module Fix Start - by TheGhost   v1.0.0     01/30/2012
#########################################################################
//if(!function_exists('OpenTableModule')) 
//OpenTable();
//else
//OpenTableModule();
#########################################################################
# Table Header Module End Start - by TheGhost   v1.0.0     01/30/2012
#########################################################################
//echo "<br />";

global $myappid, $secret;
global $facebook_plugin_width, $domain, $name;
global $chnangelogstatus, $ThemeSel;

$favicon = img('chrome_logo.png', 'CHANGELOG'); 

 echo "<img src=\"themes/".$ThemeSel."/header/spacer.png\" width=1 height=1><br>\n";
OpenFancyTable();
titanium_version();        
CloseFancyTable();

include_once(NUKE_MODULES_DIR.$module_name.'/includes/facebook_standard_module_plugins.php');
//CloseTable();
echo "<br />";
include(NUKE_BASE_DIR.'footer.php');
?> 
