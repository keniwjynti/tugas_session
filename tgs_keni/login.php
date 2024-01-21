<?php
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];
//periksa login
if ($user == "keniwjynti" && $pass = "12345") {
//menciptakan session
$_SESSION['login'] = $user;

echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='index.php'>di sini </a> untuk menuju ke
halaman utama dengan pemeriksaan session";
}
else{
echo "<h1>Login Gagal</h1>";
}
} else {
?>
<html>
<head>
<title>Login here...</title>
</head>
<body>
<form action="" method="post">
<h2>Login Here...</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In">
</form>
</body>
</html>
<?php
}
?>