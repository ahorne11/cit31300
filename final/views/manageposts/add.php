<?php include('views/elements/header.php');?>
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
        <form onsubmit="return validatePost();" action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <p id="title" class="invalid">Title is a required field</p>
          <label>Title</label>
          <input id="inputTitle" type="text" class="span6 inputHeight" name="post_title" value="">
            <p id="date" class="invalid">Date is a required field</p>
            <label>Date</label>
            <input id="inputDate" class="inputHeight" type="date" id="date" name="post_date" value="">
            <p id="category" class="invalid">Category is a required field</p>
            <label>Select Category</label>
            <select id="inputCategory" class="input-sm" name="post_categoryID" id="category">
                <option></option>
                    <?php foreach($categories as $c){?>

                    <option value="<?php echo $c['categoryID'] ?>"><?php echo $c['name'] ?></option>

                    <?php }?>
                    <!-- populate selection from db -->
                </select>
            <p id="content" class="invalid">Content is a required field</p>
            <label>Content</label>
          <textarea id="inputContent" id="tinyeditor" name="post_content" style="width:556px;height: 200px"></textarea>
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
<?php include('views/elements/footer.php');?>

