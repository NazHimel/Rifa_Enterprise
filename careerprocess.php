<?php

    //This is the directory where images will be saved
    $target = "uploads/";
    $target = $target . basename( $_FILES['Filename']['name']);

    //This gets all the other information from the form
    $Filename=basename( $_FILES['Filename']['name']);


    //Writes the Filename to the server
    if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
        //Tells you if its all ok
        echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
        // Connects to your Database
        try{
        require_once 'include/db_connect.php';
         $sql = 'INSERT INTO career_submission (career_cv)
            VALUES ("$Filename")';
        //$sql = "INSERT INTO career_submission SET career_cv='$Filename')";
         $db->query($sql);

        } catch (Exception $e){
            $error = $e->getMessage();
        }
    } else {
        //Gives and error if its not
        echo "Sorry, there was a problem uploading your file.";
    }




?>