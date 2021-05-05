<?php
session_start();  // 啟用交談期
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>login.php</title>
</head>
<body>
<div align='center'>
	<h2>登入</h2>
	<hr>
<?php
$username = "";  $password = "";
// 取得表單欄位值
if ( isset($_POST["Username"]) )
   $username = $_POST["Username"];
if ( isset($_POST["Password"]) )
   $password = $_POST["Password"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 是否有查詢到使用者記錄
    if (  ($username == "kitty"  && $password == "123m") ||
          ($username == "mickey"  && $password == "456m") ||
          ($username == "snoopy"  && $password == "789m") 
    ) {
      // 成功登入, 指定Session變數
      $_SESSION["login_session"] = true;
      $_SESSION["user"] = $username;
      header("Location: index.php");
   } else {  // 登入失敗
      echo "<center><font color='red'>";
      echo "使用者名稱或密碼錯誤!<br/>";
      echo "</font>";
      $_SESSION["login_session"] = false;
   }
}
?>
<form method="post">
<table border="1">
 <tr bgcolor="#FFCC99"><td><font size="5">使用者名稱:</font></td>
   <td><input type="text" name="Username" 
             size="15" maxlength="10"/>
   </td></tr>
 <tr bgcolor="#FFCC99"><td><font size="5">使用者密碼:</font></td>
   <td><input type="password" name="Password"
              size="15" maxlength="10"/>
   </td></tr>
 <tr bgcolor="#FFCC99"><td colspan="2" align="center">
   <input type="submit" value="登入網站"/>
   </td></tr> 
</table>
</form>
<hr>
	<a href='../index.php'>回前頁</a>
</div>
</body>
</html>