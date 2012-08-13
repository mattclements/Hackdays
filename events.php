<?php
$page="organisers";
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/session.inc.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php');

//Type Set
$type = "";
if(isset($_GET['type']) && (
	$_GET['type']==="hackday" ||
	$_GET['type']==="geekmeet" ||
	$_GET['type']==="conference"	
))
{
		$type = $_GET['type'];
}
?>

<h1>Upcoming Events</h1>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php');
?>