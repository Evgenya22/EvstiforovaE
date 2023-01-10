<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись в базу данных</title>
    
    <style>

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
            <li><a href="../index.html">Форма регистрации</a></li>
            <li><a href="participants_list.php">Посмотреть список зарегистрированных участников конференции</a></li>
            <li><a href="#">Контакты</a></li>
           
        </ul>
    </header>



  
    <fieldset>
  

<!--подключение к БД-->
<?php

if(isset($_POST['submit'])){

include 'connection_db.php';
$a=$_REQUEST['fio'];
$b=$_REQUEST['BirthDate'];
$c=$_REQUEST['phone'];
$d=$_REQUEST['email'];
$e=$_REQUEST['doclad'];
$f=$_REQUEST['theme'];
$g=$_REQUEST['conference'];

$sql="INSERT INTO $usertable (fio,BirthDate,phone,email,doclad,theme,conference) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
$result = mysqli_query($conn, $sql);

if ($result == false) {
    print("<br>Произошла ошибка при выполнении запроса");
} else {
    print("<br>Данные записаны в базу данных. <p><b>Поздравляем, Вы зарегистрированный участник конференции!</b></p>");}

$conn->close();}
?>



</fieldset>
</body>
</html>

