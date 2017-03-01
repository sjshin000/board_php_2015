<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<style type="text/css">
	table {
	border: 1px solid gray;
	border-collapse: collapse;
	font-size: small;
	}
	.title {
	background-color: #d0d0d0;
	font-weight: bold;
	}
	th,td {
	border: 1px solid gray;
	padding: 10px;
	}
</style>
</head>

<?php
require_once 'loginSession.php';
?>

<body>
		<form action="./proccess.php?mode=insert" method = "GET" name = "write">
			<p>제목 : <input type = "text" name = "title" /></p>
			<p>작성자 : <input type = "text" name = "writer" /></p>
			<p>내용 : <br /><textarea rows="10" cols="90" name = "description"></textarea></p>
			<p><input type = "submit" value = "확인" />
		</form>
</body>
</html>
