<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список зарегистрированных участников</title>
    <style>

table, th, td {
   border: 1px solid black;
   background-color: antiquewhite;
   
}

body
{
    background-image: url(/img/background.jpg);
}


    </style>

</head>

<body>
    <header>
     <h1> Зарегистрированные участники конференции </h1>
      <p></p>
      <ul>
        <li><a href="../HomePage.html">Главная страница</a></li>
        <li><a href="../index.html">Форма регистрации</a></li>
        
        </ul>
    </header>
    <main>
   
<!--подключение к БД, запись в БД-->
<?php

include 'connection_db.php';//подкл срипт для коннекта с бд
$sql = "SELECT * FROM $usertable";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>ФИО</th><th>Дата рождения</th><th>Телефон</th>
    <th>Электронная почта</th><th>Имеется ли доклад</th>
    <th>Тема доклада</th><th>Секция конференции</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["fio"] . "</td>";
            echo "<td>" . $row["BirthDate"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["doclad"] . "</td>";
            echo "<td>" . $row["theme"] . "</td>";
            echo "<td>" . $row["conference"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else {
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>

</main>
</body>
</html>