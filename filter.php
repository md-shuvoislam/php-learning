<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP filter</title>
<style>
    table,th,td{
        border:1px solid black;
    }
    th,td{
        padding: 5px;
    }
</style>
</head>
<body>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
            foreach(filter_list() as $id =>$filter){
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
        ?>
    </table>
    <br>
    <br>
    <?php

        // Sanitize a String, The following example uses the filter_var() function to remove all HTML tags from a string:

        $str = "<h1>Hello world!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
        ?>

        <br>
        
        <?php

        $int = 122;
        $min = 1;
        $max = 200;

        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
            echo ("Variable value is not within the legal range");
        }else{
            echo ("Variable value is within the legal");
        }
        ?>
</body>
</html>