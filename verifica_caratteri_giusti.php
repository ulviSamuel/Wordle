<?php
    $sql = "CALL testCarattere($idParolaDaTrovare, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($row[$idx] == 1 && $vectColori[$idx] == '#000000')
            $vectColori[$idx] = '#ffff00';
    }
?>