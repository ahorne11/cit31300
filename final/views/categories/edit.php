<?php include('views/elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1>Edit Category</h1>
    </div>

        <form action="<?php echo BASE_URL?>categories/<?php echo $task?>" method="post" onsubmit="editor.post()">
            <label>Name</label>
            <input type="text" class="span6 inputHeight" name="post_name" value="<?php echo $name; ?>">
            <input type="text"style="display: none;" name="post_id" value="<?php echo $cID; ?>">
            <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div>


<?php include('views/elements/footer.php');?>
