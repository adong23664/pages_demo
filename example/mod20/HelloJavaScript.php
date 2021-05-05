<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>Hello, Javascript</title>
</head>
<body>
	<div align="center">
		<h2>第一個JavaScript程式</h2>
		<hr>

		<button id='btn'>Click Me</button>
		<hr>
		<div id="message"></div>
	
	<script>
        const btn = document.getElementById('btn');
        const message = document.getElementById('message');
        btn.addEventListener('click', updateName);

        function updateName() {
              let name = prompt('輸入您的名字');
            if (name.length == 0) {
                name = "訪客";
            }
              message.textContent = name + " 您好";
              message.innerHTML = "<h2><font color='red'>" + name + " 您好</font></h2>";
        }
</script>
	<hr>
		<a href='index.php'>回前頁</a>
  </div>
</body>
</html>
