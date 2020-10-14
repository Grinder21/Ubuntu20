<?php
//define('DB_HOST', 'localhost'); // const 
//define('DB_USER', 'root'); // const
//define('DB_PASSWORD', 'password'); // const
//define('DB_NAME', 'mysite'); // const

//$mysqli = $new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//if ($mysqli->maxdb_connect_errno) exit ('Error connection datebase');
//$mysqli->set_charset('utf8');

if (isset($_POST['reg'])) {
 echo 'Thanks for registration';
}
?>
<form name="reg" action="sign_up.php" method="post">
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
<a href="sign_in.php">Login</a>