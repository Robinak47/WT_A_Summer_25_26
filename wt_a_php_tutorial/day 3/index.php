<!doctype html>
<html>

<head></head>

<body>
    <form action="data_control.php" method="post" enctype="multipart/form-data">
        <label>
            Name:
        </label>
        <input type="text" id="name" name="name" value=""><br>
        <span></span><br>

        <label>
            Age:
        </label>
        <input type="number" id="age" name="age" value=""><br>
        <span></span><br>

        <label>
            Email:
        </label>
        <input type="text" id="email" name="email" value=""><br>
        <span></span><br>

        <label>
            Gender:
        </label>
        <input type="radio" id="maleRB" name="gender" value="male">male
        <input type="radio" id="femaleRB" name="gender" value="female">female
        <br>
        <span></span><br>

        <label>
            Sports:
        </label>
        <input type="checkbox" id="cricketCB" name="sports[]" value="Cricket">cricket
        <input type="checkbox" id="footballCB" name="sports[]" value="Football">football
        <br>
        <span></span><br>

        <label>
            Select Country:
        </label>
        <select name="country" id="country">
            <option value="">Select an Option</option>
            <option value="usa">USA</option>
            <option value="UK">UK</option>
            <option value="AUS">AUS</option>
        </select><br>
        <span></span><br>

        <label> Profile Picture:</label>
        <input type="file" name="proPic" id="proPic"><br>
        <span></span><br>

        <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset">


    </form>
</body>

</html>