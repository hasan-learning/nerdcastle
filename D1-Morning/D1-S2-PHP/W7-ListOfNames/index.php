<?php

$nameList = array();
array_push($nameList, "Rana");
array_push($nameList, "Sumona");
array_push($nameList, "Alif");
array_push($nameList, "Kartik");

foreach ($nameList as $name) {
    echo $name; echo "<br>";
}


$name = $nameList[2];
//echo $name; echo  "<br>";

$key = array_search("Sumona",$nameList);
if($key !==false){
    unset($nameList[$key]);
}

$nameList[0] = "Jamil";


echo "****After change*** <br>";
foreach ($nameList as $name) {
    echo $name;    echo "<br>";
}

//array_push( $nameList,"Sumona");
