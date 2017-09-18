<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once('classes/User.class.php');
include_once('classes/RegisteredUser.class.php');
include_once('classes/Admin.class.php');
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Exercise 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .list{
            margin: auto;
            width:300px;
            text-align: left;
        }
    </style>
</head>
<body>
<div style="text-align: center;">
<?php

include_once('includes/header.php');

//instantiate objects
$userOne = new RegisteredUser("Regular User", "bjones");
$userTwo = new Admin("Administrator", "jsmith");

//create an array of objects
$objectsArray = array($userOne, $userTwo);

//set attributes
$userOne->first_name = "Bob";
$userOne->last_name = "Jones";
$userOne->email_address = "bjones@gmail.com";

$userTwo->first_name = "Joe";
$userTwo->last_name = "Smith";
$userTwo->email_address = "jsmith@gmail.com";

//loop through array of objects to display attributes
for($i = 0; $i <= 1; $i++) {
    echo("<ul class='list'><h3>User # ".($i + 1)."</h3>");
        echo("<li><b>User Level:</b> ".$objectsArray[$i]->user_level. "</li>
        <li><b>User ID:</b> ".$objectsArray[$i]->user_id."</li>
        <li><b>User Type:</b> ".$objectsArray[$i]->user_type."</li>
        <li><b>First Name:</b> ".$objectsArray[$i]->first_name."</li>
        <li><b>Last Name:</b> ".$objectsArray[$i]->last_name."</li>
        <li><b>Email Address:</b> ".$objectsArray[$i]->email_address."</li>");
    echo("</ul><hr>");
}


include_once('includes/footer.php');
?>
</div>
</body>
</html>