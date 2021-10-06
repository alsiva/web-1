<?php
$time_start = microtime(true);

function doesItHit($x, $y, $r): bool {
    if ($x >=0 and $y >= 0 and $x^2 + $y^2 <= ($r/2)^2) {   //round check
        return true;
    } elseif ($x <= 0 and $y >= 0 and $y <= 2*$x+$r) {  //triangle check
        return true;
    } elseif (0 <= $x and $x <= $r/2 and -$r <= $y and $y <=0) {     //rectangle check
        return true;
    }

    return false;
}

class Hit {
    public $x;
    public $y;
    public $r;
    public $doesHit;

    public function __construct($x, $y, $r, $doesHit) {
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
        $this->doesHit = $doesHit;
    }
}

$key = "previous-hits";
$serializedHits = $_COOKIE[$key];
$hits = is_null($serializedHits) ?  array() : unserialize($serializedHits);

$x = $_POST['x'];
$y = $_POST['y'];
$r = $_POST['r'];

array_push($hits, new Hit($x, $y, $r, doesItHit($x, $y, $r)));
setcookie($key, serialize($hits));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="hit.css">
    <title>Тестируем попадание</title>
</head>
<body>
<table>
<thead>
<tr>
    <th>x:</th>
    <th>y:</th>
    <th>radius:</th>
    <th>Попадание:</th>
</tr>
</thead>
<tbody>
    <?php foreach($hits as $hitData): ?>
        <tr>
            <td><?= $hitData->x; ?></td>
            <td><?= $hitData->y; ?></td>
            <td><?= $hitData->r; ?></td>
            <td>
                <?php if ($hitData->doesHit == true): ?>
                    Попадание есть
                <?php else: ?>
                    Попадания нет
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
<a href="/">Попробовать ещё</a>
<p>
    <?php
    $date = new DateTime("now", new DateTimeZone('Europe/Moscow') );
    echo "Текущее время: ".$date->format('Y-m-d H:i:s');
    ?>
</p>
<p>
<?php
$time_end = microtime(true);
$execution_time_seconds = ($time_end - $time_start);

echo "Время выполнения скрипта: ".$execution_time_seconds." секунд"
?>
</p>
</body>
</html>