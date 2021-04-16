<?php
/*========================================================================================
 PHP-Nuke Titanium: Enhanced PHP-Nuke Web Portal System
 =========================================================================================*/
/*****[CHANGES]****************************************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/29/2005
      Theme Management                         v1.0.2       12/14/2005       
	  Page Loading Animation                   v1.0.0       10/09/2009       
 ********************************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

$ThemeSel = basename(dirname(__FILE__));

/*****[BEGIN]******************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/
include_once(NUKE_THEMES_DIR.$ThemeSel.'/theme_info.php');
/*****[END]********************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/************************************************************/
global $ThemeInfo, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $textcolor1, $textcolor2;

$bgcolor1 = $ThemeInfo['bgcolor1'];
$bgcolor2 = $ThemeInfo['bgcolor2'];
$bgcolor3 = $ThemeInfo['bgcolor3'];
$bgcolor4 = $ThemeInfo['bgcolor4'];
$textcolor1 = $ThemeInfo['textcolor1'];
$textcolor2 = $ThemeInfo['textcolor2'];

/*****[BEGIN]******************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/
include_once(NUKE_THEMES_DIR.$ThemeSel.'/tables.php');
/*****[END]********************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/


/************************************************************/
/* Function FormatStory()                                   */
/************************************************************/
function FormatStory($thetext, $notes, $swf, $suspect,  $aid, $informant) 
{
    global $anonymous, $domain;

	if (!empty($notes)){$notes = "<br /><br /><strong>"._NOTE."</strong> <i>$notes</i>\n";} 
	else{$notes = "";}
    
	//Theghost added Mug Shot for the MyNetworkSpace Network
    if ($suspect =='none.png'){ $suspect = "<hr /><NO RESIZE><img src=\"http://".$domain."/images/stories/$suspect\ width=\"1\" height=\"1\"></NO RESIZE>\n";}
	else{$suspect = "<hr /><NO RESIZE><img src=\"http://".$domain."/images/stories/".$suspect."\"></NO RESIZE><hr />\n";}
    
	if ($aid == $informant) 
	{
        echo "<span class=\"content\" color=\"#505050\">$thetext$notes</span>\n";
    } 
	else 
	{
        if(defined('WRITES')) 
		{
            if(!empty($informant)) 
			{
                if(is_array($informant)) 
				{
                    $boxstuff = "<a href=\"http://".$domain."/modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> ";
                } 
				else 
				{
                    $boxstuff = "<a href=\"http://".$domain."/modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
                }
            } 
			else 
			{
                $boxstuff = "$anonymous ";
            }
            
			$boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
        } 
		else 
		{
            $boxstuff .= "$thetext$notes\n";
        }

        echo "<span class=\"content\" color=\"#505050\">$boxstuff</span>\n";
    }
}

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/
function themeheader() 
{
	echo "<meta name=\"header-start\">";
	global $ThemeSel, $domain, $screen_res, $user, $cookie, $prefix, $textcolor1, $textcolor2, $sitekey, $db, $name, $banners, $op;
/**********************************************************************************************************************************/	
    echo "<HTML>\n";
    echo "<HEAD>\n"; 
    echo "<meta http-equiv=\"Content-Language\" content=\"en-us\">\n";
	echo "<LINK REL=\"StyleSheet\" HREF=\"themes/".$ThemeSel."/style/style.css\" TYPE=\"text/css\">\n\n\n"; 
    echo "</head>\n\n\n";     	

    echo "<body style=\"background-color:0E1B25\" topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n";
?>
     <style type="text/css">
<!--
#rr {
	color: #FFF;
}
-->
     </style>
     
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="themes/<?=$ThemeSel?>/images/Hm.png">
  <tr>
    <td width="493" rowspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="58" rowspan="2" valign="top"><img src="themes/<?=$ThemeSel?>/images/H1.png" width="58" height="156"></td>
          <td width="435" height="37" valign="top"><img src="themes/<?=$ThemeSel?>/images/H2.png" width="435" height="37"></td>
        </tr>
        <tr>
          <td height="119" valign="top">     </td>
        </tr>
        <tr>
          <td height="115" colspan="2" valign="top"><table width="493" border="0" cellpadding="0" cellspacing="0" background="themes/<?=$ThemeSel?>/images/H3.png">
              <tr>
                <td width="46" height="66">&nbsp;</td>
                <td width="367"></td>
                <td width="80"></td>
              </tr>
              <tr>
                <td height="49"></td>
                <td valign="top" class="style3"> 
                <marquee  style="color:<?=$textcolor1?>" class="style3" scrolldelay="50" scrollamount="1"> 
                Thank you for visiting <?=$domain?> ::: Enjoy your stay! ::: This themes original design was done by destinedezines.com ::: we re-designed and re-created the entire theme so that it would work here on the 86it Social Network!!!
                </marquee>
                </td>
              <td ></td>
              </tr>
          </table></td>
        </tr>
    </table></td>
    <td width="100%" rowspan="3" align="center" valign="top">
    <IMG SRC="themes/<?=$ThemeSel?>/header/spacer.png" WIDTH="1" HEIGHT="51"><br />
   
   <?
 
   //$ads = ads(0);
   
   if(empty($ads)) 
   {
     //echo "<a href=\"index.php\" target=\"_self\">\n";
     //echo "<img src=\"themes/".$ThemeSel."/header/nukestyle-hd_banner.png\" border=\"0\" alt='' title='' width=\"472\" height=\"74\"></a>";
   }
   else
   {
     // echo "$ads";
   }
   
   ?>
   
        <br /><IMG SRC="themes/<?=$ThemeSel?>/header/spacer.png" WIDTH="1" HEIGHT="70"><br />
    
        </td>
        <td width="154" rowspan="2" valign="top"><img src="themes/<?=$ThemeSel?>/images/H4.png" width="154" height="156"></td>
        <td width="128" height="33" valign="top"><img src="themes/<?=$ThemeSel?>/images/H6.png" width="128" height="33"></td>
        <td width="37" rowspan="2" valign="top"><img src="themes/<?=$ThemeSel?>/images/H8.png" width="37" height="156"></td>
        </tr>
        <tr>
        <td height="123" valign="top">              </td>
        </tr>
        <tr>
        <td height="115" colspan="3" valign="top"><table width="319" border="0" cellpadding="0" cellspacing="0" background="themes/<?=$ThemeSel?>/images/H7.png">
        <tr>
        <td width="164" height="66">&nbsp;</td>
        <td width="110">&nbsp;</td>
        <td width="45">&nbsp;</td>
        </tr>
        <tr>
        <td height="49">&nbsp;</td>
        <td align="center" valign="top">
		
		<script>
        var mydate=new Date()
        var year=mydate.getYear()
        if (year < 1000)
        year+=1900
        var day=mydate.getDay()
        var month=mydate.getMonth()+1
        if (month<10)
        month="0"+month
        var daym=mydate.getDate()
        if (daym<10)
        daym="0"+daym
        document.write("<small><font color='<?=$textcolor1?>' face='Arial'><b>"+month+"/"+daym+"/"+year+"</b></font></small>")
        </script>
        
        </td>
        <td></td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <?
		    
			
