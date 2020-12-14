﻿<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Students</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'koledj1'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
    $mysqli->set_charset("utf8"); // Встановлюємо кодування utf8
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query('SELECT * FROM students ORDER BY id')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список студентів: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ІД</th><th>ПІБ</th><th>Дата народження</th><th>Адрес</th><th>Спеціальність</th><th>номер залікової</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td>
			<td>%s</td></tr>", $row['id'], $row['pib'], $row['birth_data'],$row['address'],$row['specialty'],$row['№_zalicovoi']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    }

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoStudentsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateStudentsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromStudentsForm.php">Видалити рядок</a><br></li>
        <li><a href="showStudentsGroupsKurators.php">Звіт Студенти - Спеціальність - Заліковки</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>