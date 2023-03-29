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

<body>

    <form action="form.php" method="post" name="contactform">
        <div class="g-2">
            <div class="form-field">
                <label for="fname">نام <sup>*</sup></label>
                <input type="text" name="fname" id="fname" placeholder="نام" required>
            </div>
            <div class="form-field">
                <label for="lname">نام خانوادگی <sup>*</sup></label>
                <input type="text" name="lname" id="lname" placeholder="نام خانوادگی" required>
            </div>
        </div>
        <div class="g-2">
            <div class="form-field">
                <label for="tel">شماره همراه <sup>*</sup></label>
                <input type="tel" name="tel" id="tel" placeholder="09111111111" required>
            </div>
            <div class="form-field">
                <label for="email">ایمیل <sup>*</sup></label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" required>
            </div>
        </div>
        <div class="g-1">
            <div class="form-field">
                <label for="subject">موضوع <sup>*</sup></label>
                <input type="text" name="subject" id="subject" placeholder="موضوع پیام شما" required>
            </div>
            <div class="form-field">
                <label for="message">پیام شما <sup>*</sup></label>
                <textarea type="email" name="message" id="message" placeholder="پیغام شما" required></textarea>
            </div>
        </div>
        <div class="g-1">
            <div class="form-field">
                <input type="submit" value="ارسال فرم">
            </div>
        </div>
        <div class="g-1">
            <div class="form-field">
                <a class="btn" href="details.php">نمایش اطلاعات قبلی</a>
            </div>
        </div>        
    </form>
</body>

</html>