//LEFT SIDE BACKGROUND
echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
    ."<td width=\"37\" valign=\"top\" background=\"themes/".$ThemeSel."/sides/left.png\"><img src=\"themes/".$ThemeSel."/sides/left.png\" width=\"37\" height=\"1\" border=\"0\"></td>\n"
	."<td width=\"165\" valign=\"top\">\n";

echo "<script language=\"javascript\" src=\"js/theghostwashere.js\"></script>\n";
			
	if(blocks_visible('left')) 
	{
		global $fuckyou, $file;
	    if ( ($op =="info") or ($file =="arcade") or ($op =="newsletter") or ($op =="messages") )
		{
            $fuckyou = "yes";
		}
		else
		{
			$fuckyou = "no";
			blocks('left');
		}
    } 
	else 
	{

    }
   
   //this controls the gap between the left block and the left side of the center table!!!
    echo "</td>\n"
    	."<td><img src=\"themes/".$theme_name."/images/spacer.png\" width=\"7\" height=\"0\" border=\"0\" alt=\"\"></td>\n"
    	."<td width=\"100%\">\n";
		
	echo "<meta name=\"header-end\">";
}


/************************************************************/
/* Function themefooter()                                   */
/************************************************************/
function themefooter() 
{
    global $ThemeSel, $banners, $op;
global $index, $user, $banners, $cookie, $prefix, $dbi, $db, $admin, $adminmail, $total_time, $start_time, $foot1, $foot2, $foot3, $foot4, $nukeurl, $ip, $theme_name, $ThemeInfo;
    
	
$showsub = "<FORM action=modules.php?op=modload&amp;name=Newsletter&amp;file=index&amp;func=action method=post><font class=copyright>&nbsp;<b>Email</b><br>&nbsp;<INPUT maxLength=100 size=20 class=\"sub\" name=new_email value=\"Your Email\" onFocus=\"if(this.value=='Your Email')this.value='';\" value style=\"width:150;height:18;FONT-SIZE: 9px;\"><BR><BR>&nbsp;<SELECT name=new_sub><OPTION value=sub selected>Subscribe<OPTION value=unsub>Unsubscribe</OPTION></SELECT><BR><BR>&nbsp;<SELECT name=new_type><OPTION value=0 selected>Text<OPTION value=1>HTML</OPTION></SELECT><br><br>&nbsp;<INPUT type=image class=\"liteoption1\" value=Submit src=\"themes/".$theme_name."/images/submit.gif\" border=\"0\"></font></FORM>";	
	
$maxshow = 10;	// Number of downloads to dispaly in the block.
$a = 1;
$result = $db->sql_query("select lid, title, hits from ".$prefix."_links_links order by date DESC limit 0,$maxshow");

while(list($lid, $title, $hits) = $db->sql_fetchrow($result)) 
{
    $title2 = preg_replace("/_/", " ", "$title");
    $show .= "&nbsp;&nbsp;&nbsp;$a: <a href=\"modules.php?name=Web_Links&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$title\">$title2</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class=\"content\">$hits<font class=\"copyright\"> times<br>";
     $showlinks = " <A name= \"scrollingCode\"></A><MARQUEE behavior= \"scroll\" align= \"left\" direction= \"up\" width=\"99\" height=\"101\" scrollamount= \"2\" scrolldelay= \"30\" onmouseover='this.stop()' onmouseout='this.start()'>$show";

$a++; 
}
$db->sql_freeresult($result);

global $prefix, $db;

$a = 1;
$sql = "SELECT lid, title FROM ".$prefix."_nsngd_downloads ORDER BY hits DESC LIMIT 0,20";
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result)) 
{
    $title2 = ereg_replace("_", " ", $row[title]);
	$$content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Downloads&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]&amp;title=$row[title]\"><img src=\"themes/".$theme_name."/images/hole.gif\" border=0></a> $a: <a href=\"modules.php?name=Downloads&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]&amp;title=$row[title]\">$title2</a></span><br>";
	 $showdl = " <font class=copyright>&nbsp;</b><br>&nbsp;<A name= \"scrollingCode\"></A><MARQUEE behavior= \"scroll\" align= \"left\" direction= \"up\" width=\"168\" height=\"109\" scrollamount= \"2\" scrolldelay= \"30\" onmouseover='this.stop()' onmouseout='this.start()'>$content";
    $a++; 
}

