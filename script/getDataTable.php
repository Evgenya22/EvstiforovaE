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
     <b> Зарегистрированные участники конференции </b>
      <p></p>
      <ul>
            <li><a href="../index.html">Вернуться на форму регистрации</a></li>
            <li><a href="pages/galary.html">Фотогалерея</a></li>
            <li><a href="#">Контакты</a></li>
        
        </ul>
    </header>
  
    <fieldset>



    //Выведите список зарегистрированных участников в виде таблицы

<!--подключение к БД, запись в БД-->
<?php
$servername = "localhost";
$username = "root";
$password = "1104";
$dbname = "form_date";

$conn = new mysqli($servername, $username,$password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "<br>Successful connection to DataBase";
};


$result = mysqli_query("SELECT * FROM 'task1'");
$row = mysqli_fetch_array($result);
while($row=mysqli_fetch_array($result)) {
$a=$_REQUEST['fio'];
$b=$_REQUEST['BirthDate'];
$c=$_REQUEST['phone'];
$d=$_REQUEST['email'];
$e=$_REQUEST['doclad'];
$f=$_REQUEST['theme'];
$g=$_REQUEST['conference'];
    echo "$a $b $c $d $e $f $g </br><hr/>";
}

    
$conn->close();
?>


</fieldset>
</body>
</html>