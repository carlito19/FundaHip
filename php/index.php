<?php
include './php/Connexion.php';
$db = new Connexion();
if ($db->Connectar())
{
    echo "CONECTADO";
    $db->Registar();
    $db->Desconnexion();
}

?>