$db->sql_freeresult($result);




//this is where i control the gap between the right block and the right side of the center block   
	echo "</td>\n"
	    ."<td><img src=\"themes/".$theme_name."/images/spacer.png\" width=\"7\" height=\"15\" border=\"0\" alt=\"\"></td>\n"
	    ."<td valign=\"top\" background=\"themes/".$theme_name."/sides/rightbbg.png\" width=\"21\">\n";
	

    if(blocks_visible('right')) 
    {
		global $fuckyou;
	    if ( ($op =="info") or ($fuckyou =="yes") or ($op =="newsletter") or ($op =="messages") )
        {

		
		}
		else
		{
           echo"</td>"
           . "<td width=\"170\" valign=\"top\">";

           blocks('right');

		}
    }
	 
echo"</td>"
  . "<td width=\"37\" valign=\"top\" background=\"themes/".$theme_name."/sides/right.png\"><img src=\"themes/".$theme_name."/sides/right.png\" width=\"37\" height=\"1\"></td>"
  . "</tr>"
  . "</table>";
    
echo"<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/".$theme_name."/images/Fm.png\">"
  . "<tr>"
  . "<td width=\"557\" height=\"89\" valign=\"top\"><img src=\"themes/".$theme_name."/images/F1.png\" width=\"557\" height=\"89\">"
  ."</td>"
  . "<td width=\"100%\" rowspan=\"2\" valign=\"top\"><img src=\"themes/".$theme_name."/images/Fspace.png\" width=\"145\" height=\"226\"></td>"
  . "<td width=\"235\" rowspan=\"2\" valign=\"top\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">"
  . "<tr>"
  . "<td height=\"141\" colspan=\"2\" valign=\"top\"><table width=\"198\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/".$theme_name."/images/Flinks.png\">"
  . "<tr>"
  . "<td width=\"52\" height=\"40\">&nbsp;</td>"
  . "<td width=\"99\">&nbsp;</td>"
  . "<td width=\"47\">&nbsp;</td>"
  . "</tr>"
  . "<tr>"
  . "<td height=\"101\">&nbsp;</td>"
  . "<td valign=\"top\" class=\"style4\">$showlinks</td>"
  . "<td>&nbsp;</td>"
  . "</tr>"
  . "</table></td>"
  . "<td width=\"37\" rowspan=\"2\" valign=\"top\"><img src=\"themes/".$theme_name."/images/F4.png\" width=\"37\" height=\"195\"></td>"
  . "</tr>"
  . "<tr>"
  . "<td height=\"54\" colspan=\"2\" valign=\"top\"><img src=\"themes/".$theme_name."/images/F2.png\" width=\"198\" height=\"54\"></td>"
  . "</tr>"
  . "<tr>"
  . "<td width=\"129\" height=\"31\" valign=\"top\"><img src=\"themes/".$theme_name."/images/F3.png\" width=\"129\" height=\"31\"></td>"
  . "<td colspan=\"2\" valign=\"top\"><a href=\"http://destinedesigns.com\"><img src=\"themes/".$theme_name."/images/DD.png\" alt=\"Destine Designs\" width=\"106\" height=\"31\" border=\"0\"></a></td>"
  . "</tr>"
  . "<tr>"
  . "<td height=\"1\"></td>"
  . "<td width=\"69\"></td>"
  . "<td></td>"
  . "</tr>"
  . "</table></td>"
  . "</tr>"
  . "<tr>"
  . "<td height=\"138\" valign=\"top\"><table width=\"557\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/".$theme_name."/images/Fbanner.png\">"
  
  . "<td width=\"39\" height=\"14\"></td>"
  . "<td width=\"100%\"></td>"
  . "<td height=\"93\"></td>"
  . "<td align=\"center\" valign=\"middle\">";
  

    		

