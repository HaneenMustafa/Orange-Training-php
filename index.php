<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // original string
$str = "Welcome to orange";
  
// string to upper case
$resStr = strtoupper($str);
echo "the original string is : " . $str . "<br>";
echo "the converted string is :" . $resStr ."<br>";
$str2 ="THIS IS MY FIRST TASK IN PHP ";
echo "the original string is : " . $str2 . "<br>"; 
$resStr2 =strtolower($str2);
echo "the converted string is :" . $resStr2 ."<br>";
$name ="haneen";
$nameconv=ucfirst($name) ;
echo "first character of a string is uppercase: " . $nameconv ."<br>";
$fname= "haneen mustafa sweid";
$fname_conv=ucwords($fname);
echo " the first character of each word in a string is uppercase : " . $fname_conv ."<br>";
echo"<br> " . "<br>" ;
$my_str = 'Programming is like any other sport .You might lnow the rules,but you have to play to learn';
// Display replaced string
echo str_replace("You", "programmers", $my_str) . "<br>";
echo str_ireplace("You", "programmers", $my_str) . "<br>";
$my_str2 ="First, solve the problem";
echo strrchr($my_str2,' ') . "<br>";

$email  = "user@example.com";
$user = strstr($email, '@', true); 
echo $user ."<br>"; 
$string = 'Literally';
$lastChar = substr($string, -5);
echo "The last five char of the string are $lastChar." . "<br>";
echo implode(' ', array_slice(explode(' ', $my_str), 0, 6))."\n";
   
   
   ?>
</body>
</html>