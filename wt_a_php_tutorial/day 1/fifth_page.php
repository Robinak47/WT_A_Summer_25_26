<?php

    $arr=["moew", "tom", "jerry"];

    foreach($arr as $ele)
        {
            echo "<br>".$ele;
        }

    

    function sayMyName()
    {
        echo "<br>", "HEizenburg";
    }

    sayMyName();

    function sum($a, $b)
    {
        return $a+$b;
    }


    $addRes=sum(10,20);
    echo "<br>",$addRes;


    echo "<br>","Passing and Printing array from function";
    function printArr($arr2)
    {
        foreach($arr2 as $a)
            {
                echo "<br>",$a;
            }
    }

    printArr([10,20,30,40]);

?>