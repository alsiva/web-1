

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="hit.css">
    <title>Тестируем попадание</title>
</head>
<body>
<?php
class HitData {
    public $x;
    public $y;
    public $r;
    public $hit;

    public function __construct($x, $y, $r, $hit) {
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
        $this->hit = $hit;
    }
}

$x = $_POST['x'];
$y = $_POST['y'];
$r = $_POST['r'];

require __DIR__ . '/calculation.php';

$hit = doesItHit($x, $y, $r);
$hitData = new HitData($x, $y, $r, $hit);

$hits = array(
    $hitData,
)
?>

<table>
<thead>
<tr>
    <th>x:</th>
    <th>y:</th>
    <th>radius:</th>
    <th>Попадание:</th>
</tr>
</thead>

<tbody id="tableData"> </tbody>
    <?php foreach($hits as $hitData): ?>
        <tr>
            <td><?= $hitData->x; ?></td>
            <td><?= $hitData->y; ?></td>
            <td><?= $hitData->r; ?></td>
            <td>
                <?php if ($hitData->hit == true): ?>
                    Попадание есть
                <?php else: ?>
                    Попадания нет
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>