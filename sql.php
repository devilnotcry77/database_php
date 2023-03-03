<!doctype html>
<html lang="ru">
<head>
	<title>Admin_Panel</title>
</head>
<body>
  <?php
	$host = '';
	$user = '';
	$pass = '';
	$db_name = '';
	$link = mysqli_connect($host, $user, $pass, $db_name);


      if(!$link) {
	    echo 'I not connect to the database. Error code: ' .mysqli_connect_error().',error:'.mysqli_connect_error();
	 	exit;
	}
  if (isset($_POST[""])) {
    $sql = mysqli_query($link, "INSERT INTO `` (``, ``, ``, ``, ``) VALUES ('{$_POST['']}', '{$_POST['']}', '{$_POST['']}','{$_POST['']}','{$_POST['']}')");

    if ($sql) {
      echo '<p>Data has been successfully added to the table.</p>';
    } else {
      echo '<p>Sorry, error: ' . mysqli_error($link) . '</p>';
    }
  }
?>
