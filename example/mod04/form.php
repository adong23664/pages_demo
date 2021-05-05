<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<meta charset="UTF-8">
<title>Html Doc</title>
</head>
<body>
	<div align='center'>
	    <h2>表單元素</h2>
	    <hr>
		<form action="processFormData.php" method="post">
			<div>
				<label for="name">姓名: </label> 
				<input type="text"name="name" id="name" required>
			</div>
			<br>
			<div>
				<label for="email">電郵: </label> 
				<input type="email" name="email" id="email" required>
			</div>
			<br>
			<div>
				<input type="submit" value="送出">
			</div>
		</form>
		  <hr>
          <a href='index.php'>回前頁</a>
		</div>
</body>      
</html>		