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
<form id="hitDataForm" action="hit.php" method="post">
    <label>
        x <input id="xInput" name="x" value="0" type="text" size="15" maxlength="2" />
    </label>
    <label>
        y <input id="yInput" readonly name="y" value="-5" size="3" />
        <input id="yIncrementButton" value="increment" type="button" />
    </label>

    <label>
        radius
        <select name="r">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </label>
    <button type="submit">submit</button>
</form>
<script src="validation.js"></script>
</body>
</html>