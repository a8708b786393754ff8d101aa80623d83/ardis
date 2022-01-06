<?php 

function tree_file_config(){ //fn
    if(count(URL) !== 6){
        return URL[4];
    }return [URL[5], URL[6]];
}
