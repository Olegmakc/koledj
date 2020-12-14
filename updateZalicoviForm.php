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

<form action="updateZalicovi.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення, залікової </label><input name="№_zalicovoi" type="text"><br>
		<label>Нове значення дати </label><input name="data" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>