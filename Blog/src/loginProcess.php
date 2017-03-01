<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<?php
	session_save_path('./session');
	session_start();
	require_once 'dbConnect.php';
	
	$inputid = mysql_real_escape_string($_POST['id']); //isset은 변수가 있으면 1 없으면 0을 반환
	$inputPassword = mysql_real_escape_string($_POST['pwd']);
	
	$member = 'SELECT * FROM member';
	$members = mysql_query($member);
	
	//아이디 password 인증
	while ($row = mysql_fetch_array($members)) {
		$userid = $row['userid'];
		$userpwd = $row['password'];
		$username = $row['username'];
		if ($inputid == $userid && $inputPassword == $userpwd) {
  			$_SESSION['isLogin'] = true;
  			$_SESSION['username'] = $username;
  			header("Location: loginSession.php");
   			exit();
		}
	}
?>
<body>
</body>
</html>
