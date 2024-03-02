<?php
    if(isset($_REQUEST['lettereBandite']))
    {
        $lettereBandite = array();
        $posizioneInizio = strpos($_REQUEST['lettereBandite'], "Lettere bandite: ");
        if ($posizioneInizio !== false) 
        {
            $frasePresente = strpos($_REQUEST['lettereBandite'], "nessuna ancora scoperta");
            if($frasePresente == false)
            {
                $listaBandite = substr($_REQUEST['lettereBandite'], $posizioneInizio + 17);
                $listaBandite = trim($listaBandite);
                $lettereBandite = explode(", ", $listaBandite);
            }
        } 
    }
?>