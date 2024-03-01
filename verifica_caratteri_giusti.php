<?php
    /*$sql = "CALL testCarattere($idParolaDaTrovare, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);*/
    $row = [0, 1, 0, 0, 0];
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($row[$idx] == 1 && $vectColori[$idx] == 'letteraNera')
            $vectColori[$idx] = 'letteraGialla';
    }
?>