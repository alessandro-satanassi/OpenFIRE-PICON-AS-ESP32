<?php
include("../res/x5engine.php");
$nameList = array("l7m","vvg","mj3","pwy","ys2","vhr","l2g","rz7","zmn","sp6");
$charList = array("U","4","5","3","C","7","A","Z","F","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
