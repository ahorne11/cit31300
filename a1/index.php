<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
	include_once('webconfig.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>I've Got A Lovely Bunch of Coconuts: Create Inventory</title>
<link type="text/css" rel="stylesheet" href="<?php echo URL_ROOT . '/styles.css' ?>" />
</head>

<body>



<div id="wrapper">

	<h2>To begin setting up your produce stand, input the products that you would like to offer.</h2>

	<div class="form-container">

	<form action="<?php echo URL_ROOT . '/add_products_to_inventory.php' ?>" method="post">
    
    <?php
		//create a loop that writes a form to allow up to 8 produce items to be added
	
		for ($x = 0; $x <= 7; $x++) {
		    //error 2: added a closing brace here, added content to body of loop
            echo("<fieldset>
		<legend>Product Details: Product $x </legend>
			<div><label for='productname$x'>Product Name</label> <input id='productname$x' type='text' name='productname$x' value='' /></div>
			
			<div>
				<label for='producetype$x'>Produce Type</label>
				<select id='producetype$x' name='producetype$x'>
					<optgroup label='Type of Produce'>
						<option value='f'>Fruit</option>
						<option value='v'>Vegetable</option>
					</optgroup>
				</select>
			</div>
            
            <div>
				<label for='pricetype$x'>Pricing Type</label>
				<select id='pricetype$x' name='pricetype$x'>
					<optgroup label='Pricing Structure'>
						<option value='1'>Per pound</option>
						<option value='2'>Each</option>
					</optgroup>
				</select>
			</div>
            
			<div><label for='productprice$x'>Product Price</label> $<input id='productprice$' name='productprice$x' type='text' size='10' /></div>
	</fieldset>");

        }
	?>

	<!-- error 1: deleted single parenthesis here, along with unnecessary php block -->

	
    
	<div class="buttonrow">
		<input type="submit" value="Save" class="button" />

		<input type="button" value="Discard" class="button" />
	</div>

	</form>
	
	</div><!-- /form-container -->
	
</div><!-- /wrapper -->



</body>
</html>
