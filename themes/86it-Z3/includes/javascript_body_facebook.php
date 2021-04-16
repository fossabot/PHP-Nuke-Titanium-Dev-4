<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}
/*****[BEGIN]******************************************
 [ Mod:     facebook id                        v1.0.0 ]
 ******************************************************/
global $domain, $facebookappid, $facebookappsecret;
#################################################
echo "\n<div id=\"fb-root\"></div>\n";        #
echo "<script type=\"text/javascript\">\n";     #
echo "<!--\n";                                  #
#################################################
echo "window.fbAsyncInit = function() {\n";
echo "FB.init({\n";
echo "appId            : '$facebookappid',\n";
echo "autoLogAppEvents : true,\n"; 
echo "xfbml            : true,\n"; 
echo "version          : 'v3.3'\n";   
echo "});\n";
#################################################
echo "//-->\n";                                 #
echo "</script>\n";                             #
#################################################
?>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>   
<?  
/*****[END]********************************************
 [ Mod:     facebook id                        v1.0.0 ]
 ******************************************************/
?>