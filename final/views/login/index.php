<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Login</h1>
   <?php if(isset($error)){?>

       <div class="alert alert-danger">
           <?php echo $error; ?>
       </div>

   <?php } ?>
  </div>
    <div class="row">
        <div class="span8">
            <form action="<?php echo BASE_URL?>login/do_login" method="post" onsubmit="editor.post()">
                <label>Email</label>
                <input type="text" class="span6 inputHeight" name="post_user_name" value="">
                <label>Password</label>
                <input type="password" class="span6 inputHeight"  name="post_password" value="">
                <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