echo "</td>"
   . "<tr>"
   . "<td height=\"30\">" 
   . "</td>"
   . "<td>"
   . "</td>"
   . "</tr>"
   . "</table>"
    ."</td>"
   . "</tr>"
   . "</table>";

   echo "<center>";
   footmsg();
   echo "</center>";
   
}


/************************************************************/
/* Function theme_blog_index()                              */
/* This function format the stories on the Homepage         */
/************************************************************/
function themeindex($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext, $writes = false) 
{
    global $anonymous, $tipath, $theme_name, $sid, $ThemeSel, $nukeurl, $customlang;
    
    if (!empty($topicimage)):
        $t_image = (file_exists(xtremev3_images_dir.'topics/'.$topicimage)) ? xtremev3_images_dir.'topics/'.$topicimage : $tipath.$topicimage;
        $topic_img = '<td class="col-3 extra" style="text-align:center;"><a href="modules.php?name=Blog&new_topic='.$topic.'">';
		$topic_img .= '<img src="'.$t_image.'" border="0" alt="'.$topictext.'" title="'.$topictext.'"></a></td>';
    else:
        $topic_img = '';
    endif;

    $notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : '';
    $content = '';

    if ($aid == $informant):
        $content = $thetext.$notes;
    else: 

        if ($writes):

            if (!empty($informant)) :
                $content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
            else:
                $content = $anonymous.' ';
            endif;
               $content .= _WRITES.' '.$thetext.$notes;
        else:
               $content .= $thetext.$notes;
        endif;
    endif;

    $posted = sprintf($customlang['global']['posted_by'], get_author($aid), $time);
    $datetime = substr($morelink, 0, strpos($morelink, '|')-strlen($morelink));
    $morelink = substr($morelink, strlen($datetime)+2);
    $reads = '( <span style="color: yellow;">'.$customlang['global']['reads'].'</span>: <span style="color: red;">'.$counter.'</span> )';

    global $sitename, $pagetitle;
	$pagetitle = $sitename.' » '.$title;

   OpenTableModule();
   
 echo '<div align="left" id="text">'.''.$title.'</div><p>';
print '<div align="left" id="text">';
print '<hr>'.$content.'<hr></div>';	

print '<div align="right">'.$posted.'<img src="themes/'.$theme_name.'/images/invisible_pixel.gif" alt="" width="4" height="1" border="0" /><br />'.$datetime.' '.$topictext.' | '.$morelink.' '.$reads.'<img src="themes/'.$theme_name.'/images/invisible_pixel.gif" alt="" width="4" height="1" border="0" /></div>';
CloseTable();
  //echo "<br />";
}

