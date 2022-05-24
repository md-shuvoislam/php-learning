<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Json</title>
</head>
<body>
    <?php
        $age = array("Peter"=>35,"Ben"=>37,"Joe"=>43);
        echo json_encode($age);
    ?>
    <br>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo json_encode($cars);
    ?>
    <br>
    <?php
        $jsonobj = '{"Peter":35,"Ben":35,"Joe":35}';
        var_dump(json_decode($jsonobj));
    ?>
    
</body>
</html>