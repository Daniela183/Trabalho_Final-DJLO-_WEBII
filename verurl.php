<?php
class verurl{
    function trocarUrl ($url){
        if (empty($url)){
            $url = "principal.php";
        } else {
            $url = "secoes/$url.php";
        }
        include_once ($url);
    }
}


?>