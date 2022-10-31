<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;1,900&family=Prompt:wght@300&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Prompt', sans-serif;
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>

</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            </tbody>
    <?php
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('customers.db');
        }
    }

    $db = new MyDB();
        if(!$db) {
            echo $db->lastErrorMsg();
        } else {
            
        }


    $sql ="SELECT * from customers";

    if (isset($_POST['submit'])) {
        $del = "delete from customers 
        where CustomerId = (select CustomerId from customers order by CustomerId desc limit 1)";
        $ret = $db->exec($del);
    }

    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        echo '<tr>';
        echo '<td>' . $row['CustomerId'] . '</td>';
        echo '<td>' . $row['FirstName'] . ' ' . $row['LastName'] . '</td>';
        echo '<td>' . $row['Address'] . '</td>';
        echo '<td>' . $row['Phone'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '</tr>';
    }

    $db->close();

    ?>
            </tbody>
        </table>
        <form method="POST" action="index.php">
                <button type="submit" name="submit" class="btn btn-primary">Delete last row</button>
            </form>
    </div>
    
</body>
</html>