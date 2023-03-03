<html>
<head>
<title>sql connect</title>
</head>
<body>
<?php
//Имя сервера
$dbhost = '';
//Логин базы данных 
$dbuser = '';
//Пароль базы данных
$dbpass = '';
//Попытка подключения базы данных
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

//Условия для ошибки
if(!$conn) {

	die('Coult not connect: ' .mysqli_error($conn));

}
//Условия успешного выполнения

echo 'Connected succes </br>';
require_once"" //Запуск файла html/php

$sql = "CREATE TABLE status(".
          "".
          "".
          "".

//Выбор базы данных для подмены
mysqli_select_db($conn, 'test');
$retval = mysqli_query($conn,$sql);


if(!$retval) {

	die('Could not create table: '.mysqli_error($conn));

}


echo "Table created success\n";

//Закрыть подключение
mysqli_close($conn);
?>
</body>
</html>