<?php

$pagetitle='Items';

include 'init.php';

?> 

<!-- start slider-item -->
<div class="slider-item">
<div class="container">
	
	<div class="row">
				
		<div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
			
			<div class="ubislider-image-container left" data-ubislider="#slider" id="imageSlider"></div>
			<div class="ubislider left" id="slider">
				<a class="arrow prev"></a>
				<a class="arrow next"></a>
				<ul class="ubislider-inner">
					<li>
						<img src="images/1.jpg">
					</li>
					<li>
						<img src="images/2.jpg">
					</li>
					<li>
						<img src="images/3.jpg">
					</li>
				</ul>
			</div>
        </div>
		
		<!-- slider mobile --> 
		


		
<div class="container hidden-sm hidden-md hidden-lg">
	
	<h1 class="name-item">Name Nice Item</h1>

			<div class="row">

			<div class="col-xs-12"> 


				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							  
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							 
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							  
							<div class="item itemmo active">
								   <img src="images/1.jpg" style='height: 466px; border-radius: 10px;'> 
							</div>
							
							<div class="item itemmo">
								<img src="images/2.jpg" style='height: 466px; border-radius: 10px;'> 
							</div>
							  
							<div class="item itemmo">
								<img src="images/3.jpg" style='height: 466px; border-radius: 10px;'> 
							</div>

						  </div>
					
			   </div>
			</div>
	</div>
			
</div>


			
<!-- slider mobile --> 
		
		<div class="col-sm-6 col-md-5 col-lg-5">
			<div class="info-item">
				<h1 class="hidden-xs name-item">Name Nice Item</h1>
				<div class="start">*****</div>
				<div class="price">$500</div>
				<div class="name-number">Quantity</div>
				<div class="cart-item">
					<div class="row">
						<div class="col-xs-8 col-lg-3">
							<input type="number" value="1" class="form-control number-item">
						</div>
						<div class="col-xs-4 col-lg-9">
							<a class="cart-go btn btn-default">Add To Cart</a>
						</div>
					</div>			
				</div>
				
				<div class="size">
					<div class="row">
						<div class="col-xs-2 col-lg-1">
							<p class="size-label">Size</p>
						</div>
						<div class="col-xs-10 col-lg-3">
							<select class="form-control size-select">
								<option value="0">---</option>
								<option value="1"></option>
								<option value="2"></option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="color">
					<div class="row">
						<div class="col-xs-2 col-lg-1" style="margin-left: 3px;">
							<p class="color-label">Color</p>
						</div> 
						<div class="col-xs-2 col-lg-1 color-sm" style="margin-left: 7px;">
							<a href="#" class="color-img">
								<img alt="" src="images/4.jpg" style="width: 40px; height: 40px;">
							</a>
						</div>
						<div class="col-xs-2 col-lg-1 color-sm" style="margin-left: 7px;">
							<a href="#" class="color-img">
								<img alt="" src="images/4.jpg" style="width: 40px; height: 40px;">
							</a>
						</div>
						<div class="col-xs-2 col-lg-1 color-sm" style="margin-left: 7px;">
							<a href="#" class="color-img">
								<img alt="" src="images/4.jpg" style="width: 40px; height: 40px;">
							</a>
						</div>
						<div class="col-xs-2 col-lg-1 color-sm" style="margin-left: 7px;">
							<a href="#" class="color-img">
								<img alt="" src="images/4.jpg" style="width: 40px; height: 40px;">
							</a>
						</div>
					</div>
				</div>
				
				<div class="share">
					<div class="row">
						<div class="col-xs-3 col-lg-2">
						   <p class="share-name">Share</p>
						</div>
						<div class="col-xs-9 col-lg-10">
							<ul>
								<a href="" class="hvr-pulse-grow"><li><i class="fab fa-whatsapp"></i></li></a>
								<a href="" class="hvr-pulse-grow"><li><i class="fab fa-facebook-f"></i></li></a>
								<a href="" class="hvr-pulse-grow"><li><i class="fab fa-twitter"></i></li></a>
								<a href="" class="hvr-pulse-grow"><li><i class="fab fa-google-plus-g"></i></li></a>
								<a href="" class="hvr-pulse-grow"><li><i class="fab fa-instagram"></i></li></a>
							</ul>
						</div>
					</div> 
					
					
				</div>
			
			</div>
		
		</div>

		<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
			
			<div class="header-sidebar header-sidebar-item">
				 <p>Trending Now</p>
			</div>
			<div class="sidebar hvr-push">
				<div class="row">
					<div class="item-sidebar">
					<div class="col-sm-4">	
						<img src="images/1.jpg" alt="" width="90px;">
					</div>
					<div class="col-sm-8">
				          <a class="price-sidebar" href="" title="">product one</a>				
				          <span class="more">500$</span>
				    </div>
					</div>
				
				</div>
				
			</div>
			<div class="sidebar hvr-push">
				<div class="row">
					<div class="item-sidebar">
					<div class="col-sm-4">	
						<img src="images/2.jpg" alt="" width="90px;">
					</div>
					<div class="col-sm-8">
				          <a class="price-sidebar" href="" title="">product four</a>				
				          <span class="more">200$</span>
				    </div>
					</div>
				
				</div>
				
			</div>
			<div class="sidebar hvr-push">
				<div class="row">
					<div class="item-sidebar">
					<div class="col-sm-4">	
						<img src="images/3.jpg" alt="" width="90px;">
					</div>
					<div class="col-sm-8">
				          <a class="price-sidebar" href="" title="">product three</a>				
				          <span class="more">300$</span>
				    </div>
					</div>
				
				</div>
				
			</div>
		</div>
     </div>
