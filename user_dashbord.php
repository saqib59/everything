<?php 

/*

Template Name: User Dashbord Temaplate

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

					<div class="main_dashboard_panel">

						<div class="user_panel">

							<div class="col span_4">

								<a href="#">

								    <div class="user_box">

									    <div class="icon_box">

										    <img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/envilup.png">

									    </div>

									    <div class="text_box">

									    	<h2>199</h2>

										    <h4>My Messages</h4>

										    <a href="#">View Details</a>

									    </div>

								    </div>

								</a>

							</div>

							<div class="col span_4">

								<a href="#">

								    <div class="user_box">

									    <div class="icon_box">

										    <img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/Shopping-cart-icon-by-marco.livolsi2014-580x386-1.png">

									    </div>

									    <div class="text_box">

									    	<h2>120</h2>

										    <h4>My</h4>

										    <a href="#">View Details</a>

									    </div>

								    </div>

							    </a>

							</div>

							<div class="col span_4 col_last">

								<a href="#">

								    <div class="user_box">

									    <div class="icon_box">

										    <img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/Dollar.png">

									    </div>

									    <div class="text_box">

									    	<h2>120</h2>

										    <h4>Price Alerts</h4>

										    <a href="#">View Details</a>

									    </div>

								    </div>

							    </a>

							</div>												

						</div>

						<div class="user_panel">

							<div class="col span_4">

								<a href="#">

								    <div class="user_box">

									    <div class="icon_box">

										    <img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/user.png">

									    </div>

									    <div class="text_box">

										    <h4>My Profile</h4>

										    <a href="#">View Details</a>

									    </div>

								    </div>

							    </a>

							</div>

							<div class="col span_4 col_last">

								<a href="#">

								    <div class="user_box">

									    <div class="icon_box">

										    <img src="http://dotcreative.website/everything/wp-content/uploads/2021/01/setting.png">

									    </div>

									    <div class="text_box">

										    <h4>My Settings</h4>

										    <a href="#">View Details</a>

									    </div>

								    </div>

							    </a>

							</div>												

						</div>	

					</div>				

				</div>

			</div>

		</div><!--/row-->

	</div><!--/container-->

</div><!--/container-wrap-->

<?php get_footer(); ?>







