<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

$username = $_POST["username"];
$pass = $_POST["password"];

echo "hello dear user : $username your password is $pass";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="نام کاربری"><br>
        <input type="password" name="password" placeholder="رمز عبور"><br>
        <button>ارسال</button>
    </form>
</body>
</html>