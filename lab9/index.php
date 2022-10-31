<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 9</title>
</head>
<body>

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
        } else {
            echo "Opened database successfully<br>";
        }

        // Query process 
        
        // Create a Table using SQL
        // EOF = End of file ข้อความยาวๆ php

        // $sql =<<<EOF
        // CREATE TABLE COMPANY
        // (ID INT PRIMARY KEY     NOT NULL,
        // NAME           TEXT    NOT NULL,
        // AGE            INT     NOT NULL,
        // ADDRESS        CHAR(50),
        // SALARY         REAL);
        // EOF;

        // $ret = $db->exec($sql);
        // if(!$ret){
        // echo $db->lastErrorMsg();
        // } else {
        // echo "Table created successfully<br>";
        // }

        // $em_id = 2;
        // $em_name = "Allen";
        // $em_age = 25;
        // $em_addr = "Texas";
        // $em_salary = 15000.00;

        // $sql =<<<EOF
        //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        //     VALUES (1, 'Paul', 32, 'California', 20000.00 );

        //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        //     VALUES ($em_id, '$em_name', $em_age, '$em_addr', $em_salary );

        // EOF;

        // $sql =<<<EOF
        //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        //     VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

        //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        //     VALUES (4, 'Mark', 30, 'Rich-Mond', 65000.00 );

        // EOF;

        // $ret = $db->exec($sql);
        // if(!$ret) {
        //     echo $db->lastErrorMsg();
        // } else {
        //     echo "Records created successfully<br>";
        // }

        // SQL SELECT 
        // $sql ="SELECT * from COMPANY";

        // $ret = $db->query($sql);
        // while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        //     echo "ID = ". $row['ID'] . "<br>";
        //     echo "NAME = ". $row['NAME'] ."<br>";
        //     echo "ADDRESS = ". $row['ADDRESS'] ."<br>";
        //     echo "SALARY = ".$row['SALARY'] ."<br><br>";
        // }
        // echo "Operation done successfully<br>";

        // SQL DELETE
        // $em_id = 2;
        // $sql = "DELETE from COMPANY where ID = $em_id;";

        // UPDATE
        $em_id = 1;

        $sql ="UPDATE COMPANY set SALARY = 25000.00 where ID=$em_id;";
        
        $ret = $db->exec($sql);
        if(!$ret){
            echo $db->lastErrorMsg();
        } else {
            echo $db->changes(), " Record Update successfully<br>";
        }


        // Close database
        $db->close();

    ?>
    
</body>
</html>