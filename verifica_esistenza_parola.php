<?php   
<<<<<<< HEAD
    if(isset($_REQUEST['nuovaParola']))
    {
        session_start();
        $nuovaParola = $_REQUEST['nuovaParola'];
    }
    /*$sql = "CALL testVocabolario('$nuovaParola')";
=======
    $sql = "CALL testVocabolario('$nuovaParola')";
>>>>>>> parent of 8c717e3 (Cose)
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    if($row[0] == 1)
        $parolaEistente = true;
    else
<<<<<<< HEAD
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
=======
        $parolaEistente = false;
    /*if($row[0] == 1)
        echo $vecchieParole . "<br>" . $nuovaParola;
    else
        echo $vecchieParole;*/
>>>>>>> parent of 8c717e3 (Cose)
?>