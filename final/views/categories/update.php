<?php include('views/elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1>Edit Category</h1>
    </div>
    <?php
    if(isset($message)){?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $message?>
        </div>
    <?php }?>


<?php include('views/elements/footer.php');?>
