<?php 
if (!defined('MODULE_FILE')) { die('You can\'t access this file directly...'); } //you must have this line at the top of every module file you make!

global $facebook_plugin_width, $facebookappid, $feedicon, $name, $domain;

$feedicon = img('chrome_logo.png', 'chrome_logo');

?>
    <p><a class='clickable' onclick='postToFeed(); return false;'><img src="https://<?=$domain?>/modules/CHANGELOG/images/FBshare.png"></a></p>
    <p id='msg'></p>

    <script> 
      FB.init({appId: "<?=$facebookappid?>", status: true, cookie: true});

      function postToFeed() {

        // calling the API ...
        var obj = {
          method: 'feed',
          link: 'https://<?=$domain?>/modules.php?name=CHANGELOG',
          picture: 'https://<?=$domain?>/modules/<?=$name?>/images/changelog.png',
          name: 'My Website CHANGELOG module - Coded for PHP-Nuke Titanium',
          caption: 'A list of my on the fly daily website updates!',
          description: 'A CHANGELOG module written by: Ernest Buffington. This module only works with PHP-Nuke Titanium - If you would like to have a Blog portal that interacts with facebook and Google goto https://cvs.86it.us and create a user account using your first and last name. When you are done send a private message to Ernest Buffington. The Blog portals are free and come with a full blown commercial website running PHP-Nuke Titanium v1.0.1z'
        };
		
        function callback(response) {
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
      }
    
    </script>
    
<center>
<div class="fb-like" data-href="https://<?=$domain?>/modules.php?name=<?=$name?>" ref="<?=$name?>" data-send="false"  width="<?=$facebook_plugin_width?>" show_faces="true" font="verdana"></div>
<br /><br /><div class="fb-comments" data-href="https://<?=$domain?>/modules.php?name=<?=$name?>" ref="<?=$name?>" data-num-posts="5" data-width="<?=$facebook_plugin_width?>">
</div>
</center>
    
<?
?>