<?php
    $sql = "CALL testParole(1, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $vectColori[5];
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($row[$idx] == 1)
            $vectColori[$idx] = '#00ff00';
        else
            $vectColori[$idx] = '#000000';
    }
    if($row[0] == 1)
        echo $vecchieParole . "<br>" . $nuovaParola;
    else
        echo $vecchieParole;
?>