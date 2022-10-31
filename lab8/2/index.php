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
</head>
<body>
    <div class="container">
        <h3>ข้อมูลผู้ติดเชื้อ Covid-19 ของวันที่ 19 กันยายน 2565</h3>
    </div>
    <div class="container">
        <table class="table col-12 col-sm-6 col-md-8">
            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">จังหวัด</th>
                    <th scope="col">ผู้ติดเชื้อ</th>
                    <th scope="col">เสียชีวิต</th>
                    <th scope="col">ยอดผู้ป่วยสะสม</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
                    $response = file_get_contents($url);
                    $result = json_decode($response);

                    $i = 1;
                    foreach ($result as $case) {
                        if ($case->txn_date == "2022-09-19"){
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $case->province . "</td>";
                            echo "<td>" . $case->new_case . "</td>";
                            echo "<td>" . $case->new_death . "</td>";
                            echo "<td>" . $case->total_case . "</td>";
                            echo "</tr>";
                            $i++;
                        }
                        
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>