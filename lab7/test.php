<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7</title>
</head>
<body>
    
<h1>PHP code part 1</h1>
<?php
    $value = 10;
    $myarr = array(1,2,3,4,5,6,7,8,9,10,11,12);
    $power_value = $value * $value;
    echo "Power of " . $value . " is " . $power_value;
?>
<h1>PHP code part 2</h1>
<?php
    for ($i = 0; $i < $value; $i++) {
        echo $i . " x " . $value . " = " . $i * $value . "<br>";
    }
?>
<h1>PHP code part 3</h1>
<?php
    for ($i = 0; $i < sizeof($myarr); $i++) {
        echo $myarr[$i] . " x " . $value . " = " . $myarr[$i] * $value . "<br>";
    }
?>
<?php

    foreach ($myarr as $value) {
        print ("$value <br>");
    }

?>


</body>
</html>