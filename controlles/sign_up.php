<?php
$name = htmlspecialchars(stripslashes($_POST['name']));
$password = htmlspecialchars(stripslashes($_POST['password']));
$email = htmlspecialchars(stripslashes($_POST['email']));
?>

<?php if (isset($_POST['regform'])) { ?>
	<p>Форма пришла</p>
<?php } ?>



