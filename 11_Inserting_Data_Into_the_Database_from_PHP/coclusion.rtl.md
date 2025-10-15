# اضافه کردن به پایگاه داده

## قسمت 2

- ساخت فایل جدید و فرم برای اضافه کردن داده ها

## قسمت 3

- توضیحات دستور sql برای اضافه کردن داده در phpmyadmin

## قسمت 4

- تغیرات در فایل جدید اضافه کردن کوئری اینزرت

```php
$sql = "INSERT INTO article (title, content, published_at)
            VALUES ('" . $_POST['title'] . "','"
                       . $_POST['content'] . "','"
                       . $_POST['published_at'] . "')";
```

- و دریافت اطلاعات آی دی رکورد اضافه شده در پایگاه داده

```php
  $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";
```

## قسمت 5

- توضیح چگونگی sql injection وارد کردن کوئری به پایگاه داده و دریافت اطلاعات رمزعبور روت از پایگاه داده

## قسمت 6

- برای فرار از sql injection تابع زیر استفاده شده و داده ها را از ورودی دریافت می کنیم

```php
 $sql = "INSERT INTO article (title, content, published_at)
            VALUES ('" . mysqli_escape_string($conn, $_POST['title']) . "','"
                       . mysqli_escape_string($conn, $_POST['content']) . "','"
                       . mysqli_escape_string($conn, $_POST['published_at']) . "')";

```

- اما اگر تعداد مقادیر زیاد باشد و بخواهیم بارها از این تابع استفاده کنیم،
کد ما طولانی و نگهداری آن دشوار می‌شود.

## قسمت 7

- چند دستور جدید اضافه شد
- اول برای مقدار دهی به داده ها جای آنها در کوئری علامت سوال میگذارد

```php
$sql = "INSERT INTO article (title, content, published_at) VALUES (?, ?, ?)";
```
