<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border-bottom: 0.5px solid;
            width: 70px;
            font-size: 32px
        }
    </style>

</head>
<body>
    <form id="sood" action="index.php" method="post"> <!-- action เรียกไฟล์เดิม-->
        กรอกสูตรคูณ : <input type="number" id="inp" name="inp" value="0" />
        <input type="submit" id="submit" value="Submit">
    </form>

    <?php
        
        if (isset($_POST['inp'])) {
            $num = $_POST['inp'];
            echo "<h1>ตารางสูตรคูณแม่ $num</h1>";
            echo "<table><tr><th></th><th></th><th></th><th></th><th></th></tr>";
            $x = intval($num);
            for ($i = 2; $i <= 12; $i++) {
                echo "<tr>";
                echo "<td>$x</td> <td>x</td> <td>$i</td> <td>=</td> <td>" . $x * $i . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        
    ?>
</body>
</html>