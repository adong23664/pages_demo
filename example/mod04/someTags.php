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
		<p>
			<label>姓名：</label> 
			<input type="text" name="userName" id="userName" /><p>
			<label>電郵：</label> 
			<input type="text" name="email" id="email" /><p>
			<label>性別：</label>  
			<input type="radio" name="sex" id="sex" value="M" /> <label>男</label>
			<input type="radio" name="sex" id="sex2" value="F" /><label>女</label> <p>
			<label>嗜好：</label> 
			<input name="hobby[]" type="checkbox" id="hobby[]" value="游泳" /> 游泳
			<input name="hobby[]" type="checkbox" id="hobby[]2" value="聽音樂" /> 聽音樂
			<input name="hobby[]" type="checkbox" id="hobby[]3" value="設計動畫 " /> 設計動畫
			<p>
			居住縣市
			<select name="location">
					<option value="1">基隆市</option>
					<option value="2">台北市</option>
					<option value="3">新北市</option>
					<option value="4">桃園市</option>
					<option value="5">新竹市</option>
					<option value="6">苗栗縣</option>
					<option value="7">台中市</option>
			</select>
			<hr>
			<input type="submit" name="submit" id="submit" value="送出" />
			<input type="reset" name="Reset" id="button" 	value="重設" />
			<br>
	</form>
		
		<hr>
		<a href='index.php'>回前頁</a>
	</div>
</body>
</html>
