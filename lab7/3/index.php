<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            padding: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>

</head>
<body>
    <?php
        if (isset($_POST["name"]) && strlen($_POST["name"]) >= 5 && (isset($_POST["add"])) && strlen($_POST["add"]) &&
        isset($_POST["age"]) && $_POST["age"] > 0 && (isset($_POST["pro"]) && strlen($_POST["pro"]) >= 5)) {
            echo "<h1>Member</h1>";
            echo "<p>Name: " . $_POST["name"] . "</p>";
            echo "<p>Address: " . $_POST["add"] . "</p>";
            echo "<p>Age: " . $_POST["age"] . "</p>";
            echo "<p>Profession: " . $_POST["pro"] . "</p>";
            echo "<p>Residential status: " . $_POST["check"] . "</P>";
        } else {
    ?>
        <h1>Member Registration</h1>
            <form action="index.php" method="post">
                <label for="name">Name:</label> <br>
                <input type="text" name="name" id="name" value="Tanapol Por"> <br>
                <?php if (isset($_POST["name"]) && strlen($_POST["name"]) < 5) {
                    echo '</div>';
                    echo '<p style="color: red; margin: 0;">กรุณากรอกชื่อให้ถูกต้อง</p>';
                } ?>
                <label for="add">Address:</label> <br>
                <textarea name="add" id="add" cols="25" rows="5">อยู่บนดวงจันทร์</textarea> <br>
                <?php if (isset($_POST["add"]) && strlen($_POST["add"]) < 5) {
                    echo '</div>';
                    echo '<p style="color: red; margin: 0;">กรุณากรอกที่อยู่ให้ถูกต้อง</p>';
                } ?>
                <label for="age">Age:</label> <br>
                <input type="number" name="age" id="age" value="20"> <br>
                <?php if (isset($_POST["age"]) && $_POST["age"] < 1) {
                    echo '</div>';
                    echo '<p style="color: red; margin: 0;">กรุณากรอกอายุให้ถูกต้อง</p>';
                } ?>
                <label for="pro">Profession:</label> <br>
                <input type="text" name="pro" id="pro" value="นักศึกษา"> <br>
                <?php if (isset($_POST["pro"]) && strlen($_POST["pro"]) < 5) {
                    echo '</div>';
                    echo '<p style="color: red; margin: 0;">กรุณากรอกอาชีพให้ถูกต้อง</p>';
                } ?>
                <label for="sta">Residential status:</label> <br>
                <input type="radio" checked name="check" value="Resident">
                <label>Resident</label>
                <input type="radio" name="check" value="Non-Resident">
                <label>Non-Resident</label> <br>
                <button type="submit">Submit</button>
            </form>
    <?php
        }
    ?>
    
    

</body>
</html>