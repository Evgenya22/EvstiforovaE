<!--подключение к БД-->
<?php

$servername = "localhost";
$username = "root";
$password = "1104";
$dbname = "form date";
$usertable = "task1";

$conn=mysqli_connect($servername, $username, $password, $dbname);
if ($conn == false) {
    print("<br>Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    print("<br>Соединение c базой данных установлено успешно.</br>");}
    mysqli_set_charset($conn, "utf8");
?>