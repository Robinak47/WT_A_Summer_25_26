<?php

    $oneDArr=["meow","tiger","Bird","Cat","fish"];

    echo "<br>","Printing one D array";
    foreach($oneDArr as $arr)
        {
            echo "<br>",$arr;
        }

        foreach($oneDArr as $index=>$arr)
            {
                echo "<br>",$index,"=>",$arr;
            }

    
    $twoDarr=[[10,20,30], [40,50,60,70], [80,90,100,110,120,130]];
    foreach($twoDarr as $twoArr)
        {
            echo "<br>";
            foreach($twoArr as $ele)
                {
                    echo $ele," ";
                }
        }


?>