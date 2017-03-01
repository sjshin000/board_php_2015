<?php
//require_once 'loginSession.php';
require_once 'dbConnect.php';

//데이터 가져오기 title writer description
$title = mysql_real_escape_string($_POST['title']);

$writer = mysql_real_escape_string($_POST['writer']);
$description = mysql_real_escape_string($_POST['description']);

$sqlInsert = "INSERT INTO board (title, writer, description, date) VALUES('".$title."','".$writer."', '".$description."', NOW())";

switch ($_GET['mode']) {
	case 'insert' :
		$result = mysql_query($sqlInsert);
		echo $result;
		header("Location: boardList.php");
		break;
		
// 	case 'delete' :
//		header("Location: boardList.php");
// 		break;
		
// 	case 'modify' :
//		header("Location: boardList.php");
// 		break;	
}
?>