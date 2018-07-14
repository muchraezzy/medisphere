<div class="row">
	<div class="col-md-4 details">
		<img src = "<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>"/>
		
	</div>
	<div class="col-md-8 details-name">
		<h3><?php echo $product->title; ?></h3>
		
		<div class="details-price">
			<?php echo $product->price; ?>
		</div>
		<div class ="details-desc">
			<p><?php echo $product->description; ?></p>
		</div>
		<div class="details-buy">
		<?php echo form_open('cart/add/'echo $product->id;)?>
			<!--<form width="100%" method="post" action="<?php echo base_url();?>cart/add/<?php echo $product->id;?>">-->
			<!--Creating Quantity Field -->
				<div class="row">
					<div class="col-md-4">
						QTY: <input class="qty" type="text" name="qty" placeholder="1"/>
					</div>
		
				<input type="hidden" name="item_number" value="<?php echo $product->id;?>"/>
				<input type="hidden" name="price" value="<?php echo $product->price;?>"/>
				<input type="hidden" name="title" value="<?php echo $product->title;?>"/>
		
				<button class="col-md-8 btn btn-primary" type="submit">Add to Cart</button>
				</div>
			<!--</form>-->
		</div>
	</div>
</div>