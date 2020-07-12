<?php
/*************************************************
*    Skype for Xoops blocks
*    Author: Mel Bezos, <http://www.bezoops.net>
*    Version 0.3 - 21-Oct-2005, Spain
------------------------------------------------*/

function skype_show() {

global $xoopsConfig;

/***** Here your user name in Skype *****/
$skype_user = "name_skype_user";

if ( file_exists( XOOPS_ROOT_PATH."/modules/skype/language/".$xoopsConfig['language']."/main.php") ) {
	include XOOPS_ROOT_PATH."/modules/skype/language/".$xoopsConfig['language']."/main.php";
} else {
	include XOOPS_ROOT_PATH."/modules/skype/language/english/main.php";
}

$block = array();
$block['title'] = _SKP_SKNAME;
$block['content'] ="<div style='text-align: center; text-indent: 5px;'>
<script type='text/javascript' src='http://download.skype.com/share/skypebuttons/js/skypeCheck.js'></script>
<a href='skype:".$skype_user."?call'><img src='".XOOPS_URL."/modules/skype/images/call.png' align='middle' style='border: none;' alt='Call me!' />&nbsp;"._SKP_CALLME."</a>
<select name='formsk' onchange='window.location=this.options[selectedIndex].value'>
  <option value='#'>"._SKP_SELECT."</option>
  <option value='skype:".$skype_user."?userinfo'>"._SKP_PROFILE."</option>
  <option value='skype:".$skype_user."?add'>"._SKP_CONTACT."</option>
  <option value='skype:".$skype_user."?chat'>"._SKP_CHAT."</option>
  <option value='skype:".$skype_user."?voicemail'>"._SKP_VOICEMAIL."</option>
  <option value='skype:".$skype_user."?sendfile'>"._SKP_SENDFILE."</option>
</select>
<a href='http://www.skype.com/download/' target='_blank'>"._SKP_DOWNLOAD."</a>";
return $block;
}
?>