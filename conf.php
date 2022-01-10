<?php 

function tree_file_config(){  // retourne le nom du fichier
    if(count(URL) !== 6){
        return URL[4];
    }return [URL[5], NULL];
}
?>