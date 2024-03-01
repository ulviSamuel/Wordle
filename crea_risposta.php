<?php
    if($parolaEistente == true)
    {
        $codiceHtml = $vecchieParole . "<br>";
        for($idx = 0; $idx < 5; ++$idx)
        {
            $char = substr($nuovaParola, $idx, $idx + 1);
            $codiceHtml = $codiceHtml . "<span style='color: $vectColori[$idx];'>$char</span>";
        }
    }
    else
        $codiceHtml = $vecchieParole;
?>