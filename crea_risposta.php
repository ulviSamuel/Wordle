<?php
    if($parolaEistente == true)
    {
        $codiceHtml = $vecchieParole . " <div class='parola'>";
        for($idx = 0; $idx < 5; ++$idx)
        {
            $char = substr($nuovaParola, $idx, 1);
            $codiceHtml = $codiceHtml . "<span class='$vectColori[$idx]'>$char</span>";
        }
        $codiceHtml = $codiceHtml . "</span>";
    }
    else
        $codiceHtml = $vecchieParole;
?>