/************************************************************/
/* Function theme_blog_article()                            */
/************************************************************/
function themearticle($aid, $informant, $datetime, $title, $counter, $thetext, $topic, $topicname, $topicimage, $topictext, $writes = false)
{
    global $admin, $sid, $tipath, $theme_name, $appID, $my_url;
    global $digits_color, $digits_txt_color;

echo "\n\n<!-- function themearticle START -->\n";

    global $sitename, $pagetitle;
	$pagetitle = $sitename.' » '.$title;

   OpenTableModule();

if (!empty($topicimage)) 
{
 $t_image = (file_exists(theme_images_dir.'topics/'.$topicimage)) ? theme_images_dir.'topics/'.$topicimage : $tipath.$topicimage;
 $topic_img = '<td width="25%" align="center" class="extra"><a href="modules.php?name=Blog&new_topic='.$topic.'"><img src="'.$t_image.'" border="0" alt="'.$topictext.'" title="'.$topictext.'"></a></td>';
	} 
	else 
	$topic_img = '';
	
	$notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : '';
	$content = '';
	
	if ($aid == $informant) 
	    $content = $thetext.$notes;
	else 
	{
		if ($writes)
		{
			if (!empty($informant)) 
			{
				$content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
			}
			else 
				$content = $anonymous.' ';
			
			$content .= _WRITES.' '.$thetext.$notes;
		} 
		else 
			$content .= $thetext.$notes;
	}

$posted = _POSTEDON.' '.$datetime.' '._BY.' ';
$posted .= get_author($aid);
$reads = '( <span style="color: '.$digits_txt_color.';">Reads</span>: <span style="color: '.$digits_color.';">'.$counter.'</span> )';

global $sitename, $pagetitle;
$pagetitle = $sitename.' » '.$title;

echo '<table class="emiddleflames" border="0" align=center cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';

echo '<td background="themes/'.$theme_name.'/center/left_side.gif"><img name="leftside" src="themes/'.$theme_name.'/center/invisible_pixel.gif" width="1" height="1" border="0" alt=""></td>';

//this is where we add the class name for the innermost cell of the 2 tables - top glass and bottom flame repeat-x
echo '<td id="middlebg" class="themearticleflames" height"0" valign="top" >';
//title
echo '<div align="left" id="locator" class="title"><img src="themes/'.$theme_name.'/images/invisible_pixel.gif" alt="" width="4" height="1" border="0" /><strong>'.$title.'</strong><br /></div>';

//content
echo '<div align="left" id="text">';
echo '<hr />'.$content.'<hr /></div>';

echo "\n\n<!-- facebook functions START -->\n";
facebook_likes();
facebook_comments();
echo "<!-- facebook functions END -->\n\n\n";
	
echo '<div align="right">'.$posted.'<img src="themes/'.$theme_name.'/images/invisible_pixel.gif" alt="" width="4" height="1" border="0" /><br />'.$reads.'<img src="themes/'.$theme_name.'/images/invisible_pixel.gif" alt="" width="1" height="1" border="0" /></div>';

echo '</td>';
echo '</table>';

echo '<div align="center" style="padding-top:6px;">';
echo '</div>';

//invisible spacer for tables instead of <br/>
//echo '<table>';
//echo '<tr>';
// space between article and comments table
//echo '<td style="width: 1px;" valign ="top"><img src="themes/'.$theme_name.'/images/invisible_pixel.gif" alt="" width="1" height="5" border="0" /></td>';
//echo '</tr>';
//echo '</table>';

echo "\n<!-- function themearticle END -->\n\n\n";

    CloseTable();
   // echo "<br />";
}
###
###
###
/************************************************************/
/* Function theme_music_index()                             */
/* This function format the stories on the Homepage         */
/************************************************************/
function theme_music_index ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $swf, $suspect, $fixwidth, $center_topic_and_title, $morelink, $topicname, $topicimage, $topictext) 
{
    global $anonymous, $tipath, $ThemeSel, $sid, $domain, $rating, $name;
#########################################################################
# Table Header Module     Fix Start - by TheGhost   v1.0.0     01/30/2012
#########################################################################
  global $pagetitle;
  $pagetitle = "Titanium Tunes";
  OpenTableModule();
#########################################################################
# Table Header Module     Fix End  - by TheGhost   v1.0.0     01/30/2012
#########################################################################
	$ThemeSel = get_theme();

    # Module Name
    $name="Music";
	
	# Topic Icon
	if(!empty($topicimage)) { if (file_exists("themes/$ThemeSel/images/topics/$topicimage")){ $t_image = "themes/$ThemeSel/images/topics/$topicimage";}
	else {$t_image = "$tipath$topicimage";}
	$topic_img = "<a href=\"http://".$domain."/modules.php?name=".$name."&amp;new_topic=".$topic."\"><img src=\"".$t_image."\" border=\"0\" alt=\"$topictext\" /></a>";} 
	else {$topic_img = "";}	if (!empty($notes)){$notes = "<br /><br /><strong>"._NOTE."</strong> $notes\n";}else{$notes = "";}

    # Image Hack
    if ($suspect =='none.gif')
	$suspect = "<center><img src=\"http://".$domain."/upload/upu/files/none.gif\" width=0 height=0></center>\n";
	else
    $suspect = "<center><NO RESIZE><img src=\"http://".$domain."/upload/upu/files/$suspect\"></NO RESIZE></center><hr>\n";

    # define $content 
	$content = '';
	
	# notes
    if ($aid == $informant){$content = "$thetext$notes\n";}
	else{if(defined('WRITES')){
	if(!empty($informant)){
	if(is_array($informant)){
	$content = "<a href=\"http://".$domain."/modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> ";}
	else
	{$content = "<a href=\"http://".$domain."/modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";}}
	else
	{$content = "$anonymous ";}$content .= _WRITES." \"$thetext\"$notes\n";}else{$content .= "$thetext$notes\n";}}

    # posted by
    $posted = _POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time  ";
    $datetime = substr($morelink, 0, strpos($morelink, "|") - strlen($morelink));
    $morelink = substr($morelink, strlen($datetime) + 2);

    # header
    echo "<center><b>[ Titanium Collection</b> &raquo; <a href=\"http://music.86it.us/modules.php?name=$name&amp;new_topic=$topic\"><font color=\"#CC0000\">$topictext</font></a> <b>] [ Song</b> &raquo; <font color=\"#CC0000\">$title </font><b>]</center></b>";
	echo "<hr>";

   if ($swf == "none.swf")
   {
     echo $suspect;
     echo "<br />";
     echo "<center>$content</center>";
     echo "<br />";
     echo "<center>".$posted."</center>";
     echo "<br />";
     echo "<hr>";
   }
   else
      {
        ?>
        <br />
        <center>
        <script type='text/javascript' src='includes/js/jwplayer.js'></script>
 
        <div id='mediaspace'>This text will be replaced</div>
 
        <script type='text/javascript'>
        <!--\n
        jwplayer('mediaspace').setup({
       'flashplayer': 'players/jsplayer.swf',
       'file': 'http://upload.86it.us/user/<?=$aid?>/<?=$swf?>',
       'image': 'http://upload.86it.us/user/<?=$aid?>/<?=$swf?>.png',
       'controlbar': 'bottom',
       'width': '640',
       'height': '480'
       });
       //-->
       </script>      
       </center>

       <br />
       <hr>
       <center><?=$content?></center>
       <br />
       <center><?=$posted?></center>
       <br />
       <hr>
      <?
     }
/**********************************************************************************************************************************************************/   
include(NUKE_THEMES_DIR.$ThemeSel.'/includes/plugin_facebook_music_likes.php');
/**********************************************************************************************************************************************************/   
include(NUKE_THEMES_DIR.$ThemeSel.'/includes/plugin_facebook_music_comments.php');
/**********************************************************************************************************************************************************/   
echo '<hr>';
echo "<b>$datetime ) (<font color=\"#000000\"><b>$title</b></font> $morelink <font color=\"#000000\">This has been read</font> <font color=\"$textcolor2\">$counter</font> <font color=\"#000000\">times.</font></b>";
CloseTable();
echo "<br />";

}




