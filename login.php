<?php

$pagetitle='';

include 'init.php';

?> 
<div class="login-page">
<div class="container">
	
	<div class="row">
		
		<div class="col-xs-12 col-lg-6">
			<div class="login-part">
				<h2> <i class="fas fa-user-lock"></i> Login</h2>
				<form>
						  <div class="row user-login">
							  <div class="col-xs-1 col-lg-1">
							     <i class="fas fa-user"></i>
							  </div>
							  <div class="col-xs-11 col-lg-11">
							     <input type="text" class="form-control login-xs" id="recipient-name" placeholder="Username or Email">
							  </div>
						  </div>
							
						 <div class="row pass-login">
							  <div class="col-xs-1 col-lg-1">
							     <i class="fas fa-key"></i>
							  </div>
							  <div class="col-xs-11 col-lg-11">
							     <input type="password" class="form-control login-xs" id="recipient-name" placeholder="Password">
							  </div>
						  </div>
					
					<input type="submit" class="btn btn-page-login btn-lg" value="Login">
						 
				</form>
			
			
			</div>
			
		</div>
		
		<div class="col-xs-12 col-lg-6">
				<div class="login-part">
				<h2> <i class="fas fa-sign-in-alt"></i> REGISTER </h2>
				<form>
						  <div class="row user-login">
							  <div class="col-xs-1 col-lg-1">
							    <i class="fas fa-envelope"></i> 
							  </div>
							  <div class="col-xs-11 col-lg-11">
							     <input type="text" class="form-control login-xs" id="recipient-name" placeholder="Email">
							  </div>
						  </div>
							
						 <div class="row pass-login">
							  <div class="col-xs-1 col-lg-1">
							     <i class="fas fa-key"></i>
							  </div>
							  <div class="col-xs-11 col-lg-11">
							     <input type="password" class="form-control login-xs" id="recipient-name" placeholder="Password">
							  </div>
						  </div>
					
					<input type="submit" class="btn btn-page-sign btn-lg" value="Register">
						 
				</form>
			
			
			</div>
		</div>
		
	</div>
	
</div>
</div>






<!-- start footer --> 
<?php 

include $tpl.'footer.php';

?> 

<!-- end footer --> 