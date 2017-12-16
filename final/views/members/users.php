<?php include('views/elements/header.php');?>
<?php
if( is_array($user) ) {
    extract($user);
}
?>

    <div class="container">
        <div class="page-header">

            <h1>Member <?php echo $uID; ?></h1>
            <p><?php echo $email; ?></p>
        </div>

        <?php //echo $content;?>
        <p><?php echo  $first_name . " " . $last_name; ?></p>
        <p><?php echo  $email ?></p>

        <a class="btn btn-primary" href="<?php echo BASE_URL?>members/edit/<?php echo $u->getID(); ?>">Edit Profile</a>

    </div>
</div>

<?php include('views/elements/footer.php');?>