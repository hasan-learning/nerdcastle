<?php
include "Person.php";

$person = new Person("Ali", "Akbar", "Hasan");

$fullName = $person->getMyFullName();
$reverseFullName = $person->getFullReverseName();

echo $fullName;    echo "<br>";
echo $reverseFullName;
