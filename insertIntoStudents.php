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
$sql = "INSERT INTO students (id, pib, birth_data, address, specialty, №_zalicovoi ) VALUES ('$id', '$pib', '$birth_data', '$address', '$specialty', '$№_zalicovoi' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showStudents.php")
?>
