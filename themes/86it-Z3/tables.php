<?php
/*=======================================================================================
 PHP-Nuke Titanium : Enhanced PHP-Nuke Web Portal System : Using the Nuke-Evolution Core
 ========================================================================================*/
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
{
    exit('Access Denied');
}

$theme_name = basename(dirname(__FILE__));

/********************************************************************************************************************************************************/
function MusicTopicsExtendedOpen() 
{
  global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor2, $pagetitle;

  ?>
     <table class=blockz cellSpacing="0" cellPadding="0" border="0" width="100%">
     <tr>
     <td background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftcorner.png" border="0" width="39" height="50"></td>
     <td valign="bottom" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png"><span class="style1">
     <center><strong><font color ="<?=$textcolor1?>"> <?=$pagetitle?></font></strong></center></span></td>
     <td align="right" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/rightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     <tr>
     <td colSpan="3">
     <table cellSpacing="0" cellPadding="0" width="100%" border="0">
     <tr>
     <td width="23" height="3" background="themes/<?=$theme_name?>/tables/OpenTable/leftside.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>
     <td width="100%"> 
     <table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">
     <tr>
     <td width="100%">
  <?  
}

    
function MusicTopicsExtendedClose() 
{
        global $theme_name, $screen_res, $screen_width, $screen_height;
		
 global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor2, $pagetitle; 

    ?>
     </td>
     </tr>
     </table>
     </td>
     <td width="23" height="3" background="themes/<?=$theme_name?>/tables/CloseTable/rightside.png">
     <img src="themes/<?=$theme_name?>/tables/CloseTable/rightside.png" border="0" width="23" height="3"></td>
     </tr>
     </table>
     </td>
     </tr>
     <tr>
     <td background="themes/<?=$theme_name?>/tables/CloseTable/bottommiddle.png">
     <img src="themes/<?=$theme_name?>/tables/CloseTable/leftbottomcorner.png" border="0" width="39" height="50"></td>
     <td align="center" background="themes/<?=$theme_name?>/tables/CloseTable/bottommiddle.png"><span class="style1"></span></td>
     <td align="right" background="themes/<?=$theme_name?>/tables/CloseTable/bottommiddle.png">
     <img src="themes/<?=$theme_name?>/tables/CloseTable/bottomrightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     </table>
     <br/>
	<?
}

#########################################################################
# Table Header Message Fix Start - by TheGhost   v1.0.0     01/30/2012
#########################################################################
function OpenTableSurvey($title='')
{
  global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor1, $sitename;

  ?>
     <table class=blockz cellSpacing="0" cellPadding="0" border="0" width="100%">
     <tr>
     <td background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftcorner.png" border="0" width="39" height="50"></td>
     <td valign="bottom" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png"><span class="style1">
     <center><strong><font color ="<?=$textcolor1?>"> <?=$sitename?> » <?=$title?></font></strong></center></span></td>
     <td align="right" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/rightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     <tr>
     <td colSpan="3">
     <table cellSpacing="0" cellPadding="0" width="100%" border="0">
     <tr>
     <td width="23" height="3" background="themes/<?=$theme_name?>/tables/OpenTable/leftside.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>
     <td width="100%"> 
     <table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">
     <tr>
     <td width="100%">
  <?  

}
#######################################################################
# Table Header Message Fix End - by TheGhost   v1.0.0     01/30/2012
#######################################################################

#########################################################################
# Table Header Message Fix Start - by TheGhost   v1.0.0     01/30/2012
#########################################################################
function OpenTableMessage($title='')
{
  global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor1, $sitename;

  ?>
     <table class=blockz cellSpacing="0" cellPadding="0" border="0" width="100%">
     <tr>
     <td background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftcorner.png" border="0" width="39" height="50"></td>
     <td valign="bottom" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png"><span class="style1"><center><strong><font color ="<?=$textcolor1?>"><?=$sitename?> » <?=$title?></font></strong></center>"</span></td>
     <td align="right" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/rightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     <tr>
     <td colSpan="3">
     <table cellSpacing="0" cellPadding="0" width="100%" border="0">
     <tr>
     <td width="23" height="3" background="themes/<?=$theme_name?>/tables/OpenTable/leftside.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>
     <td width="100%"> 
     <table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">
     <tr>
     <td width="100%">
  <?  
}
#######################################################################
# Table Header Message Fix End - by TheGhost   v1.0.0     01/30/2012
#######################################################################


