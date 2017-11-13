
<?php include('views/elements/header.php');?>
<?php 
if( is_array($post) ) {
    extract($post);
}
?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php echo $content;?>
<p><?php echo "Posted on " . $date . " by " . $first_name . " " . $last_name . " in " . $name;?></p>

</div>


<?php include('views/elements/footer.php');?>