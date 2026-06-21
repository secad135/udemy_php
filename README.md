# Udemy - PHP for Beginners

## 01 - Introduction

## 02 - Software Installation and Setup

## 03 - Variables

## 04 - Arrays

1. Introduction to Arrays Create an Array and Access its Elements
1. Assign Manual Array Indexes and Create Associative Arrays
1. Create and Access Multidimensional Arrays
1. Process Each Element of an Array foreach Loops
1. Process the value and index of each array element using a foreach loop

## 05 - Control structures

1. Run Code Conditionally the `if` Construct
2. Compare One Value to another Comparison Operators
3. Run Code Multiple Times Based on a Condition `While` Loops
4. Run Code a Specific Number Of Times ``For`` Loops
5. Add More Conditions to an `If` Statement Using `Elseif`
6. Perform Different Actions Based on Different Conditions The `Switch` Statement

## 06 - An Introduction to HTML

## 07 - Mixing PHP and HTML

## 08 - An Introduction to Databases

## 09 - Multiple Pages in PHP

## 10 - An Introduction to HTML Forms

## 11 - Inserting Data Into the Database from PHP

## 12 - An Introduction to Functions and Validation in PHP

4. Maintain Previously-supplied Data When redisplaying an Invalid Form
 - وقتی فرم را ثبت میکنم و یک فیلد را خالی میگذاریم خطای نیاز به پرکردن میدهد اما آن فیلدی را هم که قبلا پرکرده بودیم را هم محتوای آن را پاک میکند. با ذخیره محتوای وارد شده در یک متغر در مقدار پیش فرض فیلد فرم حالا محتوایی که وارد شده میماند و با نشان دادن خطا منتظر دریافت فیلد لازم است
5. Avoid Cross-site Scripting (XSS) Attacks Escape Untrusted Content
 - هنگام ذخیره محتوای وارد شده کاربر در فیلد با مقدار پیشفرض این خطر وجود دارد که کاربر کد وارد کند و باعث خراب شدن سایت شود. پس از تابع اختصاصی htmlspecialchar استفاده میکنم چه برای ذخیره چه برای نمایش که کدوارد شده در فیلد اجرا نشود و فقط کاراکترهای آن ذخیره یا نمایش داده شود
6. Insert NULL if the Publication Date is Empty
 - برای فیلدی که اجازه نال داشتن را دارد اگر هنگام ثبت فرم خالی باشد به عنوان صفر یا خالی ثبت میشود و نال نخواهد بود. برای حل آن از یک دستور شرطی استفاده میکنیم.
7. Validate the Publication Date is a Valid Date and Time
 - برای تاریخ میلادی وارد شده خطاهای منطقی وجود دارد که با استفاده از توابع مخصوصی هم فرمت وارد شده بررسی میشود و هم تعداد روزهای هر ماه برای صحیح بودن اطلاعات وارد شده به پایگاه داده
8. Redirect to the Article Page After Inserting a New Article
 - معرفی تابع header وقتی یک رکورد ثبت میشود میخواهیم به صفحه مخصوص رکورد ثبت شده برویم به صورت اتوماتیک که مرورگر خودش درخواست را ارسال کند.

## 13 - Editing Data in the Database from PHP
1. Editing Existing Articles Create a Function to Get a Single Article
 - برای مرتب شدن کد یک فایل برای یک مورد مقاله میسازیم و توابع مورد نیاز آن را در این فایل قرار میدهیم. در این ویدئو تابع فراخوانی یک مقاله را قرار داد
2. Add a Form for Editing an Existing Article
 - برای جلوگیری از تکرار نوشتن فرم و یکسان بودن آن در همه جا آن را در یک فایل مخصوص قرار داد و آن را در صفحه مقاله جدید فراخوانی کرد و برای صفحه ویرایش هم فراخوانی کرد و تنظیماتی برای جلوگیری از خطا قرار داد که اگر آی دی نباشد یا شماره غیر مجاز باشد خطای مناسب نمایش داده شود
3. Add a Validation Function and Validate the Form Data
 - دستوراتی که برای صحت سنجی و نمایش خطای محتوای غیر مجاز به کاربر نمایش داده میشدند در فایل توابع قرار گرفت حالا هم فایل مقاله جدید و هم فایل ویرایش میتوانند از آن تابع صحت سنجی استفاده کنند
4. Change Existing Data in the Database The SQL UPDATE Statement
 - دستور مای اسکیو ال آپدیت به صورت ساده در phpmyadmin توضیح داده شد
5. Update an Existing Article in the Database
 - داخل فایل ویرایش دستوراتmysql  آپدیت و جای خالی که باید پر شوند را کدنویسی درست انجام داد
