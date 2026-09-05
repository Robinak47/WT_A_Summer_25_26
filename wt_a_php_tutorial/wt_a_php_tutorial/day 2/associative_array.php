<?php
    $associative_array=["num1"=>50, "num2"=>10, "num3"=>100, "num4"=>200, "num5"=>40];

    echo $associative_array["num4"];

    $arr2=array("name"=>"tom", "age"=>30, "cgpa"=>2.49);
    echo "<br> age is ",$arr2["age"];


    foreach($associative_array as $key=>$ele)
        {
            echo "<br>", $key,"=>",$ele;
        }


    $multiAssocArray=[["student1"=>["name"=>"Tom", "completed Credit"=>148]],["student2"=>["name"=>"Jack", "completed Credit"=>130]]];

    foreach($multiAssocArray as $arr)
        {
            foreach($arr as $outterKey=>$ele)
                {
                    echo "<br>",$outterKey,"<br>";
                    foreach($ele as $key=>$e)
                        {
                            echo $key,"=>",$e,", ";
                        }
                }
        }




?>