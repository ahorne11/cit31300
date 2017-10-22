<?php include('elements/header.php');?>
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
                    <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
                        <label>First Name</label>
                        <input type="text" class="span6 inputHeight" name="post_first_name" value="">
                        <label>Last Name</label>
                        <input type="text" class="span6 inputHeight"  name="post_last_name" value="">
                        <label>Email</label>
                        <input type="text" class="span6 inputHeight" name="post_email" value="">
                        <label>Password</label>
                        <input type="password" class="span6 inputHeight"  name="post_password" value="">
                        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                </div>
            </div>
    </div>
<?php include('elements/admin_footer.php');?>