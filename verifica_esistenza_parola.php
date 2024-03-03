<?php   
    if(isset($_REQUEST['nuovaParolaVerifica']))
    {
        $nuovaParola = $_REQUEST['nuovaParolaVerifica'];
    }
    require_once("var_conn.php");
    $sql = "CALL testVocabolario('$nuovaParola')";
    $res = mysqli_query($con, $sql);
    while(mysqli_next_result($con)){;}
    $row = mysqli_fetch_array($res);
    if($row[0] == 1)
        $parolaEistente = true;
    else
        $parolaEistente = false;
    mysqli_free_result($res);
    if(isset($_REQUEST['nuovaParolaVerifica']))
    {
        if($parolaEistente == false)
            echo "non esiste";
        else
            echo  "esiste";
    }
?>