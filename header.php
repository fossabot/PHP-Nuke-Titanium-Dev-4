<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      NukeSentinel                             v2.5.00      07/11/2006
      Nuke Patched                             v3.1.0       06/26/2005
      Advanced Security Extension              v1.0.0       12/22/2005
-=[Other]=-
      Dynamic Titles                           v1.0.0       06/11/2005
-=[Mod]=-
      Collapsing Blocks                        v1.0.0       08/16/2005
	  NSN Center Blocks                        v2.2.1       05/26/2009
 ************************************************************************/
if(!defined('HEADER')) 
define('HEADER', true); 
else 
return; 

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
exit('Access Denied'); 

require_once(dirname(__FILE__).'/mainfile.php');

function head() 
{
    global $define_theme_xtreme_209e, 
						  $ab_config, 
						  $modheader, 
						       $name, 
							  $cache, 
						   $userinfo, 
						     $cookie, 
							$sitekey, 
							     $db, 
							$banners, 
						   $sitename, 
						        $ads, 
							$browser, 
							$ThemeSel;
    
	$ThemeSel = get_theme();
	
    global $eighty_six_it;
	$eighty_six_it = '<a class = "small" href="#">Programmers Making Connections. Coders Making a Difference.</a>';
	//$eighty_six_it = '<a class = "small" href="https://www.86it.us/" target="_tab" >Proud Member Of The 86it Developers Network</a>';

    
	if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/includes/mimetype.php'))  
    include(NUKE_THEMES_DIR.$ThemeSel.'/includes/mimetype.php');
	else 
	{
      echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n";
      echo "".'<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'._LANGCODE.'">'."\n";
      echo "".'<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="https://www.facebook.com/2008/fbml">'."\n"; 
      echo "\n\n<!-- START <head> -->\n\n";
	  echo '<head>'."\n";
	  echo '<!--[if IE]>';
      echo "\n<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />\n";
      echo '<![endif]-->'."\n";
      echo "<meta http-equiv='Content-Type' content='text/html'; charset='UTF-8';' />\n";
      echo "<meta http-equiv='Content-Language' content='"._LANGCODE."' />\n";
      echo "<meta http-equiv='Content-Style-Type' content='text/css' />\n";
      echo "<meta http-equiv='Content-Script-Type' content='text/javascript' />\n";
    }	

    include_once(NUKE_INCLUDE_DIR.'meta.php');

    # START function to grab the page title. - 09/07/2019
    echo "\n\n<!-- START title_and_meta_tags(); -->\n";
    //the_pagetitle(); only used in admin section now.
	title_and_meta_tags();
    echo "\n<!-- END title_and_meta_tags(); -->\n\n";
    # END function to grab the page title. - 09/07/2019

	################################################################
	if (@file_exists(TITANIUM_CLASSES_DIR . 'class.browsers.php')) #      Added by Ernest Buffington
	    include(TITANIUM_CLASSES_DIR . 'class.browsers.php');      ###### Load Browser class - used for checking your browser types
                                                                   #      Start date Jan 1st 2012 till Present - It is a work in progress!
    ################################################################
	if (@file_exists(TITANIUM_INCLUDE_DIR . 'cookies.php')) #            Added by Ernest Buffington
	include(TITANIUM_INCLUDE_DIR . 'cookies.php');          ############ Load the custom cookies file if it exist COOKIE CONTROL
    #########################################################            Jan 1st 2012 
    # START Javascript functions. - 09/03/2019              #
	include_once(NUKE_INCLUDE_DIR.'javascript.php');        ####### Javascript Loader 09/21/2019
    # END Javascript functions. - 09/03/2019                #
    ######################################################### 

    echo "\n\n<!-- CHECKING FOR pre 2019 themes -> javascript.php in Theme Dir START -->\n";   # Used for PHP-Nuke Titanium pre 2019 themes.
	if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/includes/javascript.php')) # CHECK FOR THEME JAVASCRIPT Added by Ernest Buffington 3/16/2021 10:58am
    include_once(NUKE_THEMES_DIR.$ThemeSel.'/includes/javascript.php');
    echo "<!-- CHECKING FOR pre 2019 themes -> javascript.php in Theme Dir END -->\n\n";

	global $titanium_browser;
    $titanium_browser = new Browser();
	
    # START uploadcare PLUGIN for CKeditor 4 - 09/07/2019
    echo "\n\n<!-- START uploadcare -->\n\n";
    echo "<script type=\"text/javascript\">\n";
    echo "UPLOADCARE_PUBLIC_KEY = 'df691884c0a749427aa1';\n";
    echo "UPLOADCARE_TABS = 'file camera url facebook gdrive gphotos dropbox instagram evernote flickr onedrive box vk huddle';\n";
    echo "UPLOADCARE_EFFECTS = 'crop,rotate,mirror,flip,enhance,sharp,blur,grayscale,invert';\n";
    echo "UPLOADCARE_PREVIEW_STEP = true;\n";
    echo "UPLOADCARE_CLEARABLE = true;\n";
    echo "</script>\n";

    echo "<script src=\"https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js\"></script>\n";
    echo "<script src=\"https://ucarecdn.com/libs/widget-tab-effects/1.x/uploadcare.tab-effects.js\"></script>\n";
        
    echo "<script type=\"text/javascript\">\n";
    echo "uploadcare.registerTab('preview', uploadcareTabEffects)\n";
    echo "</script>\n";
    echo "\n\n<!-- END uploadcare -->\n\n";
	# START uploadcare PLUGIN for CKeditor 4 - 09/07/2019

    # START Load current theme. - 09/07/2019
    echo "\n\n<!-- START Load current theme. -->\n\n";
    include_once(NUKE_THEMES_DIR.$ThemeSel.'/theme.php');
    echo "\n\n<!-- END Load current theme. -->\n\n";
	# START Load current theme. - 09/07/2019

    echo "\n\n<!-- START Load favicon. -->\n\n";
    if ((($favicon = $cache->load('favicon', 'config')) === false) || empty($favicon)) 
	{
        if (file_exists(NUKE_BASE_DIR.'favicon.ico')) $favicon = "favicon.ico";
		else 
		if (file_exists(NUKE_IMAGES_DIR.'favicon.ico')) $favicon = "images/favicon.ico";
		else 
		if (file_exists(NUKE_THEMES_DIR.$ThemeSel.'/images/favicon.ico')) $favicon = "themes/$ThemeSel/images/favicon.ico";
		else 
        $favicon = 'none';
        
		if ($favicon != 'none') 
        echo "<link rel=\"shortcut icon\" href=\"$favicon\" type=\"image/x-icon\" />\n";

        $cache->save('favicon', 'config', $favicon);
    } 
	else 
	{
        if ($favicon != 'none') 
        echo "<link rel=\"shortcut icon\" href=\"$favicon\" type=\"image/x-icon\" />\n";
    }
    echo "\n<!-- END Load favicon. -->\n\n";

    global $browser;
    if(isset($modheader)) { echo $modheader; }

    echo "\n\n<!-- START writeHEAD() -->\n\n";
    writeHEAD();
    echo "\n<!-- END writeHEAD() -->\n\n";

    echo "\n\n<!-- START custom_head -->\n\n";
    
	if ((($custom_head = $cache->load('custom_head', 'config')) === false) || empty($custom_head)) 
	{
        $custom_head = array();
    
	    if (file_exists(NUKE_INCLUDE_DIR.'custom_files/custom_head.php')) 
        $custom_head[] = 'custom_head';
        
		if (file_exists(NUKE_INCLUDE_DIR.'custom_files/custom_header.php')) 
        $custom_head[] = 'custom_header';
        
        if (!empty($custom_head)) 
		{
            foreach ($custom_head as $file) {
                include_once(NUKE_INCLUDE_DIR.'custom_files/'.$file.'.php');
            }
        }
        
		$cache->save('custom_head', 'config', $custom_head);
    } 
	else 
	{
        if (!empty($custom_head)) 
		{
            foreach ($custom_head as $file) 
			{
                include_once(NUKE_INCLUDE_DIR.'custom_files/'.$file.'.php');
            }
        }
    }
    echo "\n<!-- END custom_head -->\n\n";

    /* ----- as you can probably tell this is used for IE compatibility ----- */
    echo '<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->'."\n";
    echo "</head>\n";
    echo "\n<!-- END </head> -->\n\n";
	echo "\n<!-- START Top Primary Body Tags -->\n";
	echo "<html>\n";
	echo "<body>\n";
	echo "<!-- END Top Primary Body Tags -->\n\n";

    themeheader();

/*****[BEGIN]******************************************
 [ Base:    NukeSentinel                      v2.5.00 ]
 ******************************************************/
    if($ab_config['site_switch'] == 1)
    echo '<div align="center"><img src="modules/NukeSentinel/images/disabled.png" alt="'._AB_SITEDISABLED.'" title="'._AB_SITEDISABLED.'" border="0" /></div><br />';
/*****[END]********************************************
 [ Base:    NukeSentinel                      v2.5.00 ]
 ******************************************************/
}

