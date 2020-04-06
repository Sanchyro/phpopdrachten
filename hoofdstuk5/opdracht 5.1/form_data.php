<?php
    $company = $_GET["company"];
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $message = $_GET["message"];
?>
<table>
    <tr>
        <td>Bedrijfsnaam:</td>
        <td><?php echo $company;?></td>
    </tr>
    <tr>
        <td>Voornaam:</td>
        <td><?php echo $firstname;?></td>
    </tr>
    <tr>
        <td>Achternaam:</td>
        <td><?php echo $lastname;?></td>
    </tr>
    <tr>
        <td>Telefoonnummer:</td>
        <td><?php echo $phone;?></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><?php echo $email;?></td>
    </tr>
    <tr>
        <td>Bericht:</td>
        <td><?php echo $message;?></td>
    </tr>
</table>