/************************************************************/
/* Function theme_music_article()                           */
/************************************************************/
function theme_music_article ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext, $swf, $suspect, $fixwidth, $center_topic_and_title) 
{
    global $admin, $sid, $tipath, $ThemeSel, $domain, $name, $fb_title;
#########################################################################
# Table Header Module     Fix Start - by TheGhost   v1.0.0     01/30/2012
#########################################################################
  global $pagetitle;
  $pagetitle = "Titanium Tunes";
  OpenTableModule();
#########################################################################
# Table Header Module     Fix End  - by TheGhost   v1.0.0     01/30/2012
#########################################################################
    $ThemeSel = get_theme();
/**********************************************************************************************************************************************************/       
    $posted = _POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $datetime  ";
    
    

/**********************************************************************************************************************************************************/      
    $name="Music";
/**********************************************************************************************************************************************************/   	
	if(!empty($topicimage)) {
        if (file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
            $t_image = "themes/$ThemeSel/images/topics/$topicimage";
        } else {
            $t_image = "$tipath$topicimage";
        }
        $topic_img = "<a href=\"http://".$domain."/modules.php?name=".$name."&amp;new_topic=".$topic."\"><img src=\"".$t_image."\" border=\"0\" alt=\"$topictext\" /></a>";
    } else {
        $topic_img = "";
    }
/**********************************************************************************************************************************************************/   	
	if (!empty($notes))	{ $notes = "<br /><br /><strong>"._NOTE."</strong> <i>$notes</i>\n"; } else { $notes = ''; }
/**********************************************************************************************************************************************************/       
    if ( isset($_POST['file1']['filename']) && !empty($_POST['file1']['filename']) )  
    {
       $suspect = $_POST['file1']['filename'];
    } 
/**********************************************************************************************************************************************************/   
    if ($suspect =='none.gif')
	$suspect = "<center><img src=\"http://".$domain."/upload/upu/files/none.gif\" width=0 height=0></center>\n";
	else
    $suspect = "<center><NO RESIZE><img src=\"http://".$domain."/upload/upu/files/$suspect\"></NO RESIZE></center><hr>\n";
/**********************************************************************************************************************************************************/   	
    if ( isset($_POST['file2']['filename']) && !empty($_POST['file2']['filename']) )  
    {
       $swf = $_POST['file2']['filename'];
    } 
    else 
    {
      $swf = Fix_Quotes($swf);
    }
/**********************************************************************************************************************************************************/   
    $content = '';
/**********************************************************************************************************************************************************/   
    if ($aid == $informant) { $content = "$thetext$notes\n"; } else { if(defined('WRITES')) { if(!empty($informant)) {
    if(is_array($informant)) { $content = "<a href=\"http://".$domain."/modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> "; } 
	else { $content = "<a href=\"http://".$domain."/modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> "; }} else { $content = "$anonymous "; }
    $content .= ""._WRITES." <i>\"$thetext\"</i>$notes\n"; } else { $content .= "$thetext$notes\n"; }}
/**********************************************************************************************************************************************************/   	
    echo "<center><b>[ Titanium Collection</b> &raquo; <a href=\"http://music.86it.us/modules.php?name=$name&amp;new_topic=$topic\"><font color=\"#CC0000\">$topictext</font></a> <b>] [ Song</b> &raquo; <font color=\"#CC0000\">$title </font><b>]</center></b>";
	echo "<hr>";
/**********************************************************************************************************************************************************/   
   if ($swf == "none.swf")
   {
     echo $suspect;
     echo "<br />";
     echo "<center>$content</center>";
     echo "<br />";
     echo "<center>".$posted."</center>";
     echo "<br />";
     echo "<hr>";
   }
   else
      {
        ?>
        <br />
        <center>
        <script type='text/javascript' src='includes/js/jwplayer.js'></script>
 
        <div id='mediaspace'>This text will be replaced</div>
 
        <script type='text/javascript'>
        <!--\n
        jwplayer('mediaspace').setup({
       'flashplayer': 'players/jsplayer.swf',
       'file': 'http://upload.86it.us/user/<?=$aid?>/<?=$swf?>',
       'image': 'http://upload.86it.us/user/<?=$aid?>/<?=$swf?>.png',
       'controlbar': 'bottom',
       'width': '640',
       'height': '480'
       });
       //-->
       </script>      
       </center>

       <br />
       <hr>
       <center><?=$content?></center>
       <br />
       <center><?=$posted?></center>
       <br />
       <hr>
      <?
     }
/**********************************************************************************************************************************************************/   
include(NUKE_THEMES_DIR.$ThemeSel.'/includes/plugin_facebook_music_likes.php');
/**********************************************************************************************************************************************************/   
include(NUKE_THEMES_DIR.$ThemeSel.'/includes/plugin_facebook_music_comments.php');
/**********************************************************************************************************************************************************/   
echo '<hr>';
echo "<b>( <font color=\"#000000\"><b>$title</b></font> $morelink )</b>";
CloseTable();
echo "<br />";
}





