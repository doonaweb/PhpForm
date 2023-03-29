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
if (isset($_POST['fname'])) {
    $fname = htmlspecialchars($_POST['fname']);
} else {
    $fname = "نام خود را وارد نکرده اید";
}

if (isset($_POST['fname'])) {
    $fname = htmlspecialchars($_POST['fname']);
} else {
    $fname = "نام خود را وارد نکرده اید";
}

if (isset($_POST['lname'])) {
    $lname = htmlspecialchars($_POST['lname']);
} else {
    $lname = "نام خانوادگی خود را وارد نکرده اید";
}

if (isset($_POST['tel'])) {
    $tel = htmlspecialchars($_POST['tel']);
} else {
    $tel = "شماره تلفن خود را وارد نکرده اید";
}

if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
} else {
    $email = "ایمیل خود را وارد نکرده اید";
}

if (isset($_POST['subject'])) {
    $subject = htmlspecialchars($_POST['subject']);
} else {
    $subject = "موضوع پیام خود را وارد نکرده اید";
}

if (isset($_POST['message'])) {
    $message = htmlspecialchars($_POST['message']);
} else {
    $message = "7پیام خود را وارد نکرده اید";
}



//MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname="phpform";
$conn = new mysqli($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("<h2 class='alert'>اتصال ناموفق: " . $conn->connect_error."</h2>");
  }
  echo "Connected successfully";
$sql = "INSERT INTO contactform (fname,lname,tel,email,subject,message) VALUES ('$fname', '$lname', '$tel', '$email', '$subject', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "<h2 class='alert'>رکورد جدید با موفقیت به پایگاه داده اضافه شد</h2>";
} else {
    echo "<h2 class='alert'>خطا: " . $sql . "<br>" . $conn->error."</h2>";
}

  
?>

<body>
    <div class="results">
        <h1>متشکریم! فرم شما دریافت شد</h1>
        <p>اطلاعات فرم ارسالی شما به شرح زیر است:</p>
        <table id="res">
            <tr>
                <th>نام</th>
                <td>
                    <?php echo ($fname); ?>
                </td>
            </tr>
            <tr>
                <th>نام خانوادگی</th>
                <td>
                    <?php echo ($lname); ?>
                </td>
            </tr>
            <tr>
                <th>شماره همراه</th>
                <td>
                    <?php echo ($tel); ?>
                </td>
            </tr>
            <tr>
                <th>ایمیل</th>
                <td>
                    <?php echo ($email); ?>
                </td>
            </tr>
            <tr>
                <th>موضوع پیام</th>
                <td>
                    <?php echo ($subject); ?>
                </td>
            </tr>
            <tr>
                <th>پیام</th>
                <td>
                    <?php echo ($message); ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>