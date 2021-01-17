<?php 

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 

$pass = md5($pass . "a");

$mysql = new mysqli('localhost', 'root', '', 'users_bd');
$result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
	echo "Такового пользователя еще нету...";
	exit();
}

print_r($user);
exit();

$mysql -> close();

?>