6. Create a Function to Redirect to Another URL
 - یک فایل جدید برای تابع redirect ساخت تا بعد از اضافه کردن رکورد جدید یا ویرایش آن بعد از زدن دکمه ذخیره به صورت اتوماتیک مرورگر به صفحه آن مقاله ارجاع داده شود. این تابع جهت جلوگیری از تکرار کد در تو فایل ساخته شد

## 14 - Deleting Data from the Database from PHP
1. Delete Existing Data in the Database The SQL DELETE Statement
 - معرفی دستور حذف در mysql در محیط phpmyadmin
2. Delete an Existing Article in the Database
 - ساخت فایل مخصوص حذف مقاله در پروژه و کپی گرفتن کدهای مورد نیاز برای اتصال به پاگاه داده و دریافت آی دی مقاله مورد نظر و ویرایش کد برای اجرای دستور حذف
 3. Use the POST Request Method to Delete the Article
  - برای اینکه کاربر با وارد کردن کوئری استرینگ در نوار آدرس مرورگر نتواند یک رکورد را حذف کند بایستی دستور حذف از روش پست استفاده کند
4. Get Confirmation from the User Before Deleting the Article
 - اضافه کردن یک مرحله تاییدیه برای اطمینان کاربر درباره حذف رکورد مورد نظر. این تاییدیه بهتر است با جاوا اسکریپت باشد
5. Improve Database Performance Only use SELECT  when Necessary
 - مسئله ستاره در دستور سلکت mysql ستون های مورد نیاز را انتخاب کنیم تا از پهنای باند و منابع کمتری از سرور استفاده شود و سرعت سایت بالا تر برود. ویرایش تابع دستور سلکت در فایل حذف چون فقط نیاز داریم آی دی رکورد مورد نظر وجود داشته باشد

## 15 - Using Sessions to Log in and Restrict Access
1. Make the Web Browser Remember you Between Visits An Introduction to Sessions
 - معرفی سشن با کد ساده
2. Store Data in the Browser Cookies in PHP
 - معرفی کوکی و تعریف آن و مقدار دهی و تاریخ انقضا و حذف آن و مسیر دهی به روت
3. Store a Value in the Session to Log in and Log out a User
 - دو فایل ساخت برای ذخیره مقدار بولین تروو برای وردی و فالس برای خروج کاربر اما هنوز خام است
4. Add a Login form and Process the User's Login Credentials
 - ساخت فورم Login برای دریافت نام کاربر و کلمه عبور
5. Completely Destroy the Session on Logout and Redirect Back to the Index Page
 - حذف کامل سشن با لاگ اوت که کدهای خاصی دارد تا کوکی و اطلاعات ذخیره شده را هم حذف کند
6. Increase Security Prevent Session Fixation Attacks
 - استفاده از یک تابع مخصوص برای جلوگیری از حمله هکری. هربار ورود یک آی دی جدا برای لاگ این میدهد
7. Restrict Access to a Page to a Logged-in User Only
 - ایجاد محدودیت برای کاربری که وارد نشده. فقط کاربری که وارد شده میتواند رکورد جدید اضافه کند
 
## 16 - An Introduction to Object-Oriented PHP
1. Classes and Objects An Introduction to Object-Oriented PHP 
 - معرفی ساخت کلاس و ساخت شی از کلاس. بهتر است تعریف کلاس در یک فایل مخصوص باشد و نام کلاس و فایل دقیق مثل هم باشد و نام کلاس با حروف بزرگ شروع شود 'StudlyCaps'
2. Object Attributes Adding Properties to a Class
 - تعریف ویژگی یا صفت برای کلاس
 - مقدار دهی ویژگی برای شی با استفاده از '<-'
 - مقدار پیشفرض ویژگی در تعریف کلاس
 - نباید ویژگی که هنوز در کلاس تعریف نشده را برای شی مقدار دهی کرد

3. Object Functions Adding Methods to a Class
 - متد همان تابع است در داخل کلاس تعریف میشود
 - کلمه کلیدی 'this' به کلاس فعلی اشاره دارد
 - نام گذاری متدها داخل کلاس کلمه اول با حرف کوچک است و کلمات بعدی بدون فاصله و خط تیره با حرف بزرگ camelCase

## 17 - PDO PHP Data Objects

## 18 - Authentication Using the Database

## 19 - Class Autoloading

## 20 - Site Administration

## 21 - Pagination

## 22 - Uploading Files

## 23 - Database Relationships

## 24 - Using Relationships Article Categories

## 25 - JavaScript and PHP

## 26 - Dates and Times

## 27 - An Introduction to CSS

## 28 - Sending Emails from PHP

## 29 - Configuration and Error Handling

## 30 - Conclusion
