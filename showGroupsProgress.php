<html>
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
    if($result = $mysqli->query('SELECT	progress.`id`,subject.name_subject,students.pib,zalicovi.№_zalicovoi, progress.`ocinka`  FROM progress  LEFT JOIN  subject ON 
progress.name_subject = subject.id LEFT JOIN students ON progress.№_zalicovoi=students.№_zalicovoi LEFT JOIN zalicovi ON progress.№_zalicovoi=zalicovi.id')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("<h3>Звіт - Кількість студентів в групах: </h3><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ID</th><th>Назва предмету</th><th>ПІБ</th><th>Заліковка</th><th>Оцінка</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name_subject'], $row['pib'], $row['№_zalicovoi'], $row['ocinka']); //виводимо результат на сторінку
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
        <li><a href="showStudents.php">Таблиця Students</a></li>
		<li><a href="showGroups.php">Таблиця Specialty</a></li>
		<li><a href="showDocuments.php">Таблиця Documents</a></li>
		<li><a href="showZalicovi.php">Таблиця Zalicovi</a></li>
		<li><a href="showProgress.php">Таблиця Progress</a></li>
		<li><a href="showSubject.php">Таблиця Subject</a></li>
		<li><a href="showTeachers.php">Таблиця Teachers</a></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
