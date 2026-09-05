<!doctype html>
<html>

<head></head>

<body>
    <form action="data_control.php" method="post" enctype="multipart/form-data">
        <label>
            Name:
        </label>
        <input type="text" id="name" name="name" value=<?php if(isset($_GET["name"])){ echo $_GET["name"];}  ?>><br>
        <span style="color: red;">
            <?php

                if(isset($_GET["nameError"]))
                    {
                        echo $_GET["nameError"];
                    }


            ?>
        </span><br>

        <label>
            Age:
        </label>
        <input type=" number" id="age" name="age" value=""><br>
        <span style="color: red;">
            <?php

                if(isset($_GET["ageError"]))
                    {
                        echo $_GET["ageError"];
                    }


            ?>
        </span><br>

        <label>
            Email:
        </label>
        <input type="text" id="email" name="email" value=""><br>
        <span style="color: red;">
            <?php

                if(isset($_GET["emailError"]))
                    {
                        echo $_GET["emailError"];
                    }


            ?>
        </span><br>

        <label>
            Gender:
        </label>
        <input type="radio" id="maleRB" name="gender" value="male">male
        <input type="radio" id="femaleRB" name="gender" value="female">female
        <br>
        <span style="color: red;">
            <?php

                if(isset($_GET["genderError"]))
                    {
                        echo $_GET["genderError"];
                    }


            ?>
        </span><br>

        <label>
            Sports:
        </label>
        <input type="checkbox" id="cricketCB" name="sports[]" value="Cricket" <?php if(isset($_GET["sports"])){


        $values=explode(",", $_GET["sports"]);
        if(in_array("Cricket", $values ))
            {
                echo "checked";
            }
         
     }?>>cricket
        <input type="checkbox" id="footballCB" name="sports[]" value="Football" <?php if(isset($_GET["sports"])){


        $values=explode(",", $_GET["sports"]);
        if(in_array("Football", $values ))
            {
                echo "checked";
            }
         
     }?>>football
        <br>
        <span style="color: red;">
            <?php

                if(isset($_GET["sportsError"]))
                    {
                        echo $_GET["sportsError"];
                    }


            ?>
        </span><br>

        <label>
            Select Country:
        </label>
        <select name="country" id="country">
            <option value="">Select an Option</option>
            <option value="usa">USA</option>
            <option value="UK">UK</option>
            <option value="AUS">AUS</option>
        </select><br>
        <span style="color: red;">
            <?php

                if(isset($_GET["countryError"]))
                    {
                        echo $_GET["countryError"];
                    }


            ?>
        </span><br>

        <label> Profile Picture:</label>
        <input type="file" name="proPic" id="proPic"><br>
        <span style="color: red;">
            <?php

                if(isset($_GET["file_Error"]))
                    {
                        echo $_GET["file_Error"];
                    }


            ?>
        </span><br>

        <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset">


    </form>




</body>

</html>