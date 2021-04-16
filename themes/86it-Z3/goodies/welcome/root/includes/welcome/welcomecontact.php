<?

/************************************************************************/
/* PHP-NUKE: DD Welcome Admin for PHP-Nuke                          		*/
/* ============================================                			*/
/* Copyright (c) 2005 by ZoNE&Vision                                     */
/* http://www.DestineDesigns.com                                        */
/* Made for PHP-NUKE Advanced Content Management System 				*/
/************************************************************************/

$ToEmail = "YOUREMAIL@aol.com"; //key in your email here

$ToName = "YOU NAME"; // your name
$ToSubject = "YOURSITE.COM Contact"; // subject in email

$EmailBody = "Sent By: $name\nSenders Email: $email\nMessage Sent:\n$comments\n";

$EmailFooter="\nThis message was sent by: $name from $REMOTE_ADDR ";

$Message = $EmailBody.$EmailFooter;

mail($ToName." <".$ToEmail.">",$ToSubject, $Message, "From: ".$name." <".$email.">");


?>