<?php
/*=======================================================================
 PHP-Nuke Titanium: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
if (!defined('NUKE_TITANIUM'))
{
    die('Hacking attempt');
}

function OpenWaldoHeaderTable() {

 global $theme_name, $browser, $title;
  	
	?>
    <fieldset><legend><strong><b><?=$title?></b></strong></legend>
    <table class="jason" width="100%" border="2">
    <tr>
    <td><div style="background : url(../../../modules/CHANGELOG/images/.png) no-repeat; background-size: 100%;">
	<?
}

function OpenChangeLogHeaderTable() {

 global $theme_name, $browser, $title;
  	
	?>	
    <fieldset><legend><strong><b><?=$title?></b></strong></legend>
    <table class="jason" width="100%" border="2">
    <tr>
    <td width="100%">
	<?
	/* <div style="background : url(../../../modules/CHANGELOG/images/Image58.png) repeat-y; background-size: 100%;">*/
}

function CloseChangeLogHeaderTable()
{

  global $name, $theme_name;
  
      ?>
     </div></td>
     </tr>
     </table> 		
	</fieldset>
    
    <br />
     <?   


}

function OpenChangeLogTable() {

 global $theme_name, $browser, $title;
  	
	?>	
    <fieldset><legend><strong><b><?=$title?></b></strong></legend>
    <table class=\"jason\" width="100%" border="2">
    <tr>
    <td>
	<?
}

    
function CloseChangeLogTable() {

      ?>
     </td>
     </tr>
     </table> 		
	</fieldset>
    <br />
     <?   
	 
}

function titanium_get_version() 
{

    $ch = curl_init('https://cvs.86it.us/version_network.txt');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

    if ($errmsg = curl_error($ch)) 
    {
      echo $errmsg;
    } 
    else 
    {
      $contents = $result;
    }    

    if(substr($contents,strlen($contents)-1) == "\n") 
	{
        $contents = substr($contents,0,strlen($contents)-1);
    }

    return $contents;
}

function titanium_compare() 
{
    global $db, $prefix, $cache;

    $check = titanium_check_version();
    
	if($check == 0) 
	{
        $sql_ver = "UPDATE ".$prefix."_titanium SET titanium_value = '0' WHERE titanium_field='ver_previous'";
        $db->sql_query($sql_ver);
        $cache->delete('titaniumconfig');
        return "<strong><span style='color:green'>"._ADMIN_VER_CUR."</span></strong>";
    }
    
	$current = NUKE_TITANIUM;
    
	$s = strpos($log_raw,$current);
    
	if(!$s) 
	{
        return -1;
    }

    return $log_titanium;
}

