<?php
include("../res/x5engine.php");
$nameList = array("6f4","8x4","km7","hlm","5rr","vk8","8s8","xw2","wsr","zzj");
$charList = array("E","5","4","A","Y","H","2","M","4","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