#########################################################################
# Table Header Module Fix Start - by TheGhost   v1.0.0     06/01/2014   #### DONE
#########################################################################
function OpenTableModule()  
{
  global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor2, $pagetitle;
  
  print '<table class=blockz cellSpacing="0" cellPadding="0" border="0" width="100%">';
  print '<tr>';
  print '<td background="themes/'.$theme_name.'/tables/OpenTable/topmiddle.png">';
  print '<img src="themes/'.$theme_name.'/tables/OpenTable/leftcorner.png" border="0" width="39" height="50"></td>';
  print '<td  valign="middle" background="themes/'.$theme_name.'/tables/OpenTable/topmiddle.png"><br />';
  print '<div align="center"><strong><font valign="bottom" color ="'.$textcolor1.'"> '.$pagetitle.'</font></strong></div></td>';
  print '<td align="right" background="themes/'.$theme_name.'/tables/OpenTable/topmiddle.png">';
  print '<img src="themes/'.$theme_name.'/tables/OpenTable/rightcorner.png" border="0" width="39" height="50"></td> ';
  print '</tr>';
  print '<tr>';
  print '<td colSpan="3">';
  print '<table cellSpacing="0" cellPadding="0" width="100%" border="0">';
  print '<tr>';
  print '<td width="23" height="3" background="themes/'.$theme_name.'/tables/OpenTable/leftside.png">';
  print '<img src="themes/'.$theme_name.'/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>';
  print '<td width="100%"> ';
  print '<table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">';
  print '<tr>';
  print '<td width="100%">';
  
}
#######################################################################
# Table Header Module Fix End - by TheGhost   v1.0.0     06/01/2014   ####### DONE
#######################################################################


function OpenTable()
{
 global $name, $theme_name;

    
  ?>
     <table class=blockz cellSpacing="0" cellPadding="0" border="0" width="100%">
     <tr>
     <td background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftcorner.png" border="0" width="39" height="50"></td>
     <td align="center" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png"><span class="style1"></span></td>
     <td align="right" background="themes/<?=$theme_name?>/tables/OpenTable/topmiddle.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/rightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     <tr>
     <td colSpan="3">
     <table cellSpacing="0" cellPadding="0" width="100%" border="0">
     <tr>
     <td width="23" height="3" background="themes/<?=$theme_name?>/tables/OpenTable/leftside.png">
     <img src="themes/<?=$theme_name?>/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>
     <td width="100%"> 
     <table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">
     <tr>
     <td width="100%">

  <?



}


function CloseTable()
{
 global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor2, $pagetitle; 

    ?>
     </td>
     </tr>
     </table>
     </td>
     <td width="23" height="3" background="themes/<?=$theme_name?>/tables/CloseTable/rightside.png">
     <img src="themes/<?=$theme_name?>/tables/CloseTable/rightside.png" border="0" width="23" height="3"></td>
     </tr>
     </table>
     </td>
     </tr>
     <tr>
     <td background="themes/<?=$theme_name?>/tables/CloseTable/bottommiddle.png">
     <img src="themes/<?=$theme_name?>/tables/CloseTable/leftbottomcorner.png" border="0" width="39" height="50"></td>
     <td align="center" background="themes/<?=$theme_name?>/tables/CloseTable/bottommiddle.png"><span class="style1"></span></td>
     <td align="right" background="themes/<?=$theme_name?>/tables/CloseTable/bottommiddle.png">
     <img src="themes/<?=$theme_name?>/tables/CloseTable/bottomrightcorner.png" border="0" width="39" height="50"></td>
     </tr>
     </table>
     <br/>
	<?


}


