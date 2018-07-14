<div class="row container">
<?php if($this->session->flashdata('registered')):?>
<div class="alert alert-success">
	<?php echo $this->session->flashdata('registered');?>
</div>
<?php endif;?>
<!--Looping products to be displayed from db -->
<?php foreach($products as $product): ?>

	<div class="col-md-4 meds">
		<div class="meds-price">
		<?php echo $product->price; ?>
		</div>
		<a href= "<?php echo base_url();?>products/details/<?php echo $product->id; ?>">
		  
			<img src = "<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>"/>
		</a></br>
		<div class="meds-name">
		<?php echo $product->title; ?>
		</div>
		<div class="meds-add">
		
		<!--<form width="100%" method="post" action="<?php echo base_url();?>cart/add"> -->
		
		<?php echo form_open('cart/add')?>
<!--Creating Quantity Field -->
		<div class="row">
		
		<div class="col-md-4">
		QTY: <input class="qty" type="text" name="qty" value="1"/>
		</div>
		
			<input type="hidden" name="item_number" value="<?php echo $product->id;?>"/>
			<input type="hidden" name="price" value="<?php echo $product->price;?>"/>
			<input type="hidden" name="title" value="<?php echo $product->title;?>"/>
		
			<button class="col-md-8 btn btn-primary" type="submit">Add to Cart</button>
			</div>
		
		</div>
	</div>
</form>
<?php endforeach; ?>
</div>

