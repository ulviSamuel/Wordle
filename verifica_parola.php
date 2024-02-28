<?php
    $vecchieParole = $_REQUEST['vecchieParole'];
    $nuovaParola   = $_REQUEST['nuovaParola'];
    $codiceHtml = "";
    require_once("var_conn.php");
    require_once("verifica_esistenza_parola.php");
    if($parolaEistente == true)
    {
        require_once("verifica_posizione_giusta_lettera.php");
    }
    echo $codiceHtml;
    //echo $_REQUEST['vecchieParole'] . "<br>" . $_REQUEST['nuovaParola'];
?>