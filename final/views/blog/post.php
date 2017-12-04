
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}?>

<div class="container">
    <div class="page-header">

        <h1><?php echo $title;?></h1>
    </div>
    <p><?php echo $content;?></p>
    <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
    </sub>


    <hr>
    <?php

        if($u->isRegistered()){ ?>
            <?php
            if(isset($message)){?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $message?>
                </div>
            <?php }?>

            <div class="row">
                <div class="span8">
                    <form action="<?php echo BASE_URL?>blog/add/" method="post" onsubmit="editor.post()">
                        <label>Add comment</label>
                        <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"></textarea>
                        <br/>
                        <input type="hidden" name="pID" value="<?php echo $pID?>"/>
                        <input type="hidden" name="uID" value="<?php echo $uID?>"/>
                        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                </div>
            </div>


    <?php } else { ?>

            <p>Login to post a comment</p>
            <a href="<?php echo BASE_URL?>login/"><button class="btn btn-primary">Login</button></a>

    <?php } ?>
    <hr>
    <h3>View Comments</h3>
    <?php
    if( is_array($comments) ) { ?>

    <?php foreach ($comments as $c) { ?>
            <hr>


        <p><?php echo $c['commentText'];?></p>
        <br>
        <p>Posted by: <?php echo $c['first_name'] . " " . $c['last_name'];?></p>
        <p><?php echo $c['date'];?></p>
        <p id="commentID" style="display: none;"><?php echo $c['commentID'];?></p>

        <?php
            if($u->isAdmin()){ ?>

                <form action="<?php echo BASE_URL?>blog/delete/" method="post" onsubmit="editor.post()">
                    <input type="hidden" name="commentID" value="<?php echo $c['commentID']?>"/>
                    <button id="submit" type="submit" class="btn btn-danger" >Delete Comment</button>
                </form>


        <?php } ?>

    <?php } ?>

    <?php }?>

</div>




<?php include('views/elements/footer.php');?>