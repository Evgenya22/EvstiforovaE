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
     <b> Записать данные в базу данных</b>
      <p></p>
      <ul>
            <li><a href="../index.html">Вернуться на форму регистрации</a></li>
            <li><a href="pages/galary.html">Фотогалерея</a></li>
            <li><a href="#">Контакты</a></li>
        
        </ul>
    </header>
  
    <fieldset>

<!--подключение к БД-->
<?php
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
    print("<br>Данные записаны упешно в базу данных");}

$conn->close();


/*



$sql="INSERT INTO `task1` (`fio`,`BirthDate`,`phone`,`email`,`doclad`,`theme`,`conference`) 
VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."')";

 можно так добавлять
$sql="INSERT INTO task1 (fio,BirthDate,phone,email,doclad,theme,conference)
VALUES ('$a','$b','$c','$d','$e','$f','$g')";

if ($conn->query($sql)){
    echo "<p></p>данные записаны в БД";
}
else{
    echo "error: ", $sql, $conn->error;
}
 */
    

?>



</fieldset>
</body>