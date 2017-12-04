<?php include('views/elements/header.php');?>
<?php if( is_array($categories) ) {?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>

        <?php foreach ($categories as $c) { ?>
            <h2><?php echo  $c['name']; ?></h2>
            <a href="<?php echo BASE_URL?>categories/edit/<?php echo $c['categoryID']; ?>"><button id="submit" type="submit" class="btn btn-info" >Edit Category</button></a>
            <hr>
        <?php } ?>
    </div>

<?php }?>

<?php include('views/elements/footer.php');?>