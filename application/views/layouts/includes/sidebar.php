<div class="sec1">

<div class ="cart-block">
<div class="panel-heading panel-heading-green"><h3 class="panel-title" style="text-align:center">Mini-Cart</h3></div>
	
	<?php echo form_open('cart/update')?>
			<div style="width:100%; height:195px;">
			<table cellpadding="6" cellspacing="1" style="width:90%" border="0">
				<tr>
				<th>QTY</th>
				<th>Item Description</th>
				<th style="text-align:right">Item Price</th>
				</tr>
				<?php $i = 1;?>
			<?php foreach ($this->cart->contents() as $items):?>
				<input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid'];?>"/>
				<tr>
					<td><input type="text" name="<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty'];?>" maxlength="3" size="5"/></td>
					<td><?php echo $items['name']; ?></td>
					<td style="text-align:right"><?php echo $this->cart->format_number($items ['price']);?></td>
				</tr>
				
				<?php $i++;?>
			<?php endforeach;?>
			
				<tr>
					<td></td>
					<td class="right"><strong>Total</strong></td>
					<td class="right" style="text-align:right">Kshs <?php echo $this->cart->format_number($this->cart->total());?></td>
				</tr>
			</table>
			</br>
			</div>
			<div class="row">
			<p style="padding-left:18px;"><button class="col-md-4 btn btn-default" type="submit">Update Cart</button>
			///<a class="btn btn-default" href="<?php echo base_url();?>cart/destroy">Clear Cart</a>
			<a class="col-md-4 btn btn-default" href="cart">Go To Cart</a></p>
			</div>
			
		<!--<form action="cart/update" method="post">-->
	</form>
	</div>
	<div class="panel-heading panel-heading-green"><h3 class="panel-title" style="text-align:center">Quick Menu</h3></div>
	<div class="hamburger">
	<table >
		<tr>
			<td><a href="#" onclick="openNav()">Medicine Cabinet  </a></td><td>  <img src="assets/images/1254.png" onclick="openNav()"/></td>
		</tr>
		<tr>
			<td><a href="#" onclick="openNav()">Consultations  </a></td><td>  <img src="assets/images/12345.png" onclick="openNav()"/></td>
		</tr>
		<tr>
			<td><a href="#" onclick="openNav()">Appointments  </a></td><td>  <img src="assets/images/1254.png" onclick="openNav()"/></td>
		</tr>
		
	</table>
	</div>
	<div id="mysidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times;</a>
		<h1>Medicine Cabinet</h1>
		<ul class="list-group">
	<!--Looping categories from db -->
		<?php foreach(get_categories_h() as $category):?>
		<li><a href="<?php echo base_url();?>/products/category/<?php echo $category->id; ?>"><?php echo $category->name;?></a></li> 
		<?php endforeach; ?> 
		</ul>
	</div>
	
	
	
<script>

function openNav(){

document.getElementById("mysidenav").style.width= "250px";

document.getElementById("main").style.marginLeft= "250px";

document.body.style.backgroundColor = "rgba( 0, 0, 0, 0, 4)";
}

function closeNav(){

document.getElementById("mysidenav").style.width= "0px";

document.getElementById("main").style.marginLeft= "0px";


document.body.style.backgroundColor = "white";
}
</script>
</div>
	
	
