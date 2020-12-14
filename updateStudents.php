<?php

$mysqli = new mysqli('localhost', 'root', '', 'koledj1'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id']; 
$pib = $_POST['pib'];
$birth_data = $_POST['birth_data'];
$address = $_POST['address'];
$specialty = $_POST['specialty'];
$№_zalicovoi = $_POST['№_zalicovoi'];

$sql = "UPDATE students SET pib='$pib', birth_data='$birth_data', address='$address', specialty='$specialty', №_zalicovoi='$№_zalicovoi' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showStudents.php")
?>
