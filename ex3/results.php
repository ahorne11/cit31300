<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
function loadClasses($class) {
    include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('loadClasses');
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Exercise 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .list{
            margin: auto;
            width:400px;
            text-align: left;
        }
    </style>
</head>
<body>
<div style="text-align: center;">

<?php

include_once('includes/header.php');
echo("<div class='list'>");

//instantiate new object
$userOne = new RegisteredUser('Regular User', 'newuser');

//set form values into the new object
$userOne->first_name = $_POST['firstName'];
$userOne->last_name = $_POST['lastName'];
$userOne->email_address = $_POST['emailAddress'];

//tests if the object is of the RegisteredUser class
if($userOne instanceof RegisteredUser){
    echo("This object is of the RegisteredUser class type.<br><br>");

    //displays results
    echo("The registered user's first name is: " . $userOne->first_name . "<br><br>");
    echo("The registered user's last name is: " . $userOne->last_name . "<br><br>");
    echo("The registered user's email address is: " . $userOne->email_address.  "<br><br>");
} else {
    echo("This object is NOT of the RegisteredUser class type.<br><br>");
}

echo("</div>");

include_once('includes/footer.php');

?>

</div>
</body>
</html>

