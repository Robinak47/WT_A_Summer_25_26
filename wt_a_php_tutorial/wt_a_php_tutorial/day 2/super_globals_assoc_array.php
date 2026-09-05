<?php

    $name="tom";

    function sayMyName()
    {
        echo "My name is :",$GLOBALS["name"];

    }

    sayMyName();

    echo "<br>currently running script is: ",$_SERVER["PHP_SELF"];
    echo "<br>Server name is: ",$_SERVER["SERVER_NAME"];
    echo "<br>HTTP HOST IS",$_SERVER['HTTP_HOST'];
    echo "<br> Refferer", $_SERVER['HTTP_REFERER'];
    echo "<br> HTTP CLIENT: ", $_SERVER['HTTP_USER_AGENT'];

    echo "<br> Script Name: ",$_SERVER['SCRIPT_NAME'];
    echo "<br> Request method: ", $_SERVER["REQUEST_METHOD"];
?>