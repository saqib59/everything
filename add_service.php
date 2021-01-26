<?php

/*

Template Name: Add Service Template

 */

get_header();

?>

<div class="container-wrap" id="placeimg">
	<div class="container main-content">
		<div class="row">
			<div class="main_sec">
				<div class="add_service">
				    <div class="col span_12">
					    <form id="add_service_form" method="post" enctype="multipart/form-data">
							<div class="col span_6">
								<div class="main_field_txt_sec">
									<div class="inner_field_txt_sec">
											<div class="service_filed">
												<input type="text" name="product_title" class="required" placeholder="First Nameces Title">
											</div>
										<div class="col span_6">
											<div class="service_filed">
												<input type="text" name="service" placeholder="First Name">
											</div>
										</div>
										<div class="col span_6 col_last">
											<div class="service_filed">
												<input type="hidden" name="action" value="add_service_as_product">
												<select name="prod_category" class="required">
													<option>Select Category</option>
													<option>Select Category</option>
												</select>
											</div>
										</div>
										<div class="col span_12">
											<div class="service_text_area">
												<textarea name="prod_desc" id="myTextarea" rows="15"></textarea>
											</div>
										</div>
										<div class="col span_12">
											<div class="service_image_upload">
												<div class="fields_col">
											        <div class="Profile">
											        <h4>Drop files anywhere to Upload</h4>
											        <h6>or</h6>
												        <div class="mySelect">
												        	<label class="myLabel">
						                                        <input type="file" id="gallery-images" name="gallery_images[]" class="upload" multiple="multiple">
						                                        <span>Select File</span>
						                                    </label>
												        </div>
											        </div>
													<div class="images">
														<ul class="uploadfileone">

														</ul>
													</div>
										        </div>
									        </div>
										</div>
										<div class="col span_12">
											<div class="contact_form">
												<p>Contact Details</p>
												<div class="col span_6">
													<div class="service_filed">
														<input type="text" name="service" placeholder="First Name">
													</div>
												</div>
												<div class="col span_6 col_last">
													<div class="service_filed">
														<input type="text" name="service" placeholder="Last Name">
													</div>
												</div>
												<div class="col span_6">
													<div class="service_filed">
														<input type="text" name="service" placeholder="Phone Number">
													</div>
												</div>
												<div class="col span_6 col_last">
													<div class="service_filed">
														<input type="text" name="service" placeholder="Email Address">
													</div>
												</div>
												<div class="col span_6">
													<div class="service_filed">
														<input type="text" name="service" placeholder="Zib">
													</div>
												</div>
												<div class="col span_6 col_last">
													<div class="service_filed">
														<select>
															<option>State</option>
															<option>State</option>
														</select>
													</div>
												</div>
												<div class="service_filed">
													<input type="text" name="service" placeholder="Address">
												</div>
												<div class="service_filed">
													<input type="checkbox" name="addservice">By adding the service i agree to the term and services
												</div>
											</div>
										</div>
									</div>
									<button type="submit" id="add_service_btn">Add Services</button>
								</div>
							</div>
							<div class="col span_6 col_last">
								<div class="service_toggle">
									<h1>Enter Specs</h1>
								    <div class="accordian">
								      <div class="accordian-item">
								        <div class="accordian-item-header">
								          <h4>Music</h4>
								        </div>
								        <div class="accordian-item-body">
								          <div class="accordian-item-body-content">
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Charistian</p>
								          	</div>
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Club</p>
								          	</div>
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Country</p>
								          	</div>
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Electronic</p>
								          	</div>
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Hip Hop</p>
								          	</div>
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Indie</p>
								          	</div>
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Jozz</p>
								          	</div>
								          	<div class="service_toggle_checkbox">
								            <input type="checkbox" name="charistian"><p>Oldies</p>
								          	</div>
								          </div>
								        </div>
								      </div>
								      <div class="accordian-item">
								        <div class="accordian-item-header">
								          <h4>Abc</h4>
								        </div>
								        <div class="accordian-item-body">
								          <div class="accordian-item-body-content">
								            <p>
								              You can use the ISO file to create bootable media for installation
								            </p>
								          </div>
								        </div>
								      </div>
								      <div class="accordian-item">
								        <div class="accordian-item-header">
								          <h4>
								            xyz
								          </h4>
								        </div>
								        <div class="accordian-item-body">
								          <div class="accordian-item-body-content">
								            <p>
								              The terms 32-bit and 64-bit refer to the way a computer's
								            </p>
								          </div>
								        </div>
								      </div>
								      <div class="accordian-item">
								        <div class="accordian-item-header">
								          <h4>
								            123
								          </h4>
								        </div>
								        <div class="accordian-item-body">
								          <div class="accordian-item-body-content">
								            <p>
								              The terms 32-bit and 64-bit refer to the way a computer's
								            </p>
								          </div>
								        </div>
								      </div>
								    </div>
								   </div>
								    <div class="service_calendar">
								    	<h1>Select Availability</h1>
										<div class="calendar">
										  <div class="calendar__month">
										    <div class="cal-month__previous"><</div>
										    <div class="cal-month__current"></div>
										    <div class="cal-month__next">></div>
										  </div>
										  <div class="calendar__head">
										    <div class="cal-head__day"></div>
										    <div class="cal-head__day"></div>
										    <div class="cal-head__day"></div>
										    <div class="cal-head__day"></div>
										    <div class="cal-head__day"></div>
										    <div class="cal-head__day"></div>
										    <div class="cal-head__day"></div>
										  </div>
										  <div class="calendar__body">
										    <div class="cal-body__week">
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										    </div>
										    <div class="cal-body__week">
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										    </div>
										    <div class="cal-body__week">
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										    </div>
										    <div class="cal-body__week">
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										    </div>
										    <div class="cal-body__week">
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										    </div>
										    <div class="cal-body__week">
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										      <div class="cal-body__day"></div>
										    </div>
										  </div>
										</div>
								    </div>
								</div>
							</div>
					    </form>
				    </div>
				</div>
			</div>
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer();?>







