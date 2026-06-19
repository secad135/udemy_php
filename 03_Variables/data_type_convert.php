<?php
$adad1 = 5;
echo "data type of \$adad1 is ";
var_dump($adad1);  // نوع داده متغیر عدد1 عددصحیح است
echo "<br/><br/>";

$adad2 = 2.5 ;
echo "data type of \$adad2 is ";
var_dump($adad2); // نوع داده متغیر عدد2 عدد اعشاری است
echo "<br/><br/>";

$adad1 = $adad1 * $adad2 ; // عدد یک و عدد دو در هم ضرب شده و نتیجه در عدد1 ذخیره شده است
echo "\$adad1 = \$adad1 * \$adad2 = $adad1 <br/>";
echo "data type of \$adad1 is ";
var_dump($adad1); // نوع داده متغیر عدد1 به اعشاری تبدیل شد
?>