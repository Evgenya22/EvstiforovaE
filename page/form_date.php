<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные формы</title>
    <!--подкл файл со стилями-->
    <style>

fieldset {
    color: blue;
    font-style: oblique;
    
    font-weight: bolder;
    margin: 0 auto;
    width: 400px;
    height: 300px;
    padding: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
    background-image: url(/img/date_reg.jpg);
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
     <b> Регистрационные данные участника конференции </b>
      <p></p>
      <ul>
            <li><a href="../index.html">Форма регистрации</a></li>
            <li><a href="participants_list">Посмотреть список зарегистрированных участников конференции</a></li>
            <li><a href="#">Контакты</a></li>
        
        </ul>
    </header>
  
    <fieldset>


<?php
$str = "Здравствуйте, Ваши регистрационные данные следующие: <p></p>
    
    ФИО: <b>".$_REQUEST["fio"]. " </b><p></p>
    
    Дата рождения: ".$_REQUEST["BirthDate"]. "<p></p>
    Телефон: ".$_REQUEST["phone"]."<p></p>
    Электронная почта: ".$_REQUEST["email"]. "<p></p>
    Имеется ли доклад? ".$_REQUEST["doclad"]. "<p></p>
    Тема доклада: ".$_REQUEST["theme"]."<br><p></p>";
    
    
    
    $str .="Вы выбрали секцию конференции: 
   ".$_REQUEST["conference"];
echo $str;
?>
</fieldset>
<p>Если данные корректны, то необходимо нажать на кнопку и Ваши регистрационные данные запишутся в базу данных.
     В противном случае снова перейдите на форму регистрации и укажите корректные данные о себе. </p>
<div>
        <form action="record_db.php" method="post">
        <input id="submit" type="submit" value="Записать мои регистрационные данные в базу"><br/>
        </form>
        </div> 
</body>
</html>