function OpenTable3() {

  global $name, $title, $theme_name;
  
  if (($name == 'Forums') || ($name == 'Private_Messages'))
  {
    ?>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" ><tr><td class=extra> 
    <table width="100%" border="0" cellspacing="1" cellpadding="8" ><tr><td> 
	<?
  }
  else
  {
    ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr> 
    <td width="21" height="51" valign="top"><img src="themes/<?=$theme_name?>/images/ttl.png" width="21" height="51"></td>
    <td width="100%" valign="top" background="themes/<?=$theme_name?>/images/tt.png"><img name="tm" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    <td width="21" valign="top"><img src="themes/<?=$theme_name?>/images/ttr.png" width="21" height="51"></td>
    </tr>
    <tr>
    <td height="18" valign="top" background="themes/<?=$theme_name?>/images/tl.png"><img name="left" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt="">
    </td>
    <td valign="top" bgcolor="#0E1B24"> 
    <?
  }
}

    
function CloseTable3() {
  global $name, $theme_name;
  
  if (($name == 'Forums') || ($name == 'Private_Messages'))
  {
    ?>
    </td></tr></table></td></tr></table>
	<?
  }
  else
  {
    ?>
    </td>
    <td valign="top" background="themes/<?=$theme_name?>/images/tr.png"><img name="right" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    </tr>
    <tr>
    <td height="51" valign="top"><img src="themes/<?=$theme_name?>/images/tbl.png" width="21" height="51"></td>
    <td valign="top" background="themes/<?=$theme_name?>/images/tb.png"><img name="btm" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    <td valign="top"><img src="themes/<?=$theme_name?>/images/tbr.png" width="21" height="51"></td>
    </tr>
    </table>
    <?
 }


}


function OpenTable4() {

 global $theme_name;

  ?>

  <?
}

    
function CloseTable4() {

 global $theme_name;

    ?>

	<?
}

function OpenTable2() {

 global $theme_name;

  ?>
  <table class="code" border="1" width="100%">
  <tr>
  <td>
  <?
}

    
function CloseTable2() {

 global $theme_name;

    ?>
    </td>
	</tr>
    </table>
	<?
}
function OpenTable6() {

  global $name, $title, $theme_name;
  
  if (($name == 'Forums') || ($name == 'Private_Messages'))
  {
    ?>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" ><tr><td class=extra> 
    <table width="100%" border="0" cellspacing="1" cellpadding="8" ><tr><td> 
	<?
  }
  else
  {
    ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr> 
    <td width="21" height="51" valign="top"><img src="themes/<?=$theme_name?>/images/ttl.jpg" width="21" height="51"></td>
    <td width="100%" valign="top" background="themes/<?=$theme_name?>/images/tt.jpg"><img name="tm" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    <td width="21" valign="top"><img src="themes/<?=$theme_name?>/images/ttr.jpg" width="21" height="51"></td>
    </tr>
    <tr>
    <td height="18" valign="top" background="themes/<?=$theme_name?>/images/tl.jpg"><img name="left" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt="">
    </td>
    <td valign="top" bgcolor="#0E1B24"> 
    <?
 }
}

function CloseTable6() {

  global $name, $theme_name;
  
  if (($name == 'Forums') || ($name == 'Private_Messages'))
  {
    ?>
    </td></tr></table></td></tr></table>
	<?
  }
  else
  {
    ?>
    </td>
    <td valign="top" background="themes/<?=$theme_name?>/images/tr.jpg"><img name="right" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    </tr>
    <tr>
    <td height="51" valign="top"><img src="themes/<?=$theme_name?>/images/tbl.jpg" width="21" height="51"></td>
    <td valign="top" background="themes/<?=$theme_name?>/images/tb.jpg"><img name="btm" src="themes/<?=$theme_name?>/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    <td valign="top"><img src="themes/<?=$theme_name?>/images/tbr.jpg" width="21" height="51"></td>
    </tr>
    </table>
    <?
 }
}

?>