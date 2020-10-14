<?php
$name = htmlspecialchars(stripslashes($_POST['name']));
$password = htmlspecialchars(stripslashes($_POST['password']));
$email = htmlspecialchars(stripslashes($_POST['email']));
if (isset($_POST['regform'])) {
	echo 'Форма пришла';
} 
//if (preg_match("/^[0-9a-z_\.]+@[0-9a-z_^\.]+\.[a-z]{2,6}$/i", $mail) && isset($_POST['regform']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
//	echo 'Вы зарегистрированы!';
//	$fp = fopen('users.txt', 'w');
//	fwrite($fp, "$name, $password, $email");
//	fclose($fp);
} else {
	echo 'Произошла ошибка регистрации';
	header('Location: http://localhost/');
}	
?>
