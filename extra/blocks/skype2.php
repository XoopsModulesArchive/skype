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
$block['title'] = "Skype me";
$block['content'] ="<!-- Skype Transparent Dropdown - http://www.skype.com/go/skypebuttons -->
<script type='text/javascript' src='http://download.skype.com/share/skypebuttons/buttons/transparent_dropdown/dropdown.js'></script>
<script type='text/javascript' src='http://download.skype.com/share/skypebuttons/js/skypeCheck.js'></script>
<div id='skypeTransparentDrp'>
<div id='skypeDropdown-transparent-head'><a href='skype:".$skype_user."?call' onclick='return skypeCheck();' id='skypeTransparentDrp-Call'><img src='".XOOPS_URL."/modules/skype/images/barcall.png' width='143' height='31' id='skypeTransparentDrpCall' alt='' /></a><a href='#' id='skypeTransparentDrp-Switch' onclick='return false;'><img src='".XOOPS_URL."/modules/skype/images/down.png' width='30' height='31' id='skypeTransparentDrpArrow' alt='' onmouseover='skypeTransparentDrpDown()' onmouseout='skypeTransparentDrpUp();' /></a></div>
<div id='skypeDropdown-transparent' style='display: none;'><a href='skype:".$skype_user."?chat' onclick='return skypeCheck();'><img src='".XOOPS_URL."/modules/skype/images/2.png' onmouseover='skpBtnOvr(this)' onmouseout='skpBtnOut(this)' width='173' height='26' id='SkpTranspBtn-2' alt='' /></a>
<a href='skype:".$skype_user."?add' onclick='return skypeCheck();'><img src='".XOOPS_URL."/modules/skype/images/3.png' onmouseover='skpBtnOvr(this)' onmouseout='skpBtnOut(this)' width='173' height='26' id='SkpTranspBtn-3' alt='' /></a>
<a href='skype:".$skype_user."?voicemail' onclick='return skypeCheck();'><img src='".XOOPS_URL."/modules/skype/images/4.png' onmouseover='skpBtnOvr(this)' onmouseout='skpBtnOut(this)' width='173' height='26' id='SkpTranspBtn-4' alt='' /></a>
<a href='skype:".$skype_user."?userinfo' onclick='return skypeCheck();'><img src='".XOOPS_URL."/modules/skype/images/5.png' onmouseover='skpBtnOvr(this)' onmouseout='skpBtnOut(this)' width='173' height='26' id='SkpTranspBtn-5' alt='' /></a>
<a href='skype:".$skype_user."?sendfile' onclick='return skypeCheck();'><img src='".XOOPS_URL."/modules/skype/images/6.png' onmouseover='skpBtnOvr(this)' onmouseout='skpBtnOut(this)' width='173' height='31' id='SkpTranspBtn-6' alt='' /></a>
</div>
</div><br /><br />&nbsp;&nbsp;<a href='http://www.skype.com/download/' target='_blank'>"._SKP_DOWNLOAD."</a><br /><br /><br />";
return $block;
}
?>