<?php
 if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=trim($_POST["name"]);
        $age=$_POST["age"];
        $email=trim($_POST["email"]);
        $gender=$_POST["gender"]??"";
        $sports=$_POST["sports"]??"";
        $country=$_POST["country"]??"";
        $fileName=$_FILES["proPic"]["name"];
        $fileError=$_FILES["proPic"]["error"];
        $fileType=$_FILES["proPic"]["type"];
        $allowedTypes=["application/pdf", "image/jpeg"];
        $fileSize=$_FILES["proPic"]["size"];


        if($name=="")
        {
            echo "name should be provided","<br>";
        }
        elseif(!preg_match('/^[a-zA-Z\' -]+$/', $name))
        {
            echo "name cannot have numbers or special char";
        }
        else
        {
            echo $name, "<br>";
        }

        if(empty($age))
        {
            echo "age should be provided","<br>";     
        }
        elseif(!filter_var($age, FILTER_VALIDATE_INT))
        {
            echo "age must be int type","<br>";
        }
        elseif($age>80 || $age<18)
        {
            echo "you are too young or old to use our system","<br>";
        }
        else
        {
            echo $age,"<br>";
        }

        if(empty($email))
        {
            echo "email should be provided","<br>";   
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            echo "Invalid email format","<br>";
        }
        else
        {
            echo $email,"<br>";
        }
        if(empty($gender))
        {
            echo "Gender should be provided","<br>";  
        }
        else
        {
            echo $gender,"<br>";
        }
        if(empty($sports))
        {
            echo "At Least one sports  should be provided","<br>";  
        }
        else
        {
          echo implode(",", $sports),"<br>";   
        }
        
        if(empty($country))
        {
            echo "country should be provided","<br>";  
        }
        else
        {
            echo $country,"<br>";
        }

        if($fileError==4)
        {
            echo "Pro Pic should be provided","<br>";  
        }

        elseif(!in_array($fileType, $allowedTypes))
        {
            echo "only pdf and jpeg are allowed","<br>";
        }
        elseif($fileSize>(2*1024*1024))
        {
            echo "file is too large. max size allowed is 2mb","<br>";
        }
        else
        {
            echo $fileName,"<br>";
        }


        
      

        
        
    }




?>