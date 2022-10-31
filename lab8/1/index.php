<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = "http://10.0.15.20/lab8/restapis/currencyrate";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $rate = $result->rates;
        if (isset($_POST['sele'])) {
            $cur1 = $_POST['sele'];
            $cur2 = $_POST['seleto'];
            $mon = floatval($_POST['inptop']);
            $xx = $rate->$cur2 / $rate->$cur1;
            $con = round($xx * $mon, 2);
        }
        
    ?>

    <h1>Currency Converter</h1>
    <form action="index.php" method="POST">
        <label for="from">From : </label>
        <select name="sele" id="sele">
            <option value=""></option>
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" name="inptop" id="inptop" value="<?=@$mon;?>"> <br>
        <label for="to">To : </label>
        <select name="seleto" id="seleto">
            <option value=""></option>
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" name="inpbot" id="inpbot" value="<?=@$con;?>"> <br>
        <button type="submit" name="butt">Convert</button>
    </form>

</body>
</html>