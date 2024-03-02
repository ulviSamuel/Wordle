<?php   
    if(isset($_REQUEST['nuovaParola']))
    {
        session_start();
        $nuovaParola = $_REQUEST['nuovaParola'];
    }
    /*$sql = "CALL testVocabolario('$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    if($row[0] == 1)
        $parolaEistente = true;
    else
        $parolaEistente = false;*/
    $randomNumber = rand(0, 1);
    $result = ($randomNumber == 1) ? true : false;
    $parolaEistente = $result;
    if(isset($_REQUEST['nuovaParola']))
    {
        if($parolaEistente == false)
            $_SESSION['parolaEsistente'] = "non esiste";
        else
            $_SESSION['parolaEsistente'] = "esiste";
    }
?>