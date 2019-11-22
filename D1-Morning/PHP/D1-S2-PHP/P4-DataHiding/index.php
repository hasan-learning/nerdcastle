<?php
include "Circle.php";

$radius = 120.2;
$aCircle = new Circle($radius);

$area = $aCircle->getArea();
echo "Circle Area: " . $area; echo "<br>";

$aCircle->area = 150; //Area can be set !!
$aCircle->perimeter = 120000; // Perimeter can also be set !!

// Update the circle class by using "Data hiding" concept;

