<!DOCTYPE HTML>
<html>
<head>
    <title>Exercise 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .list{
            margin: auto;
            width:200px;
            text-align: left;
        }
    </style>
</head>
<body>
<div style="text-align: center;">
<?php

include_once('includes/header.php');

//create array
$myArray = array('Aaron Horne', 'green', 'Star Wars: Episode III Revenge of the Sith',
    'Harry Potter and the Goblet of Fire', 'Reddit.com');

$myName = $myArray[0];

echo("<h1>$myName</h1>");

//loop through array, create list items
function arrayLoop($array, $name)
{
    echo("<ul class='list'>");
    for ($i = 0; $i <= 4; $i++) {
        if ($array[$i] == $name) {
            continue;
        } else {
            echo("<li>$array[$i]</li>");
        }
    }
    echo("</ul>");
}
arrayLoop($myArray, $myName);

include_once('includes/footer.php');
?>
</div>
</body>
</html>