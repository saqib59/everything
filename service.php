<?php 

/*

Template Name: Service Table Temaplate

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

							<div class="order_tabel_sec">

								<div class="order_tabel_inner">

									<div class="order-btn service-btn">

										<ul>

											<li><button type="submit" id="allorder">All Orders</button></li>

											<li><button type="submit" id="activeorder">Active Orders</button></li>

											<li><button type="submit" id="pastorder">Past Orders</button></li>

										</ul>

										<ul>

											<li><a href="<?= home_url().'/add-service'?>"><button type="submit"  id="newservice">Add New Services</button></a></li>

										</ul>

									</div>

									<table id="example" class="display" width="100%">

									    <thead>

									        <tr>

									        <th>Title</th>

									        <th>Category</th>

									        <th>Ad Status</th>

									        <th>Price</th>

									        <th>Date</th>

									        <th>Action</th>

									        </tr>

									    </thead>

									 

									    <tbody>

									        <tr>

									        <td>Dj Services for wedding</td>

									        <td>Dj</td>

									        <td><a href="#">Active</a></td>

									        <td>$10,000</td>

									        <td>June 01 2020</td>

									        <td><a href="">View</a></td>

									        </tr>

									    </tbody>

									    <tbody>

									        <tr>

									        <td>Makeup Artist for bride and groom</td>

									        <td>Makeup</td>

									        <td><a href="#">Past</a></td>

									        <td>$10,000</td>

									        <td>June 01 2020</td>

									        <td><a href="#">View</a></td>

									        </tr>

									    </tbody>

									    <tbody>

									        <tr>

									        <td>Wedding Dresses for your spicial day</td>

									        <td>Dressses</td>

									        <td><a href="#">Active</a></td>

									        <td>$10,000</td>

									        <td>June 01 2020</td>

									        <td><a href="#">View</a></td>

									        </tr>

									    </tbody>

									    <tbody>

									        <tr>

									        <td>Catering Services for Services</td>

									        <td>Dj</td>

									        <td><a href="#">Past</a></td>

									        <td>$10,000</td>

									        <td>June 01 2020</td>

									        <td><a href="#">View</a></td>

									        </tr>

									    </tbody>

									    <tbody>

									        <tr>

									        <td>Dj Services for wedding</td>

									        <td>Makeup</td>

									        <td><a href="#">Active</a></td>

									        <td>$10,000</td>

									        <td>June 01 2020</td>

									        <td><a href="#">View</a></td>

									        </tr>

									    </tbody>

									    <tbody>

									        <tr>

									        <td>Dj Services for wedding</td>

									        <td>Catering</td>

									        <td><a href="#">Past</a></td>

									        <td>$10,000</td>

									        <td>June 01 2020</td>

									        <td><a href="#">View</a></td>

									        </tr>

									    </tbody>

									</table>

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