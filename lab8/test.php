<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST">
        <label for="prodname">Name :</label>
        <input type="text" id="prodname" name="prodname" placeholder="Enter Product Name" required/>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit']))
    {
    $prodname = $_POST['prodname'];        
    $url = "http://10.0.15.20/lab8/restapis/rest/api.php?prodname=" . $prodname;

    $client = curl_init($url); //การเรียกใช้
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true); //การเรียกใช้
    $response = curl_exec($client); //การเรียกใช้
    $result = json_decode($response);
    
    echo  $result->name . " " . $result->price . " THB"; 
    }
    ?>

</body>
</html>