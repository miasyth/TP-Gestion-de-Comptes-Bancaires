<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


echo json_encode($_POST);

$city=$_POST["city_id"]; // Choix de la ville
$tab=$_POST;
echo($_POST["city_id"]);

$nom=$_POST["name_id"]; // Mettre son nom de famille
$tab=$_POST;
echo($_POST["name_id"]);

$prenom=$_POST["prenom_id"]; // Mettre son prénom
$tab=$_POST;
echo($_POST["prenom_id"]);

$age=$_POST["age_id"]; // Mettre son âge
$tab=$_POST;
echo($_POST["age_id"]);

$sexe=$_POST["sexe_id"]; // Choix du sexe
$tab=$_POST;
echo($_POST["sexe_id"]);


$adress=$_POST["adress_id"]; // renseignement sur l'adresse
$tab=$_POST;
echo($_POST["adress_id"]);

$codePostal=$_POST["code_id"];
$tab=$_POST;
echo($_POST["code_id"]);

$portable=$_POST["port_id"]; // Renseignement sur les contacts 
$tab=$_POST;
echo($_POST["port_id"]);

$fixe=$_POST["fixe_id"];
$tab=$_POST;
echo($_POST["fixe_id"]);

$mail=$_POST["mail_id"];
$tab=$_POST;
echo($_POST["mail_id"]);



foreach($tab as $key => $val){
    echo($key);
};


?>

</body>
</html>
