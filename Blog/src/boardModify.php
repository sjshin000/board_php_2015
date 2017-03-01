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
require_once 'dbConnect.php';	

//게시판 아이디 가져오기
$modifyId = "";
if(!empty($_GET['id'])) {
	$id = mysql_real_escape_string($_GET['id']);	
}
$selectQuery = mysql_query("SELECT * FROM board WHERE id  = $id");
$content = mysql_fetch_array($selectQuery);

/*
mysql_fetch_array() - 연관 색인 및 숫자 색인으로 된 배열로 결과 행을 반환
mysql_fetch_assoc() - 연관 배열로 결과 행을 반환
mysql_fetch_object() - 객체형으로 결과 행을 인출
mysql_data_seek() - 내부 결과 포인터를 이동
mysql_fetch_lengths() - 결과로부터 각 출력의 길이를 반환
mysql_result() - 결과 데이터를 반환
*/
?>

<body>
		<form action="./boardProccess.php?mode=insert" method = "post" name = "">
			<p>제목 : <input type = "text" name = "title" value = "<?=$content['title']?>" /></p>
			<p>작성자 : <input type = "text" name = "writer" value = "<?=$content['writer']?>" /></p>
			<p>내용 : <br /><textarea rows="10" cols="90" name = "description"><?=$content['description']?></textarea></p>
			<p><input type = "submit" value = "확인" />
		</form>
</body>
</html>