function themecenterbox($title, $content) 
{
    global $sitename, $ThemeSel, $textcolor1;
    global $ThemeSel, $main_blocks_table_width;

    OpenTable();
    echo '<center><span class="option"><strong>'.$title.'</strong></span></center><br />'.$content;
    CloseTable();

}

function themepreview($title, $hometext, $bodytext='', $notes='', $swf='', $suspect='') 
{
    echo '<strong>'.$title.'</strong><br /><br />'.$hometext;

    if (!empty($bodytext)) 
	{
        echo '<br /><br />'.$bodytext;
    }
    
	if (!empty($notes)) 
	{
        echo '<br /><br /><strong>'._NOTE.'</strong> <i>'.$notes.'</i>';
    }
}
/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/
function themesidebox($title, $content, $bid=0) 
{
    global $ThemeSel, $main_blocks_table_width, $textcolor1;

?>
    <table class=blockz cellSpacing="0" cellPadding="0" border="0" width="249">
     <tr>
     <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$ThemeSel?>/tables/OpenTable/leftcorner.png" border="0" width="39" height="50"></td>
     <td width="100%" align="center" background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png">
     <IMG SRC="themes/<?=$ThemeSel?>/header/spacer.png" WIDTH="1" HEIGHT="10"><br />
     <font color="<?=$textcolor1?>"><b><?=$title?></b></font></td>
     <td>
     <img src="themes/<?=$ThemeSel?>/tables/OpenTable/rightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     <tr>
     <td colSpan="3">
     <table cellSpacing="0" cellPadding="0" width="100%" border="0">
     <tr>
     <td width="23" height="3" background="themes/<?=$ThemeSel?>/tables/OpenTable/leftside.png">
     <img src="themes/<?=$ThemeSel?>/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>
     <td width="100%"> 
     <table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">
     <tr>
     <td width="<?=$main_blocks_table_width?>"><?=$content?></td>
     </tr>
     </table>
     </td>
     <td width="23" height="3" background="themes/<?=$ThemeSel?>/tables/CloseTable/rightside.png">
     <img src="themes/<?=$ThemeSel?>/tables/CloseTable/rightside.png" border="0" width="23" height="3"></td>
     </tr>
     </table>
     </td>
     </tr>
     <tr>
     <td background="themes/<?=$ThemeSel?>/tables/CloseTable/bottommiddle.png">
     <img src="themes/<?=$ThemeSel?>/tables/CloseTable/leftbottomcorner.png" border="0" width="39" height="50"></td>
     <td width="<?=$main_blocks_table_width?>" align="center" background="themes/<?=$ThemeSel?>/tables/CloseTable/bottommiddle.png"><img src="themes/<?=$ThemeSel?>/tables/CloseTable/bottommiddle.png" alt="" width="39" height="50" border="0" /></td>
     <td>
     <img src="themes/<?=$ThemeSel?>/tables/CloseTable/bottomrightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     </table>
     <br>
<?

}


