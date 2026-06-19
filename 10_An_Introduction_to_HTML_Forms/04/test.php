<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">

    <div>text: <input type="text" name="text"></div>
    <div>password: <input type="password" name="password"></div>
    <div>tel: <input type="tel" name="tel"></div>
    <div>url: <input type="url" name="url"></div>
    <div>date: <input type="date" name="date"></div>
    <div>time: <input type="time" name="time"></div>
    <div>week: <input type="week" name="week"></div>
    <div>color: <input type="color" name="color"></div>
    <div>email: <input type="email" name="email"></div>
    <div>month: <input type="month" name="month"></div>
    <div>range: <input type="range" name="range"></div>
    <div>hidden: <input type="hidden" name="hidden" value="secret"></div>
    <div>number: <input type="number" name="number"></div>
    <div>search: <input type="search" name="search"></div>
    <div>datetime-local: <input type="datetime-local" name="datetime"></div>

    <button type="submit">ارسال فرم</button>
</form>
</body>
</html>