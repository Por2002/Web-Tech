<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7</title>
</head>
<body>
    
<?php
    $DayOfMonth = array( // Key => Value
        "Januaray" => 31,
        "February" => 28,
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31,
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31
    );
    // foreach loop
    echo "<ul>";
    foreach ($DayOfMonth as $MonthName => $Month_Days) {
        echo "<li>" . $MonthName . ", " . $Month_Days . "</li>";
    }
    echo "</ul>";
?>

</body>
</html>