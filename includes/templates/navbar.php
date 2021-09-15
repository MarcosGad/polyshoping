<?php 





function setActive($name = 'home'){



	global $pagetitle;



	if(isset($pagetitle) && $pagetitle == $name){



	  echo "class='active'";	



	}



}



//check if user 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	

	if(isset($_POST['login'])) {

	

	$email=$_POST['email'];

	$pass=$_POST['password'];

	$hashpass=sha1($pass);

	//echo $hashpass;

 

	//check if the user exist in database

	$stmt=$con->prepare("select 

							            userid,email,password,username

								from

										users 

							    where 

										email=? 

								and 

										password=?

										

								and

								

										groupid	= 0

							

										limit 1");

	                          

	$stmt->execute(array($email,$hashpass));

	$row=$stmt->fetch();

	$count=$stmt->rowCount();

	//if count>0 this mean the database contain record about this username



	

	if($count>0){

		//print_r($row);

		$_SESSION['user']=$email;//register session name

		$_SESSION['id']=$row['userid'];//register session id

		$_SESSION['name']=$row['username'];//register session id

		header('location:index.php');//redirect to dashboard page

		exit();		

	}else {

		

		$loginerror = 'برجاء التأكد من البريد الالكتروني وكلمة السر'; 

	}

		

	} // end if login 

}





// admin 



