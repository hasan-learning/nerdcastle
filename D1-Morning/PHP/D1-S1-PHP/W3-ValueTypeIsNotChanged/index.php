<?php
    $a = 100;
    echo "Before: " . $a; echo "<br>";
    changeTheNumber($a);
    echo "After: " . $a; echo "<br>";

    function changeTheNumber($aNumber)
    {
        $aNumber = 200;
    }