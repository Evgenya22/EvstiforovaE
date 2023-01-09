<!--подключение к БД, запись в БД-->
<?php
$servername = "localhost";
$username = "root";
$password = "1104";
$dbname = "form date";

$conn = new mysqli($servername, $username,$password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "<br> Успешно подключены к БД";
};
?>