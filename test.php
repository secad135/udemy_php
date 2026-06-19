<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            direction: rtl;
        }

        label {
            user-select: none;
        }
        div{
            margin: 0px 25px;
        }
        fieldset:hover{
            background-color: bisque;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <fieldset>
            <legend>select</legend>
            <h3>ماشین مورد علاقه شما؟</h3>
            <select name="car" id="">
                <optgroup label="German">
                    <option value="benz">بنز</option>
                    <option value="BMW">بی ام و</option>
                    <option value="Porche">پورشه</option>
                    <option value="Audi">آئودی</option>
                </optgroup>
                <optgroup label="Japan">
                    <option value="nissan">نیسان</option>
                    <option value="totoya">تویوتا</option>
                    <option value="honda">هوندا</option>
                </optgroup>
            </select>
        </fieldset>
            
        <fieldset>
            <legend>checkbox</legend>
            <h3>کدام رنگ یا رنگ ها مورد علاقه شماست</h3>
            <div>
                <label for="cred">قرمز</label>
                <input type="checkbox" name="colors[]" id="cred" value="red">
            </div>
            <div>
                <label for="cblue">آبی</label>
                <input type="checkbox" name="colors[]" id="cblue" value="blue">
            </div>
            <div>
                <label for="cgreen">سبز</label>
                <input type="checkbox" name="colors[]" id="cgreen" value="green">
            </div>
        </fieldset>
            <fieldset>
                <legend>radio</legend>
                <h3>در کدام کلاس درس میخوانید</h3>
                <div>
                    <label for="c301">301</label>
                    <input type="radio" name="class" value="301">
                </div>
                <div>
                    <label for="c304">304</label>
                    <input type="radio" name="class" value="304">
                </div>
            </fieldset>
            <br>
                <button>submit</button>
                <br>
                
            </form>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" or $_GET != null) {
    echo "<pre>";
    print_r($_GET);
    echo "<pre>";
}
?>