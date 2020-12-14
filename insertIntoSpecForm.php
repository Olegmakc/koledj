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

    <form action="insertIntoSpec.php" method="post">
        <label>Код спеціальності</label><input name="kod_specialty" type="text"><br>
        <label>Назва спеціальності</label><input name="name_specialty" type="text"><br>
		<input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
