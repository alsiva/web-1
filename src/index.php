<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Веб-программирование</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <h1>Лабораторная работа №1</h1>
    <ul>
        <li>Студент: <span data-name="alex">Иванов Алексей Анатольевич</span></li>
        <li>Группа: <span class="cursive">P3211</span></li>
        <li>Вариант: 11008</li>
    </ul>
</header>
<p class="green-box">
    Разработать PHP-скрипт, определяющий попадание точки на координатной плоскости в заданную область,
    и создать HTML-страницу, которая формирует данные для отправки их на обработку этому скрипту
</p>
<img alt="зона для тестирования попадания" src="areas.jpg" class="area"/>
<form id="hitDataForm" action="/hit.php" method="post">
    <label for="xInput">x</label>
    <input id="xInput" name="x" value="0" />
    <label for="yInput">y</label>
    <input id="yInput" name="y" value="0" />
    <label for="radiusInput">radius</label>
    <input id="radiusInput" name="r" value="1"/>
    <button type="submit">submit</button>
</form>
<script src="validation.js"></script>
</body>
</html>