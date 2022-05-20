<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Session</title>
</head>
<body>

<?php
// Set session varibles

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session varibles are set."

?>
    
</body>
</html>