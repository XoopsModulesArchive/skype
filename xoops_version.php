<?php
/*************************************************
*    Skype for Xoops blocks
*    Author: Mel Bezos, <http://www.bezoops.net>
*    Version 0.1 - 21-Oct-2005, Spain
------------------------------------------------*/
$modversion['name'] = "Skype";
$modversion['version'] = 0.3;
$modversion['description'] = "Skype Block";
$modversion['author'] = "Mel Bezos";
$modversion['credits'] = "";
$modversion['help'] = "";
$modversion['license'] = "GNU";
$modversion['official'] = no;
$modversion['image'] = "skype.gif";
$modversion['dirname'] = "skype";

// Menu
$modversion['hasMain'] = 1;

$modversion['blocks'][1]['file'] = "skype.php";
$modversion['blocks'][1]['name'] = "Skype";
$modversion['blocks'][1]['description'] = "Call with Skype";
$modversion['blocks'][1]['show_func'] = "skype_show";
?>
