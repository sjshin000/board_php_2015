<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Insert title here</title>
<style type="text/css">
	#login{
		border: 1px solid gray;
		width: 300px;
		margin: 5px;
		padding: 3px;
		}
</style>
</head>
<body>
	<div id = "login">
		<form action="./loginProcess.php" name="login" method="post">
			<p><input type="text" name="id" value = "sjshin" /></p>
			<p><input type="password" name="pwd" value = "1111" />
			<p><input type="submit" value="로그인" />
		</form>
	</div>
</body>
</html>