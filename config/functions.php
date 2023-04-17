<?php
function getFolderProyect(){
    if(strpos(__DIR__, '/')!==false){ 
        $folder = str_replace('/opt/lampp/htdocs', '/', __DIR__);
    }else{
        $folder = str_replace('C:\\xampp1\\htdocs\\', '/', __DIR__);
    }

    $folder = str_replace('config', '',$folder);
    return $folder;

}

function saveImage($file){
    $imageName = str_replace('','',$file['imagen']['name']);
    $imageTmp = $file['imagen']['tmp_name'];

    move_uploaded_file($imageTmp, $_SERVER['DOCUMENT_ROOT'].getFolderProyect().'/images/'.$imageName);
    return $imageName;

}
?>