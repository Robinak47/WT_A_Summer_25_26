<?php
    $phpObj=["name"=>"mr.meow", "age"=>20, "email"=>"meow@aiub.edu"];
    $jsonObj=json_encode($phpObj);
    echo $jsonObj;

    $phpObj2=json_decode($jsonObj);
    print_r($phpObj2);


?>