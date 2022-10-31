<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            font-size: 18px;
        }
        .box {
            display: flex;
        }
        .left {
            width: 500px
        }
        img {
            width: 200px;
        }
    </style>

</head>
<body>
    <div class="container">
        <?php
            $url = "http://10.0.15.20/lab8/restapis/10countries";
            $response = file_get_contents($url);
            $result = json_decode($response);


            foreach ($result as $coun) {
                echo '<div class="box"><div class="left" style="width: 500px">';
                echo 'Name : <b>' . $coun->name . '</b> <br>';
                echo 'Capital : ' . $coun->capital . '<br>';
                echo 'Population : ' . $coun->population . '<br>';
                echo 'Region : ' . $coun->region . '<br>';
                echo 'Location : ' . $coun->latlng[0] . $coun->latlng[1] . '<br>';
                echo 'Borders : ' . join(" ", $coun->borders) . '<br>';
                echo '</div><div class="right">';
                echo '<img src="' . $coun->flag . '" <br>';
                echo '</div></div><br>';
            }
        ?>
    </div>
</body>
</html>