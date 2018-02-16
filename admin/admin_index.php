<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
	date_default_timezone_set('America/Toronto');
	$msg=date("H");
	//$msg=$time;
	//Messages for time of day
	// $morning = "Good morning! Coffee?";
	// $afternoon = "Good afternoon! Lunch yet?";
	// $evening = "Good evening! Take some break!";
$t1="12";
$t2="17";

	//morning from 6 to 12pm
	// if ($time>="6" && $time<="12") {
	//  $msg="Good morning! Coffee?";
	// }
	//afternoon 12:01 to 5pm
	if ($time>$t1 && $time<=$t2) {
	$msg="Good afternoon! Lunch yet?";
	}
	//evening from 5pm to 11pm
	// elseif ($time>"17" && $time<="23") {
	// $msg="Good evening! Take some break!";
	// }

	else{
	  $notime = "Where are you? Pluto?"
	  return $notime;
	}


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
</head>
<body>
	<?php echo $msg; ?>
	<?php echo $_SESSION['user_name'];  ?>
	<br>
	<?php
	//echo "Last login was ", UTC_DATE($_SESSION['user_date']);
	//echo $lastLogin;

	echo "Last login was ",  $_SESSION['user_date'];
	//echo "Last login was" , $_SESSION['user_date'];
	//echo date("Last login was" + "M d Y H:i a", $lastLogin);
	 ?>

</body>
</html>
