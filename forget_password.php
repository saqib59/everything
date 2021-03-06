<?php 
/*
Template Name: Forget Password Template
*/
get_header(); 
?>
<div class="container-wrap" id="placeimg">
	
	<div class="container main-content">
		<div class="row">
			<div class="main_sec">
				<div class="reset_password">
				    <div class="col span_12">
					    <div class="login_clm">
						    <h2>Retreive Your Account</h2>
						    <form id="forget_pass_form" method="post">
							    <label>Enter Email Address</label>
							    <div class="fields">
								    <input type="email" name="email" placeholder="Info@Company.com" class="required">
								    <i class="fa fa-envelope" aria-hidden="true"></i>
							    </div>
							    <button name="forget_submit" id="forgot_mail" type="submit">Submit</button>
							    <div class="para">
								    <p>Enter your register email address to retreive your account and reset the password.</p>
							    </div>													
						    </form>
					    </div>
				    </div>
				</div>			
			</div>
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->
<?php get_footer(); ?>



