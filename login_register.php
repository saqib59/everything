<?php
/*
Template Name: Login Register Temaplate
 */
get_header();
?>
<div class="container-wrap" id="placeimg">

	<div class="container main-content">
		<div class="row">
			<div class="main_sec">
				<div class="col span_5">
					<div class="login_clm">
						<h2>Login Now</h2>
						<form method="post" id="user-login-form">
							<label>Enter Email Or Username</label>
							<div class="fields">
								<input type="text" name="user_name" placeholder="Info@Company.com">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<label>Enter password</label>
							<div class="fields">
								<input type="password" name="pass" placeholder="**************">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</div>
							<div class="col span_6">
								<div class="check_box">
									<input type="checkbox" name="user_system_remember">Remember me
								</div>
							</div>
							<div class="col span_6 col_last">
								<div class="forget_anchor">
									<a href="http://dotcreative.website/everything/reset-your-password/">Forgot Password?</a>
								</div>
							</div>
							<button name="login_btn" type="submit" id="login-user">LOGIN</button>
						</form>
					</div>
				</div>
				<div class="col span_7 col_last">
					<div class="login_clm">
						<div class="regiter_box">
							<div class="col span_7">
								<h2>Register Now</h2>
								<form method="post" id="user_register_form">
									<label>Enter Username</label>
									<div class="fields">
										<input type="text" name="username" placeholder="david">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<label>Enter Email</label>
									<div class="fields">
										<input type="email" name="reg_email" placeholder="Info@Company.com">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<label>Enter Password</label>
									<div class="fields">
										<input type="password" id="pass" name="register_pass" placeholder="****************">
										<input type="hidden" name="action" value="daily_user_registration_form">
										<i class="fa fa-lock" aria-hidden="true"></i>
									</div>
									<label>Retype Password</label>
									<div class="fields">

										<input type="hidden" name="user_role" value="wk_marketplace_seller">
										<input type="password" name="c_pass" placeholder="****************">
										<i class="fa fa-lock" aria-hidden="true"></i>
									</div>
									<div class="check_box">
										<input type="checkbox" name="registering">By registering, you accept our Terms & Conditions
									</div>
									<button name="Register_btn" id="register_submit" type="submit">Register</button>
								</form>
							</div>
							<div class="col span_5 col_last">
								<div class="social_btns">
									<ul>
										<li><a href="#"><img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/google.png" style="display: block !important"></a></li>
										<li><a href="#"><img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/facebook.png" style="display: block !important"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div><!--/row-->
			</div><!--/container-->
			</div><!--/container-wrap-->
			<?php get_footer();?>