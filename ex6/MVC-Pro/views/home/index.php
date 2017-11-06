<?php include('views/elements/header.php');
$message = $_GET['message'];
?>
<div class="container">
	<div class="page-header">
    <h1> Hello From the View <?php echo $_SESSION['uID']; ?> </h1>
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
