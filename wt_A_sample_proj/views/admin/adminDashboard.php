<?php
session_start();
if(isset($_SESSION["userId"]) && isset($_SESSION["role"]))
{
    if($_SESSION["role"]=="admin")
    {
        
    }
    else if($_SESSION["role"]=="employee")
    {
        header("Location: ../employee/employeeDashboard.php");
    }
    else if($_SESSION["role"]=="customer")
    {
        header("Location: ../customer/customerDashboard.php");
    }
    else
    {
        header("Location: ../login.php");
    }
}

else
{   
    header("Location: ../login.php");
}


?>


<!doctype html>
<html>

<head>
    <script src="js/adminDashboardJs.js" defer></script>
</head>

<body>
    <h1> Welcome admin</h1>
    <h1>user ID:</h1>
    <?php
        echo $_SESSION["userId"];
    ?>

    <button id="logoutBtn"> Logout</button>
</body>

</html>