function surveysidebox($title, $content, $bid=0) 
{
    global $ThemeSel, $main_blocks_table_width;

  /* echo"<style type=\"text/css\">"
     . "<!--"
     . ".style1 {"
     . "color: #FFFFFF;"
     . "font-weight: bold;"
     . "}"
     . "-->"
     . "</style>"
     . "<table class=block cellSpacing=\"0\" cellPadding=\"0\" border=\"0\" width=\"$main_blocks_table_width\">"
     . "<tr>"
     . "<td background=\"themes/$ThemeSel/tables/OpenTable/topmiddle.png\">"
     . "<img src=\"themes/$ThemeSel/tables/OpenTable/leftcorner.png\" border=\"0\" width=\"39\" height=\"50\"></td>"
     . "<td width=\"$main_blocks_table_width\" align=\"center\" background=\"themes/$ThemeSel/tables/OpenTable/topmiddle.png\"><div class=\"typeface-js\" style=\"font-family: Helvetiker\"><span class=\"style1\">$title</span></div></td>"
     . "<td>"
     . "<img src=\"themes/$ThemeSel/tables/OpenTable/rightcorner.png\" border=\"0\" width=\"39\" height=\"50\"></td>"
     . "</tr>"
     . "<tr>"
     . "<td colSpan=\"3\">"
     . "<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\">"
     . "<tr>"
     . "<td width=\"15\" background=\"themes/$ThemeSel/tables/OpenTable/leftside.png\">"
     . "<img src=\"themes/$ThemeSel/tables/OpenTable/leftside.png\" border=\"0\" width=\"15\" height=\"4\"></td>"
     . "<td width=\"100%\" >"
     . "<table cellSpacing=\"0\" cellPadding=\"8\" width=\"100%\" border=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">"
     . "<tr>"
     . "<td width=\"$main_blocks_table_width\">"
     . "$content         </td>"
     . "</tr>"
     . "</table>"
     . "</td>"
     . "<td width=\"15\" background=\"themes/$ThemeSel/tables/CloseTable/rightside.png\">"
     . "<img src=\"themes/$ThemeSel/tables/CloseTable/rightside.png\" border=\"0\" width=\"15\" height=\"4\"></td>"
     . "</tr>"
     . "</table>"
     . "</td>"
     . "</tr>"
     . "<tr>"
     . "<td width=\"39\" height=\"52\">"
     . "<img src=\"themes/$ThemeSel/tables/CloseTable/leftbottomcorner.png\" border=\"0\" width=\"39\" height=\"52\"></td>"
     . "<td width=\"$main_blocks_table_width\" height=\"27\" background=\"themes/$ThemeSel/tables/CloseTable/bottommiddle.png\">        </td>"
     . "<td width=\"39\" height=\"27\">"
     . "<img src=\"themes/$ThemeSel/tables/CloseTable/bottomrightcorner.png\" border=\"0\" width=\"39\" height=\"52\"></td>"
     . "</tr>"
     . "</table>"
     . "<br>";
	 */
}
?>