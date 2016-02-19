
<?php
	//재사용성을 위해 밖으로 connection 빼겟음ㅋ
	$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials', '3306');
  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>작심5일</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body id="target" class="white">
		<div class="jumbotron">
			<h2><a href="index.php">작심5일</a></h2>
		</div>
		<ol class="list-group">
			<?php
				$sql = "SELECT id, title FROM topic";
				$result = mysqli_query($conn, $sql);
				//반복문을 이용하자!
				while($row = mysqli_fetch_assoc($result)) {
					print("<li class=\"list-group-item\"> <a href=\"index.php?id={$row['id']}\"> {$row['title']} </a> </li>");
				}

			 ?>
			<!--<li><a href="index.php?id=3">JavaScript</a></li>-->
		</ol>
		<div id="control">
			<input type="button" class="btn " value="white" onclick="document.getElementById('target').className='white'">
			<input type="button" class="btn btn-primary" value="black" onclick="document.getElementById('target').className='black'">
		</div>

		<div id="article">
         <?php
				if(empty($_GET['id'])) {
					print('<h2>Welcome!!!</h2>');
				} else {
					//sql을 날려주시구~
					$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
					//PHP인터프리터가 DB서버에 접속해서 $sql을 던진다.
					$result = mysqli_query($conn, $sql);
					//result로 가져온 데이터를 가져온다
					$row = mysqli_fetch_assoc($result);
					//이제는 출력을 할 수 있다.
					print("<h2>{$row['title']}</h2>");
					print($row['description']);
				}
          ?>
		</div>
</body>
</html>
