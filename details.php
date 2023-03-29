<!DOCTYPE html>
<html lang="fa">
<!--
Developed by Doonaweb.ir
A simple contact form with PHP and MySQL
version: 1.0.0
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم تماس PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
//get data from database and show it
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpform";
$tablename = 'contactform';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}
$sql = "SELECT fname, lname, tel,email,subject,message FROM $tablename";
?>

<body>

    <div class="results">
        <table id="details" class="text-center">
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>شماره همراه</th>
                <th>ایمیل</th>
                <th>موضوع</th>
                <th>پیام</th>
            </tr>
            <?php

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                $j=1;
                while ($row = $result->fetch_assoc()) {
                    // echo "id: " . $row["fname"] . " - Name: " . $row["lname"] . " " . $row["tel"] . "<br>";
                    ?>
                    <tr>
                        <td><?php echo($j); ?></td>
                        <td><?php echo($row["fname"]); ?></td>
                        <td><?php echo($row["lname"]); ?></td>
                        <td><?php echo($row["tel"]); ?></td>
                        <td><?php echo($row["email"]); ?></td>
                        <td><?php echo($row["subject"]); ?></td>
                        <td><?php echo($row["message"]); ?></td>
                    </tr>
                    <?php
                    $j++;
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>

</html>