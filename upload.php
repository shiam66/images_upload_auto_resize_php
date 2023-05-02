<?php

    $file = $_FILES['file']['tmp_name'];

    // $filetype = $_FILES['file']['size'];
    // print_r($filetype);
    // die();

    list($width,$height) = getimagesize($file);
    
    $nwidth = 312;   // $width/4; ratio divide 4 or 312 width
    $nheight = 350; // $height/4; ratio divide 4 or 350 height

    $newimage=imagecreatetruecolor($nwidth,$nheight);

    if($_FILES['file']['type'] == 'image/jpg'){
        $source = imagecreatefromjpg($file);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $file_name = time().'.jpg';
        imagejpg($newimage,'upload/'.$file_name);
    }
    elseif($_FILES['file']['type'] == 'image/png'){
        $source = imagecreatefrompng($file);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $file_name = time().'.png';
        imagepng($newimage,'upload/'.$file_name);
    }
    elseif($_FILES['file']['type'] == 'image/gif'){
        $source = imagecreatefromgif($file);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $file_name = time().'.gif';
        imagegif($newimage,'upload/'.$file_name);
    }
    elseif($_FILES['file']['type'] == 'image/jpeg'){
        $source = imagecreatefromjpeg($file);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $file_name = time().'.jpg';
        imagejpeg($newimage,'upload/'.$file_name);
    }
    
    // else{
    //     echo "Please select only jpg, jpeg, png and gif image";
    // }
?>