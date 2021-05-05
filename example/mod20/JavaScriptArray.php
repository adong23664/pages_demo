<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>Hello, Javascript</title>
<script>
window.onload=function(){
    let arr1 = new Array(100, 50, 25, 45, 80);
    let sum1 = 0;
    for (let i = 0; i < arr1.length; i++) {
        sum1 += arr1[i];
    }
    const div1 = document.getElementById("dataArea1");
    let tab1 = "<table border='1'>";
    for (let i = 0; i < arr1.length; i++) {
        tab1 += "<tr><td  style='text-align: right; width: 124px;'>" + arr1[i]
                + "&nbsp;&nbsp;</td></tr>";
    }
    tab1 += "<tr><td align='center'>" + "總和:" + sum1 + "</td></tr>";
    tab1 += "</table>";
    div1.innerHTML = tab1;
}    
</script>
</head>
<body>
	<div align='center'>
		<h3>JavaScript 陣列處理</h3>
		<hr>
		<div id='dataArea1' style='height: 180px;'></div>
		<hr>
		<a href='index.php'>回前頁</a>
	</div>
</body>
</html>
