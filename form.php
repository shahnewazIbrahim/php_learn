<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Hello, <?php echo $_POST["name"]; ?>.
    </p>
    <p>
        Your email is <?php echo $_POST["email"]; ?>.
    </p>
    <p>
        Your mobile number is <?php echo $_POST["mobile_no"]; ?>.
    </p>
    <p>
        Your password is <?php echo $_POST["password"]; ?>.
    </p>

    <div class="">
    <?php
        date_default_timezone_set("Asia/Dhaka");
        echo "The time is " . date("h:i:sa");
        echo "Today is " . date("l");
    ?>
    </div>

</body>
</html>