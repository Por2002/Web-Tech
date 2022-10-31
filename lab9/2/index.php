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
        <h1>Employee Form</h1>
        <form action="" method="post">
            <div class="form-group row">
                <label for="inpid" class="col-sm-1 col-form-label">ID :</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="inpid" name="inpid">
                </div>
            </div>
            <div class="form-group row">
                <label for="inpname" class="col-sm-1 col-form-label">Name :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inpname" name="inpname">
                </div>
            </div>
            <div class="form-group row">
                <label for="inpage" class="col-sm-1 col-form-label">Age :</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="inpage" name="inpage">
                </div>
            </div>
            <div class="form-group row">
                <label for="inpsala" class="col-sm-1 col-form-label">Salary :</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="inpsala" name="inpsala">
                </div>
            </div>
            <div class="form-group row">
                <label for="inpadd" class="col-sm-1 col-form-label">Address :</label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="inpadd" rows="3" name="inpadd"></textarea>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container">
        <br>
        <h1>List of Employees</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
            <tbody>
    
    <?php
        // Connect to Database 
        class MyDB extends SQLite3 {
            function __construct() {
                $this->open('wt-company.db');
            }
        }

        // Open Database 
        $db = new MyDB();
        if(!$db) {
            echo $db->lastErrorMsg();
        }

        // $sql =<<<EOF
        // CREATE TABLE "COMPANY" (
        //     "ID"	INTEGER,
        //     "NAME"	TEXT,
        //     "AGE"	INTEGER,
        //     "ADDRESS"	TEXT,
        //     "SALARY"	INTEGER
        // );
        // EOF;
        // $ret = $db->exec($sql);
        // if(!$ret){
        // echo $db->lastErrorMsg();
        // } else {
        // echo "Table created successfully<br>";
        // }

        if(isset($_POST['submit'])) {
            $id = $_POST['inpid'];
            $name = $_POST['inpname'];
            $age = $_POST['inpage'];
            $add = $_POST['inpadd'];
            $sala = $_POST['inpsala'];

            $sql =<<<EOF
                INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
                VALUES ($id, '$name', $age, '$add', $sala);
            EOF;
            $ret = $db->exec($sql);
        }

        $sql = "SELECT * from COMPANY";
        
        $ret = $db->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo '<tr>';
            echo '<th scope="row">' . $row["ID"] . "</th>";
            echo '<td>' . $row["NAME"] . "</td>";
            echo '<td>' . $row["AGE"] . "</td>";
            echo '<td>' . $row["ADDRESS"] . "</td>";
            echo '<td>' . $row["SALARY"] . "</td>";
            echo '</tr>';
        }

        // Close database
        $db->close();
    ?>

            </tbody>
        </table>
    </div>

</body>
</html>