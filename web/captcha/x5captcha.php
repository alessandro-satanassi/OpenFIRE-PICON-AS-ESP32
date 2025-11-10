<?php
include("../res/x5engine.php");
$nameList = array("d4z","tn3","r74","265","ln2","vak","slf","ue8","vue","7rw");
$charList = array("P","X","P","7","M","Z","C","A","4","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
