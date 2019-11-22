<?php
include_once "Item.php";

$item1 = new Item("I-917", "Sunsilk Shampoo", 300);
$item2 = new Item("I-252", "Dove Cream", 530);
$item3 = new Item("I-212", "Coke Can", 75);

$items = array();
array_push($items, $item1);
array_push($items, $item2);
array_push($items, $item3);

foreach ($items as $anItem) {
    echo $anItem->getCode() . " " . $anItem->getName() . " " . $anItem->getUnitPrice(); echo "<br>";
}
