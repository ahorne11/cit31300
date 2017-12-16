<?php include('views/elements/header.php');?>
    <style>
        input.inputHeight{
            height: 30px;
        }
    </style>

    <div class="container">
        <div class="page-header">
            <h1>Edit Profile</h1>
        </div>
        <?php
        if(isset($message)){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message?>
            </div>
        <?php }?>

            <div class="row">
                <div class="span8">
                    <form onsubmit="return validateRegistration();" action="<?php echo BASE_URL?>members/<?php echo $task?>" method="post" onsubmit="editor.post()">
                        <input type="hidden" name="uID" value="<?php echo $u->getID(); ?>"/>
                        <p id="firstName" class="invalid" >First Name is a required field</p>
                        <label>First Name</label>
                        <input id="inputFirstName" type="text" class="span6 inputHeight" name="post_first_name" value="<?php echo $u->getFirstName(); ?>">
                        <p id="lastName" class="invalid" >Last Name is a required field</p>
                        <label>Last Name</label>
                        <input id="inputLastName" type="text" class="span6 inputHeight"  name="post_last_name" value="<?php echo $u->getLastName(); ?>">
                        <p id="email" class="invalid" >Email is a required field</p>
                        <label>Email</label>
                        <input id="inputEmail" type="text" class="span6 inputHeight" name="post_email" value="<?php echo $u->getEmail(); ?>">
                        <label>Password</label>
                        <input id="" type="password" class="span6 inputHeight"  name="post_password" value="">
                        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                </div>
            </div>
    </div>
<?php include('views/elements/footer.php');?>