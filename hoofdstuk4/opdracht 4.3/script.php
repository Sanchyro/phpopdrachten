<?php

//Taak 2

//De string aanmaken
$task2 = "Lancering in: ";
//De teller aanmaken
$count = 19;
while($count>=0){
    //Zolang het nog niet minder is dan 0 is
    $task2 .= $count . ", ";
    $count--;
}

//Taak 3

//De string aamaken
$task3 = "Lancering in: ";
for($count = 19; $count>=0; $count--){
    //Zolang het nog niet minder dan 0 is
    $task3 .= $count . ", ";
}

//Taak 4

//De string aanmaken
$task4 = "";
$teller = 1;
while($teller<=6){
    //Zolang het nog niet hoger dan zes is
    $task4 .= "<h" . $teller . ">Dit is de " . $teller . "e iteratie</h" . $teller . ">";
    $teller++;
}

//Taak 5

//De string aanmaken
$taak5 = "<table><tr>";
for($tel=1;$tel<=10;$tel++){
    //Zolang het nog niet hoger dan 10 is
    $taak5 .= "<td>Dit is de " . $tel . "e iteratie</td>";
}
$taak5 .= "</tr></table>";

//Taak 6

$taak6 = "";
$currentYear = $year;
while($currentYear>=2002){
    $age = $currentYear-2002;

    if($age>=20)
        $stage = "volwassen";
    elseif($age>=18)
        $stage = "adolescent";
    elseif($age>=12)
        $stage = "puber";
    elseif($age>=8)
        $stage = "tiener";
    elseif($age>=4)
        $stage = "kleuter";
    elseif($age>=2)
        $stage = "peuter";
    else
        $stage = "baby";

    if($currentYear == 2002)
        $taak6 .= "<p>In " . $currentYear . " ben ik geboren.</p>";
    else
        $taak6 .= "<p>In " . $currentYear . " was ik " . $age . " jaar oud en was ik een " . $stage . "</p>";
    $currentYear--;
}


?>