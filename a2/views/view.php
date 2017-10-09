<!DOCTYPE html>
<html>
    <head>
        <title>Fisher Price - My First Model View Controller</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            .list{
                margin: auto;
                width:210px;
                text-align: left;
            }
        </style>
    </head>
    <body>
    <div style="text-align: center;">
        <?php include_once('includes/header.php'); ?>
        <h1>Hello From My View!</h1>
        <?php
        echo "<ul class='list'>
                <li>User ID: $userID</li>
                <li>First Name: $firstname</li>
                <li>Last Name: $lastname</li>
                <li>Email: $email</li>
                <li>Role: $role</li>
                <br>
            </ul>"
        ?>

        <?php include_once('includes/footer.php'); ?>
    </div>
    </body>
</html>


