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

    <div>
        text: <input type="text" name="title">
    </div>

    <div>
        textarea: <textarea name="content" rows="7" cols="50"></textarea>
    </div>

    <button>Send</button>

</form>

</body>
</html>
