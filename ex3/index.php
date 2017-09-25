<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
function loadClasses($class) {
    include_once('classes/'.strtolower($class).'.class.php');
    //include_once('/home/aahorne/htdocs/ex3/classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('loadClasses');
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Exercise 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div style="text-align: center;">
<?php

include_once('includes/header.php');

//call static math method
echo("Before You Fill Out This Form, Let's Do Some Math!: " . Admin::mathMethod(11, 12));

?>
<div class="container" style="max-width: 450px;">
<br><br>
<form action="results.php" method="post">
    <div class="row">
        <label class="col-sm-5" for="firstName" >First Name: </label>
        <input class="col-sm-7" id="firstName" name="firstName" type="text">
    </div>
    <br>
    <div class="row">
        <label class="col-sm-5" for="lastName" >Last Name: </label>
        <input class="col-sm-7" id="lastName" name="lastName" type="text">
    </div>
    <br>
    <div class="row">
        <label class="col-sm-5" for="emailAddress" >Email Address: </label>
        <input class="col-sm-7" id="emailAddress" name="emailAddress" type="text"><br>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4"></div>
        <input class="col-sm-4" type="submit" value="Register">
        <div class="col-sm-4"></div>
    </div>
</form>
</div>

<?php
include_once('includes/footer.php');
?>

</div>
</body>
</html>