<?php
function returnMusicListStr($bay, $resuBEATS){
    $str = "[";
    if ($bay == 'songs') {

        foreach($resuBEATS as $r) {
            $pose = $r['beat_source'];

            $str .= "'./audio/$pose',";

        }

    } else if ($bay == 'thumbnails'){
        foreach($resuBEATS as $r) {
            $pose = $r['beat_cover'];

            $str .= "'./img/$pose',";
        }
    }
    else if ($bay == 'artists'){
        foreach($resuBEATS as $r) {
            $pose = $r['beat_author'];

            $str .= "'$pose',";
        }
    }else if ($bay == 'titles'){
        foreach($resuBEATS as $r) {
            $pose = $r['beat_title'];

            $str .= "'$pose',";
        }
    }
    // ici effacer la virgule en + puis c bon
    $str = substr($str,0,-1);
    $str .= "]";

    return $str;


}


?>