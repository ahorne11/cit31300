<?php include('views/elements/header.php');?>
    <style>
        input.inputHeight{
            height: 30px;
        }
    </style>

    <div class="container">
        <div class="page-header">
            <h1>Register</h1>
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
                    <form onsubmit="return validateRegistration();" action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
                        <p id="firstName" class="invalid" >First Name is a required field</p>
                        <label>First Name</label>
                        <input id="inputFirstName" type="text" class="span6 inputHeight" name="post_first_name" value="">
                        <p id="lastName" class="invalid" >Last Name is a required field</p>
                        <label>Last Name</label>
                        <input id="inputLastName" type="text" class="span6 inputHeight"  name="post_last_name" value="">
                        <p id="email" class="invalid" >Email is a required field</p>
                        <label>Email</label>
                        <input id="inputEmail" type="text" class="span6 inputHeight" name="post_email" value="">
                        <p id="password" class="invalid" >Password is a required field</p>
                        <p id="passwordMatch" class="invalid">Passwords do not match</p>
                        <label>Password</label>
                        <input id="inputPassword" type="password" class="span6 inputHeight"  name="post_password" value="">
                        <p id="confirmPassword" class="invalid" >Confirm password is a required field</p>
                        <label>Confirm Password</label>
                        <input id="inputConfirmPassword" type="password" class="span6 inputHeight"  name="post_password" value="">
                        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                </div>
            </div>
    </div>
<?php include('views/elements/footer.php');?>