<?php

$pagetitle='';

include 'init.php';

?> 

<div class="contact-img">
	<div class="container">
		<img src="images/QUICK-CONTACT.jpg" alt="" style="width: 100%; height: 350px;">
	
	</div>
</div>

<div class="contact">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-lg-6">
			<div class="contact-info">
				<div class="contact-email">
					<i class="fas fa-envelope"></i>  <a class="" href="mailto:info@polyshoping.com"> info@polyshoping.com</a> 
				</div>
				<div class="contact-email">
					<i class="fas fa-headphones"></i> +201270754985
				</div>
			
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-6">
			<div class="contact-form">
				<h2 class="text-center">Send Your Message</h2>
				<form>
					<div class="form-group form-group-lg">
					  <input class="form-control" type="text" placeholder="Your Name"/>
						<i class="fas fa-user icon-contact icon-contact-xs"></i>
                    </div>
				
				   <div class="form-group form-group-lg">
					  <input class="form-control" type="email" placeholder="Your Email"/>
					    <i class="fas fa-envelope icon-contact"></i>
                  </div>
				
				  <div class="form-group form-group-lg">
					  <input class="form-control" type="text" placeholder="Your Phone"/>
					   <i class="fas fa-phone icon-contact"></i>
                  </div>
					
				  <div class="form-group form-group-lg">
					  <textarea class="form-control area" placeholder="Your Message..."/></textarea>
                  </div>
				
				<div class="form-group form-group-lg">
					  <input type="submit" class="btn btn-contact btn-lg" value="Send Message">
                 </div>
				
				
			</form>
			</div>	
		</div>
	</div> 
</div>







<!-- start footer --> 
<?php 

include $tpl.'footer.php';

?> 

<!-- end footer --> 