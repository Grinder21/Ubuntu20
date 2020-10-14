<?php
//define('DB_HOST', 'localhost'); // const 
//define('DB_USER', 'root'); // const
//define('DB_PASSWORD', 'password'); // const
//define('DB_NAME', 'mysite'); // const

//$mysqli = $new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//if ($mysqli->maxdb_connect_errno) exit ('Error connection datebase');
$mysqli->set_charset('utf8');

if (isset($_POST['reg'])) {
	$name = $mysqli->real_escape_string(htmlspecialchars($_POST['name']));
	$email = $mysqli->real_escape_string(htmlspecialchars($_POST['email']));
	$password = $mysqli->real_escape_string(htmlspecialchars($_POST['password']));
	$ip_reg = ip2long($_SERVER['REMOTE_ADDR']);
	$query = "INSERT INTO `form_registration`(`name`, `email`, `password`, `ip_reg`, `date_reg`)
	VALUES('$name', '$email', 'MD5($password)', '$ip_reg', UNIX_TIMESTAMP())";
	$result = $mysqli->query($query);
}

$mysqli->close();

?>
<?php if(isset($result)) { ?>
	<?php if($result) ?>
	<p>Register success</p>
	<?php } else { ?>
		<p>Error registration!</p>
		<?php } ?>

<?php } ?>
<form name="reg" action="index.php" method="post">
	<h3>Registration user</h3>
	<p>
	Name: <input type="text" name="name">
	</p>
	<p>
	E-mail: <input type="email" name="email">
	</p>
	<p>
	Password: <input type="password" name="password">
	</p>
	<p>
	<input type="submit" name="sendform" value='Registration'>
	</p>
</form>