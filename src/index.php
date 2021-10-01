<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестируем PHP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php echo '<p>Привет, мир!</p>'; ?>
<img alt="зона для тестирования попадания" src="areas.jpg" class="area"/>
<form id="hitDataForm" action="/hit.php" method="post">
    <label for="xInput">x</label>
    <input id="xInput" name="x" type="number"/>
    <label for="yInput">y</label>
    <input id="yInput" name="y" type="number"/>
    <label for="radiusInput">radius</label>
    <input id="radiusInput" name="r" type="number"/>
    <button type="submit">submit</button>
</form>
<script src="validation.js"></script>
</body>
</html>