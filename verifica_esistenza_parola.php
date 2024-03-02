<?php   
    if(isset($_REQUEST['nuovaParolaVerifica']))
    {
        $nuovaParola = $_REQUEST['nuovaParolaVerifica'];
    }
    /*$sql = "CALL testVocabolario('$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    if($row[0] == 1)
        $parolaEistente = true;
    else
        $parolaEistente = false;*/
    $parolaEistente = true;
    if(isset($_REQUEST['nuovaParolaVerifica']))
    {
        $randomNumber = rand(0, 1);
        $result = ($randomNumber == 1) ? true : false;
        $parolaEistente = $result;
        if($parolaEistente == false)
            echo "non esiste";
        else
            echo  "esiste";
    }
?>