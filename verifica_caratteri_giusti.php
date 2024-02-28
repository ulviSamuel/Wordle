<?php
    $sql = "CALL testCarattere(1, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($row[$idx] == 1)
            $vectColori[$idx] = '#ffff00';
    }
?>