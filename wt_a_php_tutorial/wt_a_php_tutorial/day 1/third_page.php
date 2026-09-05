<?php

    $id=101;
    
    function myFunc()
    {
        global $id;
       $name="meow";
       echo $name,"<br>"; 
       echo $id,  "<br>";
       //echo $GLOBALS["id"],"<br>";
    }


    myFunc();
    //echo $id,  "<br>";


    function countDown()
    {
        static $count=0;
        $count++;
        echo $count, "<br>";
    }

    countDown();
    countDown();
    countDown();
    

    $str="All of you  are going to fail in the final term";
    echo strlen($str),"<br>";
    echo str_word_count($str),"<br>";
    echo str_contains($str, "fail"),"<br>";


?>