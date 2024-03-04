<?php
    $sql = "CALL testCarattere($idParolaDaTrovare, '$nuovaParola')";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    //$row = ['0', '1', '0', '0', '1'];
    $numeriBinari = str_split($row[0]);
    for($idx = 0; $idx < 5; ++$idx)
    {
        if($numeriBinari[$idx] == '1' && $vectColori[$idx] == 'letteraNera')
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