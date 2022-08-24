<?php 
require('top.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
// if($str!=''){
// 	$get_product=get_product($con,'','','',$str);
// }else{
// 	?>
// 	<script>
// 	window.location.href='index.php';
// 	</script>
// 	<?php
// }										
?>
<div class="body__overlay"></div>
        
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Search</span>
								  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active"><?php echo $str?></span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
					<?php if(count($get_product)>0){?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <?php
										foreach($get_product as $row){
										?>
										<!-- Start Single Category -->
                                        <div class="col-md-3 mb-2 ">
				 <form action=""  class="form-submit" >
            	 	<div class="card" style="height:100%" >
            	 		 
            	 		<a href='single.php?id=<?php echo  $row["product_id"] ?>'>	<img src="<?= $row['product_image'] ?>" class="card-img-top" style="width:200px; height:200px;" ></a>
            	 			 
            	 			 <div class="card-body "> 
								  <h6  class="text-light bg-info text-center rounded p-1 card-title"> <?=$row['product_name'];	 ?></h6>
            	 				 	<p>
            	 				 		Brand : <?= $row['brand']; ?><br>
            	 				 		code : <?= $row['product_code']; ?><br>
            	 				 		Warranty:<?= $row['warranty']; ?><br><br>
									  <span class="text-danger"> Rs.<?= number_format($row['product_price'],2); ?> </span>

            	 				 	</p>
	            	 			 
                                    <input type="hidden" class="pid" value="<?= $row['product_id'] ?>" > 
									<input type="hidden" class="pname" value="<?= $row['product_name'] ?>" >  
									<input type="hidden" class="pprice" value="<?= $row['product_price'] ?>" > 
									<input type="hidden" class="pqty" value="<?= $row['quantity'] ?>" > 
									<input type="hidden" class="pimage" value="<?= $row['product_image'] ?>" >
									<input type="hidden" class="pbrand" value="<?= $row['brand'] ?>" >
									<input type="hidden" class="pcode" value="<?= $row['product_code'] ?>" >
									<input type="hidden" class="pwarranty" value="<?= $row['warranty'] ?>" >
									<button type="submit"  class="btn btn-info add2" name="" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"   ><i class="far fa-heart"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 <button type="submit"  class="btn btn-info addItemBtn" data-toggle="tooltip" data-placement="top" title="Add To Cart"    name="add"  ><i class="fas fa-shopping-cart"></i></button> 
 
												    
							   </div> <!-- closes card-body -->
								 
            	 	</div> <!-- closes card -->
				 </form>
										<?php } ?>
                                    </div>
							   </div>
                            </div>
                        </div>
                    </div>
					<?php } else { 
						echo "Data not found";
					} ?>
                
				</div>
            </div>
        </section>
        <!-- End Product Grid -->
        <!-- End Banner Area -->
		<input type="hidden" id="qty" value="1"/>
<?php require('footer.php')?>        