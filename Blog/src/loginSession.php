<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
	<?php
	session_save_path('./session');
	session_start();
	if($_SESSION['isLogin'] == true) {
		echo $_SESSION['username'].'님 환영 합니다.<br />';
	}else {
		header('Location: ./login.php');
		echo "로그인 실패";
		}
	?>
	<body>
		<a href="./login.php">[로그아웃]</a> <a href = "./boardList.php">[게시판으로 이동]</a>
	</body>
</html>