<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>

    <style>
        body {
            background-color: #dadada;
            justify-content: center;
            align-content: center;
            text-align: center;
        }
        .card {
            background-color: white;
            display: block;
            width: 700px;
            margin-left: auto;
            margin-right: auto;
            
        }
        img {
            width: 80%;
            padding: 12px;
            margin-top: 24px;
        }
        p {
            height:100px;
            overflow:hidden;
            margin-top:20px;
        }
        h5 {
            border-bottom: 1px solid;
            border-color: #dadada;
        }
        input {
            height: 40px;
        }
    </style>

</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card text-center d-flex justify-content-center">
            <?php
                $url = "https://www.themealdb.com/api/json/v1/1/random.php";
                $response = file_get_contents($url);
                $result = json_decode($response);

                $meal = $result->meals;
                echo '<img class="rounded mx-auto d-block" src="' . $meal[0]->strMealThumb . '" <br>';
                echo '<div class="card-body">';
                echo '<h5 class=" text-info font-weight-bold">' . $meal[0]->strMeal . '</h5>';
                echo '<p>' . $meal[0]->strInstructions . '</p>';
                echo '</div>';
                echo '<form action="index.php" method="POST">';
                echo '<input type="image" class="btn btn-light" src="https://cdn-icons-png.flaticon.com/512/25/25465.png">';
                echo '<a class="btn btn-info ml-2" href="' . $meal[0]->strSource . '" target="_blank">Learn more</a>';
                echo '</from>';
            ?>
        </div>
    </div>
</body>
</html>