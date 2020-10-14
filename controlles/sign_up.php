<?php
$name = htmlspecialchars(stripslashes($_POST['name']));
$password = htmlspecialchars(stripslashes($_POST['password']));
$email = htmlspecialchars(stripslashes($_POST['email']));
require_once('../base.php');
?>

<?php if (isset($_POST['regform'])) { ?>
	<p>Данные с формы заполнены и пришли успешно!</p>
	<?php header('Refresh: 10; url=http://localhost/index.php'); ?>
<?php } ?>

<?php if (!preg_match("/^[0-9a-z_\.]+@[0-9a-z_^\.]+\.[a-z]{2,6}$/i", $email)) { ?>
	<p>Вы ввели некорректный email-адрес</p>
	<?php header('Refresh: 1; url=http://localhost/view/sign_up.php'); ?>
<?php } ?>







