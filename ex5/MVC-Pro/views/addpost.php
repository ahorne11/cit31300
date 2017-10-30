<?php include('elements/header.php');?>
<style>
    input.inputHeight{
        height: 30px;
    }
</style>

<div class="container">
	<div class="page-header">
   <h1>Add Post</h1>
  </div>
  <?php
    if(isset($message)){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

<?php
if(!isset($categories)){
    $categories = "";
}
if( is_array($categories)) {?>

  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>addpost/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>Title</label>
          <input type="text" class="span6 inputHeight" name="post_title" value="">
            <label>Date</label>
            <input class="inputHeight" type="date" id="date" name="post_date" value="">
            <label>Category</label>
                <select class="input-sm" name="post_categoryID" id="category">
                    <option>-- Select Category --</option>
                    <?php foreach($categories as $c){?>

                    <option value="<?php echo $c['categoryID'] ?>"><?php echo $c['name'] ?></option>

                    <?php }?>
                    <!-- populate selection from db -->
                </select>
     			<label>Content</label>
          <textarea id="tinyeditor" name="post_content" style="width:556px;height: 200px"></textarea>
    			<br/>
            <?php
            //$url = $_SERVER['REQUEST_URI'];
            //$pID = substr($url, strpos($url, 'edit/') + 5);
            ?>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>
      </div>
    </div>
 <?php }?>
</div>
<?php include('elements/footer.php');?>

