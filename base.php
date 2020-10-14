<?php
$conn = new mysqli("localhost", "root", "admin", "users");
 
  if ($conn->connect_error) {
    die("Ошибка: не удается подключиться: " . $conn->connect_error);
  } 

  echo 'Подключение к базе данных.<br>';

  $result = $conn->query("SELECT name FROM employee");

  echo "Количество строк: $result->num_rows";

  $result->close();

  $conn->close();
?>