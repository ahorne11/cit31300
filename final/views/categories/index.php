<?php include('views/elements/header.php');?>
<?php if( is_array($categories) ) {?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>

        <p>Add a new Category</p>
        <form action="<?php echo BASE_URL?>categories/add" method="post">
            <input class="inputHeight" type="text" name="post_name" ">
            <button id="submit" type="submit" class="btn btn-info" >Submit</button>
        </form>


        <?php foreach ($categories as $c) { ?>
            <h2><?php echo  $c['name']; ?></h2>
            <form action="<?php echo BASE_URL?>categories/edit/<?php echo $c['categoryID']; ?>" method="post">
                <button id="submit" type="submit" class="btn btn-info" >Edit Category</button>
                <input style="display: none;" type="text" name="name" value="<?php echo $c['name'] ?>">
                <input style="display: none;" type="text" name="cID" value="<?php echo $c['categoryID'] ?>">
            </form>
<!--            <a href="--><?php //echo BASE_URL?><!--categories/edit/--><?php //echo $c['categoryID']; ?><!--"><button id="submit" type="submit" class="btn btn-info" >Edit Category</button></a>-->
            <hr>
        <?php } ?>
    </div>

<?php }?>

<?php include('views/elements/footer.php');?>