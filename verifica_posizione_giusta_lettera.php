<?php
    $sql = "CALL testParola($idParolaDaTrovare, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    //$row = ['0', '1', '0', '0', '0'];
    $vectColori = ['', '', '', '', ''];
    $cont = 0;
    $numeriBinari = str_split($row[0]);
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($numeriBinari[$idx] == '1')
        {
            ++$cont;
            $vectColori[$idx] = 'letteraVerde';
        }
        else
        {
            $vectColori[$idx] = 'letteraNera';
        }
    }
    while(mysqli_next_result($con)){;}
?>