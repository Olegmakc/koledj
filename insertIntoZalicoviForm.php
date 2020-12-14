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
        include("showZalicovi.php")    
    ?>

    <form action="insertIntoZalicovi.php" method="post">
        <label>IД </label><input name="id" type="text"><br>
        <label>№_залікової</label><input name="№_zalicovoi" type="text"><br>
		<label>Дата </label><input name="data" type="data"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
