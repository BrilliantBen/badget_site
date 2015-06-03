<?php

var_dump($_FILES)

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
$moved = move_uploaded_file($_FILES["file"]["tmp_name"], "assets/images/".$newName );
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