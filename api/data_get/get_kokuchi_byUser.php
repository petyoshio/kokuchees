<?php
	include $_SERVER['DOCUMENT_ROOT'].'/kokuchees/api/common/db.php';

	$db = new DB();

	$mysqli = $db->db_connect();

	$userid = 1;

	$stmt = $mysqli->prepare("SELECT kokuchi_title,kokuchi_detail FROM kokuchi WHERE user_id = ? and start_timing < CURRENT_TIMESTAMP() and end_timing > CURRENT_TIMESTAMP()");

	$stmt->bind_param('i', $userid);
	$stmt->execute();
	$stmt->bind_result($title,$detail);

	$resltHtml="";

	if($stmt){
	  while($stmt->fetch()){
	    $resltHtml = "<p>test</p>";
	  }
	}
	print $resltHtml;
?>