<?php

    $firstName = "First Name:".$_POST['fName']." ";
    $lastName = "Last Name:".$_POST['lName']." ";

    $fp = fopen('userData/storage.txt', 'a');
    fwrite($fp, $firstName);
    fwrite($fp, $lastName);
    fclose($fp);

?>