if($_SERVER['REQUEST_METHOD'] == 'POST'){

	

	if(isset($_POST['login'])) {

	

	$email=$_POST['email'];

	$pass=$_POST['password'];

	$hashpass=sha1($pass);

	//echo $hashpass;

 

	//check if the user exist in database

	$stmt=$con->prepare("select 

							            userid,email,password,username

								from

										users 

							    where 

										email=? 

								and 

										password=?

							

							    and 

								 

								 		groupid	= 1 

										

										limit 1");

	                          

	$stmt->execute(array($email,$hashpass));

	$row=$stmt->fetch();

	$count=$stmt->rowCount();

	//if count>0 this mean the database contain record about this username



	

	if($count>0){

		//print_r($row);

		$_SESSION['useradmin']=$email;//register session email

		$_SESSION['idadmin']=$row['userid'];//register session id

		$_SESSION['nameadmin']=$row['username'];//register session name

		header('location:admin/addnew.php');//redirect to dashboard page

		exit();		

	}

		

	} // end if login 

}



?> 


<div class="oneheader">
<div class="container">
    <div class="row">

        <div class="brandone col-sm-7 col-md-8 col-lg-9">

            <p>Welcome To P<span class="r">O</span>LY <span class="rtwo">Shoping</span> </p>

        </div>
		<div class="col-sm-4 col-md-3 col-lg-2">
			<a href="" class="login" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
				<i class="fas fa-user-lock"></i> <span class="hidden-xs">Login </a>
			<a href="#" class="Sign"> <i class="fas fa-sign-in-alt"></i> <span class="hidden-xs">Sign In</span> </a>
			
		</div>
		
		
		<!-- modal -->
				

				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<a type="button" class="close-cust" data-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a>
						  
						<h4 class="modal-title" id="exampleModalLabel"><i class="far fa-id-card"></i> Login </h4>
					  </div>
					  <div class="modal-body">
						  
						<form>
						  <div class="row user-nav">
							  <div class="col-xs-2 col-lg-1">
							     <i class="fas fa-user"></i>
							  </div>
							  <div class="col-xs-10 col-lg-11">
							     <input type="text" class="form-control user-nav-xs" id="recipient-name" placeholder="Username or Email">
							  </div>
						  </div>
							
						 <div class="row pass-nav">
							  <div class="col-xs-2 col-lg-1">
							     <i class="fas fa-key"></i>
							  </div>
							  <div class="col-xs-10 col-lg-11">
							     <input type="password" class="form-control user-nav-xs" id="recipient-name" placeholder="Password">
							  </div>
						  </div>
						 
						</form>
						  
					  </div>
					  <div class="modal-footer">
						<input type="submit" class="btn btn-nav-sign" value="Sign In">
						<input type="submit" class="btn btn-nav-login" value="Login">
					  </div>
					</div>
				  </div>
				</div>
		
		
		
		<div class="col-sm-1">
			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown"><img src="http://magenta-nails.com/magenta/wp-content/themes/magentanails/assets/img/en.png" title="EN" alt="en" width="18" height="12"> EN
			   <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="#"><img src="http://magenta-nails.com/magenta/wp-content/themes/magentanails/assets/img/en.png" title="EN" alt="en" width="18" height="12"> EN</a></li>
				<li><a href="#"><img src="http://magenta-nails.com/magenta/wp-content/themes/magentanails/assets/img/ar.png" title="AR" alt="ar" width="18" height="12"> AR</a></li>
			  </ul>
			</div>
        </div>
		<?php 

                if(isset($_SESSION['user'])){

	            

					echo'<div class="user-login col-sm-5">' . '<span class="user-login-span"> مـــرحـبـا </span>'  . $_SESSION['name'] . ' ' .  '<a class=" btn user-btn profile" href="profile.php">الصفحة الشخصية</a>' . '<a class=" btn user-btn" href="logout.php"> خروج</a>' .'</div>'; 



				}else{

				

				?>

			 		<?php 

					if(isset($loginerror)){

					?>

			 

						 <div class="col-sm-12"> 

							<div class="loginerror">

									<p><?php echo $loginerror; ?> </p>

							</div>

						</div>





						<?php

					}

					?>

					

		</form>

				

      	<?php } ?> 



    </div>
</div>
</div>


<div class="container hidden-xs">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">My Store</a>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown-nav mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Men Collection</li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Features</li>
							<li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
							<li><a href="#">Four Columns Grid</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
							<li><a href="#">Google Fonts</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Plus</li>
							<li><a href="#">Navbar Inverse</a></li>
							<li><a href="#">Pull Right Elements</a></li>
							<li><a href="#">Coloured Headers</a></li>                            
							<li><a href="#">Primary Buttons & Default</a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
							<li><a href="#">Calls to action</a></li>
							<li><a href="#">Custom Fonts</a></li>
							<li><a href="#">Slide down on Hover</a></li>                         
						</ul>
					</li>
				</ul>				
			</li>
            <li class="dropdown-nav mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3">
    					<ul>
							<li class="dropdown-header">Features</li>
							<li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
							<li><a href="#">Four Columns Grid</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
							<li><a href="#">Google Fonts</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Plus</li>
							<li><a href="#">Navbar Inverse</a></li>
							<li><a href="#">Pull Right Elements</a></li>
							<li><a href="#">Coloured Headers</a></li>                            
							<li><a href="#">Primary Buttons & Default</a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
							<li><a href="#">Calls to action</a></li>
							<li><a href="#">Custom Fonts</a></li>
							<li><a href="#">Slide down on Hover</a></li>                         
						</ul>
					</li>
                    <li class="col-sm-3">
    					<ul>
							<li class="dropdown-header">Women Collection</li>                            
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
				</ul>				
			</li>
            <li><a href="#">Store locator</a></li>
		</ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="#">My cart (0) items</a></li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
</div>



	
<div class="container-fulid" data-spy="affix" data-offset-top="198">
	<div class="threeheader">

	
	<div class="container">
		<div class="row">
		<div class="col-sm-5 col-md-4 col-lg-3">
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
   <i class="fa fa-bars" aria-hidden="true"></i> ALL DEPARTMENTS <span class="caret"></span>
  </button>
		
  <ul class="dropdown-menu">
    <li><a class="hvr-forward"  href="#">Mobiles</a></li>
    <li><a class="hvr-forward" href="#">Tablets</a></li>
    
    <li><a class="hvr-forward" href="#">Memory & flash</a></li>
    <li><a class="hvr-forward" href="#">Accessories</a></li>
  </ul>
</div>
		
</div>
    <div class="col-xs-10 col-sm-7 col-md-7 col-lg-6">
		
			
	   <form class="search" method="get" action="search.php">
		   <input type="text" name="user_query" class="searchTerm" placeholder="Enter your keyword...">
			<button type="submit" name="search" class="searchButton">
			  <i class="fa fa-search"></i>
			</button>
	  </form>
   
	
	</div>
	
</div>
</div>

</div>

</div>
<!-- breadcrumb -->
<div class="container">
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
</div>
