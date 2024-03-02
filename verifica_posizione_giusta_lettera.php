<?php
    /*$sql = "CALL testParole($idParolaDaTrovare, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $vectColori[5];
    $row = mysqli_fetch_array($res);*/
    $row = [0, 0, 0, 0, 0];
    $vectColori = ['', '', '', '', ''];
    $cont = 0;
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($row[$idx] == 1)
        {
            ++$cont;
            $vectColori[$idx] = 'letteraVerde';
        }
        else
        {
            $vectColori[$idx] = 'letteraNera';
        }
    }
?>