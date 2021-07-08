<?php

$fileName = $_FILES['uploadfilex']['name']; 
    $fileSize = $_FILES['uploadfilex']['size'];
    $fileError = $_FILES['uploadfilex']['error'];
    $success = false;
    if($fileSize > 0 || $fileError == 0){
      $fileName = 'file_' . rand(0, 10000) . '.' . end(explode(".", $_FILES["uploadfilex"]["name"]));
      $move = move_uploaded_file($_FILES['uploadfilex']['tmp_name'], 'image/'.$fileName);
    }
    $imgtype=$_FILES['uploadfilex']['type'];

      if($move){
         $keteranganx = 'image/'.$fileName;
      }
?>