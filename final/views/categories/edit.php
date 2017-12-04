<?php include('views/elements/header.php');?>
<?php if( is_array($categories) ) {?>

    <div class="container">
        <div class="page-header">

            <h1>Edit Category</h1>
        </div>

        <form action="<?php echo BASE_URL?>categories/edit/" method="post" onsubmit="editor.post()">
            <label>First Name</label>
            <input type="text" class="span6 inputHeight" name="post_first_name" value="">
            <button id="submit" type="submit" class="btn btn-danger" >Submit</button>
        </form>
    </div>

<?php }?>

<?php include('views/elements/footer.php');?>
