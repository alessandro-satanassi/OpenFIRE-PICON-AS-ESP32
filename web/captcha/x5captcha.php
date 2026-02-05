<?php
include("../res/x5engine.php");
$nameList = array("37w","pdn","zng","2js","gg3","eec","umh","6v8","lcn","c2h");
$charList = array("A","T","R","X","G","D","W","2","N","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
