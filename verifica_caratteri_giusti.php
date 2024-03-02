<?php
    /*$sql = "CALL testCarattere($idParolaDaTrovare, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $row = mysqli_fetch_array($res);*/
    $row = [0, 0, 0, 0, 0];
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($row[$idx] == 1 && $vectColori[$idx] == 'letteraNera')
        {
            $vectColori[$idx] = 'letteraGialla';
        }
        else
        {
            if($vectColori[$idx] == 'letteraNera')
            {
                $lettera = substr($nuovaParola, $idx, 1);
                if (empty($lettereBandite))
                {
                    array_push($lettereBandite, $lettera);
                }
                else
                {
                    if(!in_array($lettera, $lettereBandite))
                        array_push($lettereBandite, $lettera);
                }
            }
        }
    }
    sort($lettereBandite);
?>