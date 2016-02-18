<!DOCTYPE html>
<html>
	<head>
		<title>작심5일</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body id="target" class="white">
		<h1><a href="index.php">작심5일</a></h1>
		<ol>
			<li><a href="index.php?id=1">HTML</a></li>
			<li><a href="index.php?id=2">CSS</a></li>
			<li><a href="index.php?id=3">JavaScript</a></li>
		</ol>
		<div id="article">
			<input type="button" class="btn" value="white" onclick="document.getElementById('target').className='white'">
			<input type="button" class="btn" value="black" onclick="document.getElementById('target').className='black'">
         <?php
				if(empty($_GET['id'])) {
					print('<h2>Welcome!!!</h2>');
				} else {
					$id = $_GET['id'];
					$data = file_get_contents("{$id}.txt");
	            if($id == 1) {
	               print($data);
	            } elseif ($id == 2) {
	               print($data);
	            } elseif ($id == 3) {
	               print($data);
	            }
				}
          ?>
		</div>
</body>
</html>
