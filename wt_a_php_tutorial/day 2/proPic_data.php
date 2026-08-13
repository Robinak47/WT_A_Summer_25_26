<?php

    echo "File Name: ",$_FILES["pro_pic"]["name"],"<br>";
    echo "File  Type: ",$_FILES["pro_pic"]["type"],"<br>";
    echo "File  size in byte: ",$_FILES["pro_pic"]["size"],"<br>";
    echo "File  Temp Location: ",$_FILES["pro_pic"]["tmp_name"],"<br>";
    echo "Error code: ",$_FILES["pro_pic"]["error"],"<br>";



?>