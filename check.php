<?php 
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$registration = 0;

if (mb_strlen($login)<5) {
	echo "Вы придумали слишком короткий логин(меньше трьох), сохранять не удобно) </br></br>";
} 
elseif(mb_strlen($login)>30) {
		echo $login . " Логин очень большой(больше 30), запутаетесь еще...</br></br>";
}
 else {
 	echo  "Ваш логин: " . $login . " подобран верно. </br></br>" ; $registration += 1;
}


if (mb_strlen($name)<3) {
	echo "Не уж то имя на столько малеькое? Неповезло тебе... </br></br>";
} 
elseif(mb_strlen($name)>50) {
		echo $name . " Вам не показалось что имя слишком большое? или алгоритм сломался?</br></br>";
} 
else {
	echo "Ваше имя: " . $name . "</br></br>"; $registration += 1;
}


if (mb_strlen($pass)<0) {
	echo "Пароль для вашей безопасности слишком мал(меньше пяти). Взломают же...</br></br>";
}
elseif(mb_strlen($pass)>16) {
		echo $pass . " А не забудете? не надо больше 16 букв брать...</br></br>";
} 
else {
	echo "Ваша пароль: " . $pass . " ,запишите себе куда нибудь, в тайное место.</br></br>";  $registration += 1;
}


if ( $registration == 3) {
	echo "Вы зарегистрировались Удачно!!! Запишите данные и идем дальше.</br></br>";
	
} else {
	echo "Недозарегистрировались! Вернитесь и поправтесь!</br></br>";?> <a href="/">Назад вернуться</a> <?php
	exit();
	}

$pass = md5($pass . "ac09ew0-ok");

$mysql = new mysqli('localhost', 'root', '', 'users_bd');

$result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login'");
$user = $result->fetch_assoc();
if (count($user) > 0) {
	echo "Такой логин уже существует! Записать вас в БД не получаеться... :(";
	?><br><br><a href="/">Назад вернуться</a><?
	exit();
}

$mysql -> query("INSERT INTO `user`(`login`,`name`,`pass`) VALUES('$login', '$name', '$pass')");

$mysql -> close();

// header('location: /');
?>

<br><a href="/">На главную</a>