<?php
    $sql = "CALL testParole(15, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $vectColori[5];
    $cont = 0;
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($row[$idx] == 1)
        {
            ++$cont;
            $vectColori[$idx] = '#00ff00';
        }
        else
            $vectColori[$idx] = '#000000';
    }
?>