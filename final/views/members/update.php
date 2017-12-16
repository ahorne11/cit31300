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

    </div>
<?php include('views/elements/footer.php');?>