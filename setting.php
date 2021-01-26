<?php 
/*
Template Name: Setting Temaplate
*/
get_header(); 
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
						<div class="dashboard_panel">
							<div class="rep_del_sec">
								<div class="report_sec">
									<form method="post">
									<h2>Report Vendor/Delete Account</h2>
									<div class="select_box">
										<select>
											<option>Select Reason</option>
										</select>	
									</div>
									<div class="discription_sec">
										<textarea placeholder="Description" rows="6"></textarea>
									</div>
									<button name="delete_submit" type="submit" id="delete-account-btn">Delete</button>
									</form>
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