<?php include('views/elements/header.php');?>
<div class="container">
<div class="page-header">
    <h1>Manage Posts</h1>
</div>

<?php if($message){?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message?>
    </div>
<?php }?>

<div class="row">
    <div class="span8">

        <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add Post</a>

        <a href="<?php echo BASE_URL;?>categories" class="btn btn-primary">Manage Categories</a>

    </div>
</div>

<?php if( is_array($posts) ) {?>




        <?php foreach ($posts as $p) { ?>
            <h3><a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>"
                   title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h3>

            <p><?php echo "Posted on " . $p['date'] . " by " . $p['first_name'] . " " . $p['last_name'] . " in " . $p['name']; ?></p>


            <a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>"><button id="submit" type="submit" class="btn btn-primary" >View Post</button></a>

            <a href="<?php echo BASE_URL?>manageposts/edit/<?php echo $p['pID']; ?>"><button id="submit" type="submit" class="btn btn-info" >Edit Post</button></a>

            <a href="<?php echo BASE_URL?>manageposts/delete/<?php echo $p['pID']; ?>"><button id="submit" type="submit" class="btn btn-danger" >Delete Post</button></a>

        <?php } ?>
    </div>

<?php }?>
<?php include('views/elements/footer.php');?>