</div>
</div>
<!-- end slider-item -->

<!-- start desc item --> 

	<div class="container">
		<div class="desc-item">
			    <div>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active desc-btn"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">DESCRIPTION</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REVIEWS</a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
					<p class="text-desc">
						1- good prodect </br>
						2- we shoud know this prodect good well </br>
						3- what is kg and cm this prodect </br>
						5- thank you for shoping with us </br>
		                6- good prodect </br>
						7- we shoud know this prodect good well </br>
						8- what is kg and cm this prodect </br>
						9- thank you for shoping with us </br>
					</p>
					</div>
					<div role="tabpanel" class="tab-pane border-desc" id="profile">
						
					<p class="text-desc-two">REVIEWS</p>

					<hr>
					<p class="text-desc-two">ADD A REVIEW</p>
					  <form method="" action="" class="form-horizontal">
						  
						  <div class="desc-comment">
						  <div class="row">
						  		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
							  		<label class="control-label lable-desc">Your Review</label>
							    </div>
							  	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
							  		<textarea class="form-control re-textarea" name="" required="required" placeholder="" ></textarea>
							    </div>
						  </div>
						 </div>
						  
					<div class="row">
						<div class="desc-input">
							
						  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
								
									<div class="row">
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
										<label class="control-label lable-desc-two">Name</label>
									</div>
									<div class="col-xs-12 col-sm-10 col-lg-10">
										<input type="text" class="form-control desc-two" name="" required="required" placeholder="" >

									</div>
						            </div>
								
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
								
									<div class="row">
									<div class="col-sm-2">
										<label class="control-label lable-desc-two lable-desc-two-sm">Email</label>
									</div>
									<div class="col-sm-10">
										<input type="email" class="form-control desc-two-agin" name="" required="required" placeholder="" >
									</div>
						            </div>
							  
						    </div>	
						  </div>
					</div>
						  
				   <div class="row">
						<div class="col-sm-12">
						    <input type="submit" class="btn btn-default btn-send" value="Send">
						</div>
				    </div>
					
			</form>
					
					</div>
				  </div>

				</div>

		</div>
	</div>


<!-- end  desc item --> 






 <!-- start desc slider --> 

