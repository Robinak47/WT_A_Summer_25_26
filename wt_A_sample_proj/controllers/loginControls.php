<?php
require_once "../models/usersModel.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $userId=$_POST["userId"];
    $pass=$_POST["pass"];
    $userIdErr="";
    $passErr="";
    $hasErr=false;

    if(empty($userId))
    {
        $hasErr=true;
        $userIdErr="user id Cannot be Empty";
    }

    if(empty($pass))
    {
        $hasErr=true;
        $passErr="password Cannot be Empty";
    }

    if($hasErr)
    {
        header("Location: ../views/login.php?userIdErr=".$userIdErr."&passErr=".$passErr);
    }
    else
    {
       $user=login($userId, $pass);
       if($user)
        {   
            if($user["role"]=="admin")
            {
                session_start();
                $_SESSION["userId"]=$user["userId"];
                $_SESSION["role"]=$user["role"];
                header("Location: ../views/admin/adminDashboard.php");
            }
            else if($user["role"]=="employee")
            {
            session_start();
                $_SESSION["userId"]=$user["userId"];
                $_SESSION["role"]=$user["role"];
                header("Location: ../views/employee/employeeDashboard.php");
            }

            else if($user["role"]=="customer")
            {
            session_start();
                $_SESSION["userId"]=$user["userId"];
                $_SESSION["role"]=$user["role"];
                header("Location: ../views/customer/customerDashboard.php");
            }
            else
                {
                    header("Location: ../views/login.php?notFoundErr="."User Not Found");
                }
        }
        else
        {
             header("Location: ../views/login.php?notFoundErr="."User Not Found");
        }
    }
}



?>