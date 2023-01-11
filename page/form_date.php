<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные формы</title>
    <!--подкл файл со стилями-->
    <style>
  html, body {
height: 100%;
}
.main {
min-height: 100%;
margin-bottom: -100px;
}
.footer {   
    height: 100px;
    background: #666;
    color: rgb(255, 255, 255);  
          }  

fieldset {
    color: blue;
    font-style: oblique;
    
    font-weight: bolder;
    margin: 0 auto;
    width: 400px;
    height: 400px;
    padding: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
    background-image: url(/img/date_reg.jpg);
    line-height: 1.5;

}
body
{
    background-image: url(/img/background.jpg);
}

p
{
    font-weight: bold;
}

input{
    height:100px;
    weight:100px;
    cursor: pointer;
    position: relative;
    box-shadow: 2px 2px 5px rgba(97, 26, 26, 0.29);
    border-radius: 20px/20px;
    transform: translate(-50%,0);
    background-color: thistle;
    left: 50%;
    font-weight: bold;
}


    </style>
</head>

<body>
    <header>
     <h1> Регистрационные данные участника конференции </h1>
      <p></p>
      <ul>
           <li><a href="../HomePage.html">Главная страница</a></li>
            <li><a href="../index.html">Форма регистрации</a></li>
            <li><a href="participants_list.php">Посмотреть список зарегистрированных участников конференции</a></li>
            
        </ul>
    </header>
    <main class="main">

<fieldset>
<?php
session_start(); //чтобы данные передавились между стр сайта надо открыть сессию и записать туда данные
//если на стр рег нажата сабмит то данные записываются в сессию
if (isset($_POST['a'])) {
    $_SESSION['fio'] = $_REQUEST['fio'];
    $_SESSION['BirthDate'] = $_REQUEST['BirthDate'];
    $_SESSION['phone'] = $_REQUEST['phone'];
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['doclad'] = $_REQUEST['doclad'];
    $_SESSION['theme'] = $_REQUEST['theme'];
    $_SESSION['conference'] = $_REQUEST['conference'];
$str = "Здравствуйте, Ваши регистрационные данные следующие: <p></p>
    
    ФИО: <b>".$_SESSION['fio']. " </b><p></p>
    
    Дата рождения: ".$_SESSION['BirthDate']. "<p></p>
    Телефон: ".$_SESSION['phone']."<p></p>
    Электронная почта: ".$_SESSION['email']. "<p></p>
    Имеется ли доклад? ".$_SESSION['doclad']. "<p></p>
    Тема доклада: ".$_SESSION['theme']."<br><p></p>";
    
$str .="Вы выбрали секцию конференции: ".$_SESSION["conference"];
echo $str;
    
}
/*кусок кода про запас как можно манипулировать переменными
    $a=$_REQUEST['fio'];
    $b=$_REQUEST['BirthDate'];
    $c=$_REQUEST['phone'];
    $d=$_REQUEST['email'];
    $e=$_REQUEST['doclad'];
    $f=$_REQUEST['theme'];
    $g=$_REQUEST['conference'];
print("ФИО: $a<br>");
print("Дата рождения: $b<br>");
print("Номер телефона: $c<br>");
print("Электронная почта: $d<br>");
print("Имеется ли доклад?: $e<br>");
print("Тема доклада: $f<br>");
print("Секция конференции: $g<br>");
/*
if (isset($_POST['submit'])) {
    $_SESSION['fio'] = $_REQUEST['fio'];
    $_SESSION['BirthDate'] = $b;
    $_SESSION['phone'] = $c;
    $_SESSION['email'] = $d;
    $_SESSION['doclad'] = $e;
    $_SESSION['theme'] = $f;
    $_SESSION['conference'] = $g;
    var_dump($_SESSION);
}*/

?>

</fieldset>
<p>
Чтобы записать данные в БД, нажмите на кнопку:</p>
<div>
        <form action="record_db.php" method="post">
        <input id="submit" name="submit" type="submit" value="Записать мои регистрационные данные в базу"><br/>
        </form>
        </div> 

 </main>

<footer class="footer">
        <h3>Контакты</h3>
        <p>123366, Россия, Москва, Проспект Мира, 150</p>
        <p>Тел.:+7(495) 642-23-78</p>
    </footer>
</body>
</html>