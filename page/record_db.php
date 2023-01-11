<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись в базу данных</title>
    <style>
html, body {
height: 100%;}
.main {
min-height: 100%;
margin-bottom: -100px;}
.footer {   
    height: 100px;
    background: #666;
    color: rgb(255, 255, 255); }  

    fieldset {
    margin: 0 auto;
    width: 400px;
    height: 200px;
    padding: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
    background-image: url(/img/date_reg.jpg);
}
body
{
    background-image: url(/img/background.jpg);
}
</style>
<b></b>
</head>
<body>
    <header>
     <h1> Результаты регистрации участника конференции</h1>
      <p></p>
      <ul>
            <li><a href="../HomePage.html">Главная страница</a></li>
            <li><a href="../index.html">Форма регистрации</a></li>
            <li><a href="participants_list.php">Посмотреть список зарегистрированных участников конференции</a></li>
                  
        </ul>
    </header>

<main class="main">
    <fieldset>
  <!--Запись в БД-->
<?php
 session_start(); //подключаем сессию, чтобы переменные из одного файла передались в другой,иначе не получится
if(isset($_POST['submit'])){
require_once('connection_db.php');
$a=$_SESSION['fio'];
$b=$_SESSION['BirthDate'];
$c=$_SESSION['phone'];
$d=$_SESSION['email'];
$e=$_SESSION['doclad'];
$f=$_SESSION['theme'];
$g=$_SESSION['conference'];
$sql="INSERT INTO $usertable (fio,BirthDate,phone,email,doclad,theme,conference) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
$result = mysqli_query($conn, $sql);
if ($result == false) {
    print("<br>Произошла ошибка при выполнении запроса");
} else {
    print("<br>Данные записаны в базу данных. <p><b>Поздравляем, $a, Вы успешно зарегистрированы!</b></p>");}

$conn->close();}
?>
</fieldset>
</main>
<footer class="footer" id="cont">
        <h3>Контакты</h3>
        <p>123366, Россия, Москва, Проспект Мира, 150</p>
        <p>Тел.:+7(495) 642-23-78</p>
    </footer>

</body>
</html>

