<?php

date_default_timezone_set('Asia/Manila');


if(isset($_FILES) && is_array($_FILES) && count($_FILES)){

    $date = date('Y-m-d His');
    $temp = explode(".",$_FILES['myfile']['name']);
    $newfilepath = $date."-".$temp[0].".jpeg";
    move_uploaded_file($_FILES['myfile']['tmp_name'],"img/".$newfilepath);

    echo "img/".$newfilepath;
}
else{
    echo "default.png";
}











?>