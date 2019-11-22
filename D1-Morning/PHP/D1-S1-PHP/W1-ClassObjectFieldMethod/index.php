<?php
    include "Person.php";

    $person1 = new Person();
    $person1->firstName = "Imtiaz";
    $person1->middleName = "Ahmed";
    $person1->lastName = "Rana";

    $fullName = $person1->getMyFullName();
    $reverseFullName = $person1->getFullReverseName();

    echo $fullName;    echo "<br>";
    echo $reverseFullName;  echo "<br>";

    echo "<br>";

    //Second Object
    $person2 = new Person();
    $person2->firstName = "Ali";
    $person2->middleName = "Akber";
    $person2->lastName = "Hasan";

    $fullName = $person2->getMyFullName();
    $reverseFullName = $person2->getFullReverseName();

    echo $fullName;    echo "<br>";
    echo $reverseFullName;