function online() 
{
    global $prefix, $db, $name, $board_config, $userinfo, $identify;
    $ip = $identify->get_ip();
    $url = (defined('ADMIN_FILE')) ? 'index.php' : Fix_Quotes($_SERVER['REQUEST_URI']);
    $uname = $ip;
    $guest = 1;
    $user_agent = $identify->identify_agent();
	
	if (is_user()):
		$uname = $userinfo['username'];
        $guest = 0;
/*****[BEGIN]******************************************
 [ Base:    Advanced Security Extension        v1.0.0 ]
 ******************************************************/
    elseif($user_agent['engine'] == 'bot'):

        $uname = $user_agent['bot'];
		$guest = 3;

/*****[END]********************************************
 [ Base:    Advanced Security Extension        v1.0.0 ]
 ******************************************************/
    elseif($user_agent['engine'] == ''):

    # Facebook IP Range
	if( 
	   ($ip == '173.252.127.24') 
	|| ($ip == '173.252.127.12') 
	|| ($ip == '173.252.127.15')
	|| ($ip == '173.252.127.16')
	|| ($ip == '173.252.127.20')
	|| ($ip == '173.252.127.6')
	|| ($ip == '113.66.139.107')
	|| ($ip == '173.252.87.111')
	|| ($ip == '173.252.87.118')
	|| ($ip == '173.252.127.120')
	|| ($ip == '173.252.127.112')
	|| ($ip == '173.252.127.7')
	|| ($ip == '173.252.127.1')
	|| ($ip == '173.252.127.118')
	|| ($ip == '173.252.127.17')
	|| ($ip == '173.252.127.14')
	|| ($ip == '173.252.127.29')
	|| ($ip == '173.252.127.19')

    || ($ip == '69.171.251.9')	
    || ($ip == '69.171.251.16')	
    || ($ip == '69.171.251.19')	
    || ($ip == '69.171.251.2')	
    || ($ip == '69.171.251.1')	
    || ($ip == '69.171.251.17')	
    || ($ip == '69.171.251.10')	
    || ($ip == '69.171.251.120')	
    || ($ip == '69.171.251.119')	
	|| ($ip == '69.171.249.24')
	|| ($ip == '69.171.249.18')
	|| ($ip == '69.171.249.6')
    || ($ip == '69.171.251.18')	
    || ($ip == '69.171.251.24')	
    || ($ip == '69.171.251.11')	
    || ($ip == '69.171.251.116')	
    || ($ip == '69.171.251.22')

    || ($ip == '54.36.149.13')	
	|| ($ip == '13.66.139.107')
	|| ($ip == '92.118.160.61')
	){

        $uname = 'Facebook';
		$guest = 3;

	}
    # This is a Tor Exit Router
	if($ip == '173.252.127.24'){

        $uname = 'Tor Exit Router';
		$guest = 3;

	}
    # This is Apple Bot
	if($ip == '17.58.99.233'){

        $uname = 'Apple Bot';
		$guest = 3;

	}
    # This is a Tor Exit Router
	if($ip == '	199.16.157.183'){

        $uname = 'Twitter Bot';
		$guest = 3;

	}
	# Google User Accounts
	if($ip == '34.82.56.201'){

        $uname = 'Google User Accts';
		$guest = 3;

	}
	# MSN Bot
	if(($ip == '13.66.139.157') 
	|| ('13.66.139.19')
	){

        $uname = 'MSN Bot';
		$guest = 3;

	}	
    # This AWS
	if(($ip == '34.233.208.215') 
	|| ($ip == '34.233.58.209')
	)
	{

        $uname = 'AWS Bot';
		$guest = 3;

	}
	# Verizon
	if($ip == '174.228.141.231'){

        $uname = 'Verizon Cell';
		$guest = 3;

	}	
	endif;

    $custom_title = $name;
    $url = str_replace("&amp;", "&", $url);
	$url = addslashes($url);
    $past = time() - $board_config['online_time'];
    $db->sql_query('DELETE FROM '.$prefix.'_session WHERE time < "'.$past.'"');
    $ctime = time();

    /**
     * A replace into sql command was added, to prevent the duplication of users, This also saves on several lines of code.
     *
     * @since 2.0.9E
     */
    $db->sql_query("replace into `".$prefix."_session` (uname, 
	                                                     time, 
													starttime, 
													host_addr, 
													    guest, 
													   module, 
													      url) 
	values ('".$uname."', 
	        '".$ctime."', 
			'".$ctime."', 
			'".$ip."', 
			'".$guest."', 
			'".$custom_title."', 
			'".$url."');");

    /**
     * This sql replace command is to track who has been to the site and records their last visit.
     *
     * @since 2.0.9E
     */
    if ( $guest == 0 )
        $db->sql_query("replace into `".$prefix."_users_who_been` (`user_ID`, 
		                                                           `username`, 
																   `last_visit`) 
   values ('".$userinfo['user_id']."', 
           '".$userinfo['username']."', 
		    ".time().");");
}

online();
head();

/*****[BEGIN]******************************************
 [ Mod:    NSN Center Blocks                   v2.2.1 ]
 ******************************************************/
if (!defined('ADMIN_FILE')):
	include_once(NUKE_INCLUDE_DIR.'counter.php');

	if (defined('HOME_FILE')):
		include_once(NUKE_INCLUDE_DIR.'messagebox.php');
		blocks('Center');
		# If you want either of the following on all pages simply, move the include to before if (defined('HOME_FILE'))
		include(NUKE_INCLUDE_DIR.'cblocks1.php');
		include(NUKE_INCLUDE_DIR.'cblocks2.php');
    endif;

endif;
/*****[END]********************************************
 [ Mod:    NSN Center Blocks                   v2.2.1 ]
 ******************************************************/
?>