<div class="container">
		
			<div class="slider">
	            <div class="owl-carousel owl-theme">
		        <div class="item">
				<img src="images/1.jpg" class="owl-carousel-imgg" >
				<span class="circle">offer</span>
				<a class="price-item" href="" title="">product one</a>				
				<span class="more">500$</span>
				</div>
				 <div class="item">
				<img src="images/2.jpg" class="owl-carousel-imgg">
				<span class="circle">offer</span>
				<a class="price-item" href="" title="">product two</a>				
				<span class="more">500$</span>
				</div>
				<div class="item">
				<img src="images/3.jpg" class="owl-carousel-imgg" >
				<span class="circle">offer</span>
				<a class="price-item" href="" title="">product three</a>				
				<span class="more">500$</span>
				</div>
				 <div class="item">
				<img src="images/4.jpg" class="owl-carousel-imgg" >
				<span class="circle">offer</span>
				<a class="price-item" href="" title="">product four</a>				
				<span class="more">500$</span>
				</div>
					
                </div>
             </div>				
</div>


<!-- end desc slider --> 

<!-- start Trending Now small  -->
			
	<div class="container hidden-md hidden-lg">
		
		
			
			<div class="header-sidebar" style="margin-top: 15px;">
				 <p>Trending Now</p>
			</div>
			
			<div class="col-xs-12 col-sm-4 sidebar-sm sidebar-sm-one hvr-push">
				
				<div class="row">
					<div class="item-sidebar">
						<div class="col-xs-4 col-sm-4 col-lg-4">	
							<img src="images/1.jpg" alt="" width="90px;">
						</div>
						<div class="col-xs-8 col-sm-8 col-lg-8">
							  <a class="price-sidebar" href="" title="">product one</a>				
							  <span class="more">500$</span>
						</div>
					</div>
				
				</div>
				
			</div>
			
			<div class="col-xs-12 col-sm-4 sidebar-sm sidebar-sm-two hvr-push">
				
				<div class="row">
					<div class="item-sidebar">
						<div class="col-xs-4 col-sm-4 col-lg-4">	
							<img src="images/1.jpg" alt="" width="90px;">
						</div>
						<div class="col-xs-8 col-sm-8 col-lg-8">
							  <a class="price-sidebar" href="" title="">product one</a>				
							  <span class="more">500$</span>
						</div>
					</div>
				
				</div>
				
			</div>
			
			<div class="col-xs-12 col-sm-4 sidebar-sm sidebar-sm-three hvr-push">
				
				<div class="row">
					<div class="item-sidebar">
						<div class="col-xs-4 col-sm-4 col-lg-4">	
							<img src="images/1.jpg" alt="" width="90px;">
						</div>
						<div class="col-xs-8 col-sm-8 col-lg-8">
							  <a class="price-sidebar" href="" title="">product one</a>				
							  <span class="more">500$</span>
						</div>
					</div>
				
				</div>
				
			</div>					
		
   
			
</div>	


			
<!-- end Trending Now small --> 





<!-- start footer --> 
<?php 

include $tpl.'footer.php';

?> 

<!-- end footer --> 


	<script>

	$(document).ready(function(){
		
		
	// start ubislider
		
	
		
	 $('#slider').ubislider({
		arrowsToggle: true,
		type: 'ecommerce',
		hideArrows: true,
		autoSlideOnLastClick: true,
		modalOnClick: true,
		position:'vertical',
		
		onTopImageChange: function(){
			$('#imageSlider img').elevateZoom();
		}
	 }); 
		
	
		
   // start owl-carousel
		
		 var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
				autoplay:true,
    			autoplayHoverPause:true,
                loop: true,
				dots: false, 
                responsive: {
                  0: {
                    items: 1,
					slideBy: 1
                  },
                  600: {
                    items: 3,
					slideBy: 3
					
                  },
                  1000: {
                    items: 5,
					slideBy: 5
					
                  }
					 

                }
				  
				  
              }); 
		
		
	});
		
		
		

	</script>
