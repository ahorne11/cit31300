
<?php include('views/elements/header.php');?>

            <?php
            if(isset($message)){?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $message?>
                </div>
            <?php }?>




<?php include('views/elements/footer.php');?>