<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 1_данные формы</title>
    <!--подкл файл со стилями-->
    <style>

fieldset {
    margin: 0 auto;
    width: 500px;
    height: 350px;
    padding: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
    background-image: url(/img/date_reg.jpg);
}

    </style>

<b></b>

</head>


<body>
    <header>
     <b> Регистрационные данные участника конференции </b>
      <p></p>
      <ul>
            <li><a href="../index.html">Вернуться на форму регистрации</a></li>
            <li><a href="pages/galary.html">Фотогалерея</a></li>
            <li><a href="#">Контакты</a></li>
        
        </ul>
    </header>
  
    <fieldset>


<?php
$str = "Здравствуйте, Ваши регистрационные данные следующие:: <p></p>
    
    ФИО: <b>".$_REQUEST["fio"]. " </b><p></p>
    
    Дата рождения: <b>".$_REQUEST["BirthDate"]. "</b> <p></p>
    Телефон: <b>".$_REQUEST["phone"]."</b><p></p>
    Электронная почта: <b>".$_REQUEST["email"]. "</b><p></p>
    Имеется ли доклад? <b>".$_REQUEST["doclad"]. "</b> <p></p>
    Тема доклада: <b>".$_REQUEST["theme"]."</b> <br><p></p>";
    
    $str .="Вы выбрали секцию конференции: 
    ".$_REQUEST["conference"];
echo $str;

?>


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

$a=$_REQUEST['fio'];
$b=$_REQUEST['BirthDate'];
$c=$_REQUEST['phone'];
$d=$_REQUEST['email'];
$e=$_REQUEST['doclad'];
$f=$_REQUEST['theme'];
$g=$_REQUEST['conference'];



$sql="INSERT INTO task1 (fio,BirthDate,phone,email,doclad,theme,conference)
VALUES ('$a','$b','$c','$d','$e','$f','g')";

if ($conn->query($sql)){
    echo "данные отправлены";
}
else{
    echo "error: ", $sql, $conn->error;
}
    
$conn->close();
?>

</fieldset>
</body>