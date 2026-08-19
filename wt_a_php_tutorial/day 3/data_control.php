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


        $hasError=false;
        $nameError="";
        $ageError="";
        $emailError="";
        $genderError="";
        $sportsError="";
        $countryError="";
        $file_error="";


        if($name=="")
        {
            $nameError="name should be provided";
            $hasError=true;
        }
        elseif(!preg_match('/^[a-zA-Z\' -]+$/', $name))
        {
            $nameError="name cannot have numbers or special char";
            $hasError=true;
        }
        
        if(empty($age))
        {
            $ageError="age should be provided";     
            $hasError=true;
        }

        elseif(!filter_var($age, FILTER_VALIDATE_INT))
        {
            $ageError="age must be int type";
            $hasError=true;
        }
        elseif($age>80 || $age<18)
        {
            $ageError="you are too young or old to use our system";
            $hasError=true;
        }
        
        if(empty($email))
        {
            $emailError="email should be provided";   
            $hasError=true;
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $emailError="Invalid email format";
            $hasError=true;
        }
        
        if(empty($gender))
        {
            $genderError="Gender should be provided";  
            $hasError=true;
        }
        
        if(empty($sports))
        {
            $hasError=true;
            $sportsError="At Least one sports  should be provided";  
        }
       
        
        if(empty($country))
        {
            $countryError= "country should be provided";  
            $hasError=true;
        }
        

        if($fileError==4)
        {
            $hasError=true;
            $file_error="Pro Pic should be provided";  
        }

        elseif(!in_array($fileType, $allowedTypes))
        {
            $file_error="only pdf and jpeg are allowed";
            $hasError=true;
        }
        elseif($fileSize>(2*1024*1024))
        {
            $file_error="file is too large. max size allowed is 2mb";
            $hasError=true;
        }
        else
        {
            $tmp_loc=$_FILES["proPic"]["tmp_name"];
            $des_dir=__DIR__."/upload/";

            if(!is_dir($des_dir))
            {
                mkdir($des_dir,0775,true);
            }

            $destinaion=$des_dir.$fileName;

           $success= move_uploaded_file($tmp_loc,$destinaion);

           if($success)
            {

            }
            else
            {
                $file_error="file cannot be moved due to some error";
                $hasError=true;
            }
        }



        if($hasError)
        {
        
            $url="Location: index.php?nameError=".urlencode($nameError)."&emailError=".$emailError."&ageError=".$ageError."&genderError=".$genderError."&sportsError=".$sportsError."&countryError=".$countryError."&file_Error=".$file_error."&name=".$name;
            if(!empty($sports))
                {
                    $url=$url."&sports=".implode(",", $sports);
                }
                    
            header($url); 
        }

        else
        {
            echo $name,"<br>";
            echo $age,"<br>";
            echo $email,"<br>";
            echo $gender,"<br>";
            echo implode(", ",$sports),"<br>";
            echo $country,"<br>";
            echo $fileName,"<br>";
        }
        

        

        
      

        
        
    }




?>