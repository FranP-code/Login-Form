<?php

function error($string) {
    return '<h2 class=`invalid`>'. $string . '</h2>';
}

function backToPreviusPage($secs, $linkPage) {
    return '<h3 class=`backToPreviousPage`>Coming back to the previous page in ' . $secs . ' seconds' .
    
    '<script>

        function goBackPage() {
            window.location.replace(`' . $linkPage . '`)
            console.log(`funka`)
        }

        setTimeout(goBackPage, ' . $secs * 1000 . ')

    </script>';

}

?>