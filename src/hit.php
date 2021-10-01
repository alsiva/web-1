

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестируем попадание</title>
</head>
<body>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
$r = $_POST['r'];

require __DIR__ . '/calculation.php';

$hit = doesItHit($x, $y, $r);
?>

<p>
<?php if ($hit == true): ?>
    Попадание есть
<?php else: ?>
    Попадания нет
<?php endif; ?>
</p>
</body>
</html>