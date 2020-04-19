<?php
include_once 'class/Point.php';
include_once 'class/MovablePoint.php';

$point = new Point(2.3, 3.6);
foreach ($point->getXY() as $value) {
    echo $value . "-";
}
echo "<br><br>" . $point . "<br><br>";

$move = new MovablePoint(5.3, 6.4, 2.1, 2.5);
foreach ($move->getSpeed() as $value) {
    echo $value . "-";
}
echo "<br><br>" . $move;
echo "<br><br>" . $move->move();
echo $move;