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
//순번, 제목, 작성자, 등록일, 조회수
//페이징처리
?>
<body>
	
	<a href="./boardWrite.php" >[글쓰기]</a>
	
	<table>
		<tr class = 'title'>
			<th width = 50>순서</th>
			<th width = 300>제목</th>
			<th width = 50>작성자</th>
			<th width = 100>작성일</th>
			<th width = 50>조회수</th>
			
		</tr>
		<tr class = 'contents'>
			<?php 
			while ($row = mysql_fetch_array($queryBoard)) {
				$id = $row['id'];
				$title = $row['title'];
				$writer = $row['writer'];
				$date = $row['date'];
				$hits = $row['hits'];
				echo ("<tr class = 'contents'>".
					  "<th>".$id."</th>".
					  "<th><a href = './boardModify.php?id={$id}'>".$title."</a></th>".
					  "<th>".$writer."</th>".
					  "<th>".$date."</th>".
					  "<th>".$hits."</th></tr>"
						);
			}
			?>
		</tr>
	</table>
</body>
</html>