//The Status for Ernest Allen Buffington
function ghost_changelog()  
{

	global $domain;
    $data = file("https://theghost.86it.us/modules/CHANGELOG/txt/ghost_status.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	 
	$log_ghost = "<table class=\"jason\" width='100%'>";
    
	$names = array(
	            "-[" => "[",
                "ERN" => "Ernest Buffington",
				"ALPHA" => "Ernest Buffington"
            );
    
	for($i=0, $maxi=count($data);$i<$maxi;$i++) 
	{
        $line = $data[$i];
    
	    if(stristr($line, "-[")) 
		{
            
			
			$log_ghost .= "<tr><td style='text-indent: 15pt;'>";
			$log_ghost .= htmlspecialchars($line);
            $log_ghost .= "</td></tr>";
        } 
		else 
		{
            $line = trim($line);
            $line = isset($names[strtoupper($line)]) ? "<div class=\"\" color=\"#000000\"><strong>" . $names[strtoupper($line)] . "</strong></div>" : $line;
            $log_ghost .= "<tr><td>";
            $log_ghost .= $line;
            $log_ghost .= "</td></tr>";
        }
    }
    
	$log_ghost .= "</table>";
    
	$phrase  = $log_ghost;
	
	$original = array("pm to", 
				      "ON",
				   "CODING",
				 "SLEEPING",
				     "EABS",
					  "EAB",
					  "OFF",  
					  "AWAY",
					  "NEW",
					  "am ]", 
					  "Moved",
				      "Ported",
				      "Updated",
				      "Removed",
				      "Added",
					   "pm ]", 
					  "am to",
					  "Fixed");
    
	$new   = array("<font color=\"#CC0000\"><b>pm</b></font> to", 
			       "<font color=\"#CC0000\"><b>ON</b></font>", 
				   "<font color=\"#CC0000\"><b>CODING</b></font>",
				   "<font color=\"#CC0000\"><b>SLEEPING</b></font>",
				   "<center><font color=\"#3b5998\"><b>Ernest Buffington's</b></font>", 
				   "<center><font color=\"#3b5998\"><b>Ernest Buffington</b></font>", 
				   "<font color=\"#CC0000\"><b>OFF</b></font>", 
				   "<font color=\"#CC0000\"><b>AWAY</b></font>", 
				   
				   "<img src=\"images/menu/admin/new.gif\" border=\"0\" title=\"New!\">", 
			       "<font color=\"blue\"><b>am</b> </font>]", 
				   
				   "<font color=\"#ca5e06\"><b>Moved</b></font>", 
			       "<font color=\"#300e9e\"><b>Ported</b></font>", 
			       "<font color=\"green\"><b>Updated</b></font>", 
			       "<font color=\"#CC0000\"><u><b>Removed</b></u></font>", 
				   "<font color=\"blue\"><b>Added</b></font>",
					
					"<font color=\"#CC0000\"><b>pm</b> </font>]", 
					
					"<font color=\"blue\"><b>am</b></font> to",
				   
				   "<font color=\"#C00000\"><b>Fixed</b></font>");

    $log_ghost = str_replace($original, $new, $phrase);
	
	return $log_ghost;
}

function titanium_network_changelog() 
{
	global $domain;
    
	$data = file("https://cvs.86it.us/modules/CHANGELOG/txt/cvs.86it.us.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
	$log_titanium = "<table class=\"jason\" width='100%'>";
    
	$names = array(
	            "-[" => "[",
                "ERN" => "Ernest Buffington",
				"ALPHA" => "Ernest Buffington"
            );
    
	for($i=0, $maxi=count($data);$i<$maxi;$i++) 
	{
        $line = $data[$i];
    
	    if(stristr($line, "-[")) 
		{
            
			
			$log_titanium .= "<tr><td style='text-indent: 15pt;'>";
			$log_titanium .= htmlspecialchars($line);
            $log_titanium .= "</td></tr>";
        } 
		else 
		{
            $line = trim($line);
            $line = isset($names[strtoupper($line)]) ? "<div class=\"\" color=\"#000000\"><strong>" . $names[strtoupper($line)] . "</strong></div>" : $line;
            $log_titanium .= "<tr><td>";
            $log_titanium .= $line;
            $log_titanium .= "</td></tr>";
        }
    }
    
	$log_titanium .= "</table>";
    
	$phrase  = $log_titanium;
	
	$original = array("pm to", 
				      "NEW",
					  "am ]", 
					  "Moved",
				      "Ported",
				      "Updated",
					  "Upgraded",
				      "Removed",
				      "Added",
					   "pm ]", 
					  "am to",
					  "Fixed");
    
	$new = array("<font color=\"#CC0000\"><b>pm</b></font> to",
	"<img src=\"images/menu/admin/new.gif\" border=\"0\" title=\"New!\">", 
	"<font color=\"blue\"><b>am</b> </font>]", 
	"<font color=\"#ca5e06\"><b>Moved</b></font>", 
	"<font color=\"#300e9e\"><b>Ported</b></font>", 
	"<font color=\"green\"><b>Updated</b></font>",
	"<font color=\"green\"><b>Upgraded</b></font>",  
	"<font color=\"#CC0000\"><u><b>Removed</b></u></font>", 
	"<font color=\"blue\"><b>Added</b></font>",
	"<font color=\"#CC0000\"><b>pm</b> </font>]", 
	"<font color=\"blue\"><b>am</b></font> to",
	"<font color=\"#C00000\"><b>Fixed</b></font>");

    $log_titanium = str_replace($original, $new, $phrase);
	
	return $log_titanium;
}

// this is FOR CURENT DOMAIN
function titanium_changelog() 
{
	global $domain;
    
	$data = file("http://".$domain."/modules/CHANGELOG/txt/".$domain.".txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	
    
	$log_titanium = "<table class=\"jason\" width='100%'>";
    
	$names = array(
	            "-[" => "[",
                "ERN" => "Ernest Buffington",
				"ALPHA" => "Ernest Buffington"
            );
    
	for($i=0, $maxi=count($data);$i<$maxi;$i++) 
	{
        $line = $data[$i];
    
	    if(stristr($line, "-["))  
		{
			$log_titanium .= "<tr><td style='text-indent: 15pt;'>";
			$log_titanium .= htmlspecialchars($line);
            $log_titanium .= "</td></tr>";
        } 
		else 
		{
            $line = trim($line);
            $line = isset($names[strtoupper($line)]) ? "<div class=\"\" class=\"title\" color=\"#000000\"><b>" . $names[strtoupper($line)] . "</b></div>" : $line;
            $log_titanium .= "<tr><td>";
            $log_titanium .= $line;
            $log_titanium .= "</td></tr>";
        }
    }
    
	$log_titanium .= "</table>";
    
	$phrase  = $log_titanium;
	
	$original = array("pm to", 
				      
					  "Error",
					  "Found",
					  "Bug",
					  "Bugs",
					  "Fixes",
					  "-",
					  "[",
					  "]",
					  "Broken",
					  
					  "NEW",
					  "BUG",
					  "am ]", 
					  "Moved",
				      "Ported",
				      "Updated",
					  "Updates",
				      "Removed",
				      "Added",
					   "pm ]", 
					  "am to",
					  "Fixed");
    
	$new   = array("<font color=\"#CC0000\"><b>pm</b></font> to", 
			       
				   "<font color=\"#cc0000\"><b>Error</b></font>", 
			       "<font color=\"#300e9e\"><b>Fouund</b></font>", 
				   "<font color=\"#cc0000\"><b>Bug</b></font>", 
				   "<font color=\"#cc0000\"><b>Bugs</b></font>", 
				   "<font color=\"#300e9e\"><b>Fixes</b></font>",
				   "<font color=\"#000000\"><b>-</b></font>",
				   "<font color=\"#000000\"><b>[</b></font>",
				   "<font color=\"#000000\"><b>]</b></font>",
				   "<font color=\"#cc0000\"><b>Broken</b></font>",
				   
				   "<img src=\"images/menu/admin/new.gif\" border=\"0\" title=\"New!\">", 
				   "<img src=\"modules/CHANGELOG/images/BUG.png\" height=14 border=\"0\" title=\"BUG!\">", 
			       "<font color=\"blue\"><b>am</b> </font>]", 
				   "<font color=\"#ca5e06\"><b>Moved</b></font>", 
			       "<font color=\"#300e9e\"><b>Ported</b></font>", 
			       "<font color=\"green\"><b>Updated</b></font>", 
				   "<font color=\"green\"><b>Updates</b></font>", 
			       "<font color=\"#CC0000\"><u><b>Removed</b></u></font>", 
				   "<font color=\"blue\"><b>Added</b></font>",
				   "<font color=\"#CC0000\"><b>pm</b> </font>]", 
				   "<font color=\"blue\"><b>am</b></font> to",
				   "<font color=\"#300e9e\"><b>Fixed</b></font>");

    $log_titanium = str_replace($original, $new, $phrase);
	
	return $log_titanium;
}

function titanium_get_download() 
{
	$contents = @file_get_contents('https://cvs.86it.us/modules/CHANGELOG/txt/download_network.txt');

    if(substr($contents,strlen($contents)-1) == "\n") 
	{
        $contents = substr($contents,0,strlen($contents)-1);
    }

    return $contents;
}

function titanium_version() {
    global $db, $domain, $prefix, $admin_file, $title, $domain;
    
	$title = "Live Change Log v6.0";
	OpenChangeLogHeaderTable();
    echo "<br /><center>";
    echo "<strong><span class=\"title\">PHP-Nuke Titanium - Live Change Log v6.0</span></strong><br /><br />";

    $ret_ver = titanium_get_version();
    
	if(!$ret_ver) 
	{
        echo "<strong><span style='color:red'>"._VER_ERR_CON."</span></strong>";
    } 
	else 
	{
	    echo "<strong><span style='color:#3b5998'>Current Release :</span> PHP-Nuke Titanium ".$ret_ver." ".TITANIUM_EDITION."</strong><br /><strong><span style='color:#3b5998'>The Version On This Server is</span></strong> : <b>PHP-Nuke Titanium ".TITANIUM_VERSION."</b> <span style='color:#3b5998'><strong>and is using</strong></span> <span style='color:#CC0000'><b>Zend</span></b><span style='color:#3b5998'><strong> Caching</strong></span></center>";
echo "<center><strong><span style='color:#3b5998'>The Base Engine on <span style='color:#000000'>$domain</span> was Nuke-Evolution ".EVO_VERSION."</center></span><br />";
   CloseChangeLogHeaderTable();
	
		$log_ghost = ghost_changelog();
		
		$log_titanium = titanium_changelog();
		
		$log_network = titanium_network_changelog();
    
		$title = "Where is the author of PHP-Nuke Titanium?";
	  	OpenWaldoHeaderTable();
		echo $log_ghost;
	    CloseChangeLogHeaderTable();
		
		$title = $domain." - PHP-Nuke Titanium v".NUKE_TITANIUM." Change Log";
		OpenChangeLogTable();
		echo $log_titanium;
		CloseChangeLogTable();

        if ($domain != 'cvs.86it.us')
		{
	       if($download = titanium_get_download()) 
		   {
             $log_network .= "<hr><strong><a href='".$download."' target=\"_tab\">Download PHP-Nuke Tianium v".$ret_ver."</a></strong>"; 
           }

		  $title = "cvs.86it.us - PHP-Nuke Titanium v".$ret_ver." Change Log";
		  OpenChangeLogTable();
		  echo $log_network;
		  CloseChangeLogTable();
		}
        echo "<center>";
    }
    //echo "<br /><br /><strong><a href='".$admin_file.".php'>"._TRACKER_BACK."</a></strong>";
    echo "</center>";
}

?>