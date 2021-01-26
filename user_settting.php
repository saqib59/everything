<?php
/*
Template Name: User Setting Temaplate
*/
get_header();
nectar_page_header($post->ID);
$provience = get_user_meta($current_user_id, 'provience', true);
$phone_no = get_user_meta($current_user_id, 'phone_no', true);
$city = get_user_meta($current_user_id, 'city', true);
$user_pic_id = get_user_meta($current_user_id, '_thumbnail_id', true);
$user = get_user_by('ID',$current_user_id);
?>
<div class="container-wrap" id="placeimg">
	
	<div class="container main-content">
		<div class="row">
			<div class="user_dashboard">
				<div style="margin-right: 0px;" class="col span_3">
					<?php
						include('custom/inc/sidebar.php');
					?>
				</div>
				<div class="col span_9 col_last">
					<div class="main_dashboard_panel">
						<div class="user_setting_panel">
							<div class="col span_4">
								<div class="user_col">
									<div class="user_col_heading">
										<h4>Profile Photo</h4>
									</div>
									<div class="fields_col">
										<div class="images">
											<div class="Profile">
												<!-- <p>Drop files anywhere to Upload</p> -->
												<?php 
												$image_ur = wp_get_attachment_url($user_pic_id);
												if (empty($user_pic_id)) { ?>
												<img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/placeholder-images-image_large.png" class="img-class">
												<?php } else { ?>
												<img src="<?= $image_ur; ?>" class="img-class">
												<?php } ?>
												<!-- <ruby>OR</ruby> -->
											</div>
										</div>
										<div class="Profile">
											<h4>Drop files anywhere to Upload</h4>
											<h6>or</h6>
											<div class="mySelect">
												<label class="myLabel">
													<form id="update-profile-form" method="post" enctype="multipart/form-data">
														<input type="file" name="user_pic" class="upload">
														<span>Select File</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col span_4">
									<div class="user_col">
										<div class="user_col_heading">
											<h4>Profile Detail</h4>
										</div>
										<div class="fields_col">
											<label>Username</label>
											<div class="fields">
												<input type="text" name="name" placeholder="Markus John" value=<?= ($user->user_login)? "$user->user_login": "";  ?> <?= ($user->user_login)? "disabled": "";  ?>>
												<input type="hidden" name="user_id" value=<?= $current_user_id; ?> >
								       			<input type="hidden" name="action" value="update_profile" >
											</div>
											<label>Email Address</label>
											<div class="fields">
												<input type="email" name="email" placeholder="info@example.com" value="<?= ($user->user_email)? "$user->user_email": "";  ?>" <?= ($user->user_email)? "disabled": "";  ?>>
											</div>
											<label>First Name</label>
											<div class="fields">
												<input type="text" name="first_name" placeholder="Markus" value="<?= ($user->first_name)? "$user->first_name": "";  ?>">
											</div>
											<label>Last Name</label>
											<div class="fields">
												<input type="text" name="last_name" placeholder="John" value="<?= ($user->last_name)? "$user->last_name": "";  ?>">
											</div>
											<label>Phone Number</label>
											<div class="fields">
												<input type="number" name="phone" placeholder="012 345 6789" value="<?= ($phone_no)? "$phone_no": "";  ?>">
											</div>
											<label>Provience</label>
											<div class="fields">
												<input type="text" name="provience" placeholder="Xyz provience" value="<?= ($provience)? "$provience": "";  ?>">
											</div>
											<label>City</label>
											<div class="fields">
												<input type="text" name="city" placeholder="Xyz City" value="<?= ($city)? "$city": "";  ?>">
											</div>
											<button name="Profile_update" id="update-profile" type="submit">Update</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col span_4 col_last">
								<div class="user_col">
									<div class="user_col_heading">
										<h4>Change Password</h4>
									</div>
									<div class="fields_col">
										<form id="change_password" method="post">
											<label>Current Password</label>
											<div class="fields">
												<input type="password" name="current_pass" placeholder="****************">
											</div>
											<label>New Password</label>
											<div class="fields">
												<input type="password" name="new_pass" id="pass_update" placeholder="****************">
												<input type="hidden" name="action" value="update_pswd">
											</div>
											<label>Confirm New Password</label>
											<div class="fields">
												<input type="password" name="confirm_new_pass" placeholder="****************">
												
											</div>
											<button name="update_btn" type="submit" id="update-pswd">Update</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->
<?php get_footer(); ?>