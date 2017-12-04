<?php include('views/elements/header.php');
$message = $_GET['message'];
?>
<div class="container">
	<div class="page-header">
        <h1>IUPUI CIT313 Final Project</h1>
    </div>
    <style>
        img {
            max-width: 100%;
            width: auto\9;
            height: auto;
            vertical-align: middle;
            border: 0;
            -ms-interpolation-mode: bicubic;
        }
    </style>
<div id="image">
    <img src="<?php BASE_URL ?>/final/views/img/galaxy.jpg" width="100%" class="img no-repeat center top" style="max-height: 175px;">
</div>
    <h2>Welcome to my final project for CIT313!</h2>
    <p><b>For now, take a look at the news feed from ABC:</b></p>
    <hr>
    <h3>Latest News From <?php echo $rss_title; ?></h3>
        <h4><a href="<?php echo $rss_story_link0 ?>">Story 1: <?php echo $rss_story_title0; ?></a> <?php echo $rss_story_pubDate0; ?></h4>
            <p><?php echo $rss_story_description0 ?></p><hr>
        <h4><a href="<?php echo $rss_story_link1 ?>">Story 2: <?php echo $rss_story_title1; ?></a> <?php echo $rss_story_pubDate1; ?></h4>
            <p><?php echo $rss_story_description1 ?></p><hr>
        <h4><a href="<?php echo $rss_story_link2 ?>">Story 3: <?php echo $rss_story_title2; ?></a> <?php echo $rss_story_pubDate2; ?></h4>
            <p><?php echo $rss_story_description2 ?></p><hr>
        <h4><a href="<?php echo $rss_story_link3 ?>">Story 4: <?php echo $rss_story_title3; ?></a> <?php echo $rss_story_pubDate3; ?></h4>
            <p><?php echo $rss_story_description3 ?></p><hr>
        <h4><a href="<?php echo $rss_story_link4 ?>">Story 5: <?php echo $rss_story_title4; ?></a> <?php echo $rss_story_pubDate4; ?></h4>
            <p><?php echo $rss_story_description4 ?></p><hr>
        <h4><a href="<?php echo $rss_story_link5 ?>">Story 6: <?php echo $rss_story_title5; ?></a> <?php echo $rss_story_pubDate5; ?></h4>
            <p><?php echo $rss_story_description5 ?></p><hr>
        <h4><a href="<?php echo $rss_story_link6 ?>">Story 7: <?php echo $rss_story_title6; ?></a> <?php echo $rss_story_pubDate6; ?></h4>
            <p><?php echo $rss_story_description6 ?></p><hr>
        <h4><a href="<?php echo $rss_story_link7 ?>">Story 8: <?php echo $rss_story_title7; ?></a> <?php echo $rss_story_pubDate7; ?></h4>
            <p><?php echo $rss_story_description7 ?></p><hr>
    <?php
    if(isset($message)){?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $message?>
        </div>
    <?php }?>
</div>
<?php include('views/elements/footer.php');?>
