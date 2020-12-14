<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showStudents.php")    
    ?>

<form action="updateStudents.php" method="post">
        <label>IД студента, значення якого змінюмо</label><input name="id" type="text"><br>
        <label>ПІБ</label><input name="pib" type="text"><br>
		<label>Дата народження</label><input name="birth_data" type="text"><br>
		<label>Адреса</label><input name="address" type="text"><br>
		<label>Спеціальність</label><input name="specialty" type="text"><br>
		<label>Номер залікової</label><input name="№_zalicovoi" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>