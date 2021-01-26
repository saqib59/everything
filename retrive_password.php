<?php 
/*
Template Name: Retrieve Password Temaplate
*/
get_header(); 
?>
<div class="container-wrap" id="placeimg">
	
	<div class="container main-content">
		<div class="row">
			<div class="main_sec">
				<div class="retive_password">
				    <div class="col span_12">
					    <div class="login_clm">
						    <h2>Reset Your Password</h2>
						    <form id="reset_password_form" method="post">
							    <label>Enter New Password</label>
							    <div class="fields">
								    <input type="password" name="pass" id="pass2" placeholder="****************">
								    <i class="fa fa-lock" aria-hidden="true"></i>
							    </div>
							    <label>Retype New Password</label>
							    <div class="fields">
								    <input type="password" name="c_pass" placeholder="****************">
								    <i class="fa fa-lock" aria-hidden="true"></i>
							    </div>							    
							    <button name="forget_submit" type="submit" id="reset-pswd-btn">Submit</button>				
						    </form>
					    </div>
				    </div>
				</div>			
			</div>
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->
<?php get_footer(); ?>



