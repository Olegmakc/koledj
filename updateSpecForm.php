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
        include("showGroups.php")    
    ?>

<form action="updateSpec.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="kod_specialty" type="text"><br>
        <label>Нове значення спеціальності</label><input name="name_specialty" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>