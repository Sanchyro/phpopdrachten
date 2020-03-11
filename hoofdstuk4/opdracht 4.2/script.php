<?php

/*
 * Javascript
 *      Van de Wetering
 * Database SQL
 *      Van de wetering
 * Rekenen
 *      Van Meer
 * Nederlands
 *      Rijswijk
 * Loopbaan & Burgerschap
 *      Lambrechts
 * PHP
 *      Evers
 * Modelleren
 *      Gijsbrechts
 * ASP
 *      Gijsbrechts
 * Digitale Vaardigheden
 *      Pielage
 * Computertekenen
 *      Van den Berg
 * Engels
 *      Mitrovix
 */

$courseName = "PHP";

switch ($courseName)
{
    case "Database SQL":
    case "Javascript":
        $teacherName = "Van de Wetering";
        break;
    case "Rekenen":
        $teacherName = "Van Meer";
        break;
    case "Nederlands":
        $teacherName = "Rijswijk";
        break;
    case "L&B":
        $teacherName = "Lambrechts";
        break;
    case "PHP":
        $teacherName = "Evers";
        break;
    case "ASP":
    case "Modelleren":
        $teacherName = "Gijsbrechts";
        break;
    case "Digitale vaardigheden":
        $teacherName = "Pielage";
        break;
    case "Computertekenen":
        $teacherName = "Van den Berg";
        break;
    case "Engels":
        $teacherName = "Mitrovix";
        break;
}
?>