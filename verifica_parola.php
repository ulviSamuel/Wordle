<?php
    $vecchieParole = $_REQUEST['vecchieParole'];
    $nuovaParola   = $_REQUEST['nuovaParola'];
    $codiceHtml = "";
    //$idParolaDaTrovare = $_SESSION['idParolaDaTrovare'] ;
    //require_once("var_conn.php");
    require_once("verifica_esistenza_parola.php");
    if($parolaEistente == true)
    {
        require_once("verifica_posizione_giusta_lettera.php");
        if($cont != 5)
            require_once("verifica_caratteri_giusti.php");
    }
    require_once("crea_risposta.php");
    echo $codiceHtml;
    //echo $_REQUEST['vecchieParole'] . "<br>" . $_REQUEST['nuovaParola'];
?>