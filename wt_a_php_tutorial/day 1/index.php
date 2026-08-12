<!-- <?php

    echo "<h1> Meow</h1>";

?> -->


<!doctype html>
<html>

<head>
    <style>
    body {
        background-color: red;
    }

    h1 {
        width: 400px;
        height: 200px;
        border: 2px solid white;
    }

    p {
        font-weight: bold;
        font-size: 40px;
    }
    </style>
</head>

<body>

    <p><?php 
        $name="tom";
        echo $name;
    ?></p>
    <h1> Meow</h1>

    <button onClick="sayMeow()"> Click me</button>

    <script>
    function sayMeow() {
        alert("meow");
    }
    </script>
</body>

</html>