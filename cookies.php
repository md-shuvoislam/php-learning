<!DOCTYPE html>
<?php
$cookies_name = "user";
$cookies_value = "John Doe";
setcookie($cookies_name, $cookies_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>

<?php

if(!isset($_COOKIE[$cookies_name])){
    echo "Cookie named '" . $cookies_name . "' is not set!";
}else{
    echo "Cookie '" . $cookies_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookies_name];
}

?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
</body>
</html>