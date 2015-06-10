<?php

var_dump($_FILES)

namespace abeautifulsite;
// use Exception;

require 'abeautifulsite/SimpleImage.php';

$file       = $_FILES['file']['tmp_name'];
$fileName   = $_FILES['file']['name'];
$fileType   = $_FILES['file']['type'];

// check extension
$allowedExts = array("jpg", "jpeg", "png");
$rootName = reset(explode(".", $fileName));
$extension = end(explode(".", $fileName));

// create new file name
$time = time();
$newName = $rootName.$time.'.'.$extension;

// temporarily save file
$moved = move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/large/".$newName );

//crop and move
 $img = new SimpleImage();

    // Crop
    $img->load("uploads/large/".$newName)->crop(0, 0, 640, 640)->save("uploads/large/".$newName);
    $img->load("uploads/large/".$newName)->crop(0, 0, 440, 440)->save("uploads/medium/".$newName);
    $img->load("uploads/large/".$newName)->crop(0, 0, 220, 220)->save("uploads/small/".$newName);





if ($moved) $path = "uploads/".$newName;

$body = $_POST['body'];
$userId = $_POST['userId'];


$time = time();
if ($moved) {
    $fullUrl = "http://antiblank.com/testPhotoUpload/".$path;
    $arrayToSend = array('status'=>'success','time'=>$time,'body'=>$body,'userId'=>$userId, "imageURL"=>$fullUrl);
} else {
    $arrayToSend = array('status'=>'FAILED','time'=>$time,'body'=>$body,'userId'=>$userId);
}

header('Content-Type:application/json');
echo json_encode($arrayToSend);







