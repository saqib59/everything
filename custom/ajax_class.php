<?php
Class Everything_Ajax extends Everything_Main {

	public function __construct() {
		/*update profile*/
		add_action('wp_ajax_update_profile', array($this, 'update_profile'));
		add_action('wp_ajax_nopriv_update_profile', array($this, 'update_profile'));
		/*update profile*/
		add_action('wp_ajax_update_pswd', array($this, 'update_pswd'));
		add_action('wp_ajax_nopriv_update_pswd', array($this, 'update_pswd'));
		/*add service*/
		add_action('wp_ajax_add_service_as_product', array($this, 'add_service_as_product'));
		add_action('wp_ajax_nopriv_add_service_as_product', array($this, 'add_service_as_product'));

	}

/**************** Update Profile ****************/

	public function update_profile() {

		$user_id = $_POST['user_id'];
		$user = get_user_by('ID', $user_id);

		if (!empty($_FILES['user_pic']['name'])) {

			require dirname(__FILE__) . '/../../../../wp-load.php';
			$wordpress_upload_dir = wp_upload_dir();
			$i = 1;
			$user_pic = $_FILES['user_pic'];
			$user_pic_name = $user_pic['name'];
			$user_pic_name = preg_replace('/\s+/', '', $user_pic_name);
			$new_file_path = $wordpress_upload_dir['path'] . '/' . $user_pic_name;
			$new_file_mime = mime_content_type($user_pic['tmp_name']);

			if (move_uploaded_file($user_pic['tmp_name'], $new_file_path)) {

				$upload_id = wp_insert_attachment(array(
					'guid' => $new_file_path,
					'post_mime_type' => $new_file_mime,
					'post_title' => preg_replace('/\.[^.]+$/', '', $user_pic_name),
					'post_content' => '',
					'post_status' => 'inherit',
				), $new_file_path);

				// wp_generate_attachment_metadata() won't work if you do not include this file
				require_once ABSPATH . 'wp-admin/includes/image.php';

				// Generate and save the attachment metas into the database
				wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));

				// Show the uploaded file in browser
				// wp_redirect( $wordpress_upload_dir['url'] . '/' . basename( $new_file_path ) );

				$response_image = array(
					"thumbnail_id" => $upload_id,
					"type" => "success",
					"error" => false,
				);
			} else {
				$response_image = array(
					"type" => "failure",
					"test" => $user_pic['tmp_name'],
					"error" => true,
				);
			}
		} else {
			$response_image = array(
				"type" => "failure",
				"error" => true,
			);
		}

		if ($user) {

			$args = array(
				'ID' => $user_id,
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
			);
			wp_update_user($args);

			if ($response_image['error'] == false && !empty($user_pic)) {
				update_user_meta($user_id, '_thumbnail_id', $response_image['thumbnail_id']);
			}
			update_user_meta($user_id, 'phone_no', $_POST['phone']);
			update_user_meta($user_id, 'provience', $_POST['provience']);
			update_user_meta($user_id, 'city', $_POST['city']);
			if (!empty($user_pic)) {update_user_meta($user_id, 'user_pic', $user_pic['name']);}
			$err['message'] = "Profile Updated";
			$err['status'] = true;
			return $this->response_json($err);

		} else {
			$err['message'] = "Please enter your account password to continue";
			$err['status'] = false;
			return $this->response_json($err);
		}
	}

/**************** Update Profile ****************/

/**************** Update Profile Paswword ****************/

	function update_pswd() {
		$user_id = get_current_user_id();
		$user = get_user_by('ID', $user_id);
		$old_password = $_POST['current_pass'];
		$new_password = $_POST['confirm_new_pass'];

		if (wp_check_password($old_password, $user->data->user_pass, $user->ID)) {
			wp_set_password($new_password, $user_id);
			$err['message'] = "Password Updated";
			$err['status'] = true;
			return $this->response_json($err);
		} else {
			$err['message'] = "Please enter your current password";
			$err['status'] = false;
			return $this->response_json($err);
		}

	}

	function add_service_as_product() {
		global $current_user_id;
		$product_title = $_POST['product_title'];
		$prod_desc = $_POST['prod_desc'];
		if ($current_user_id != 0) {
			$product = array(
				'post_author' => $current_user_id,
				'post_content' => $prod_desc,
				'post_status' => "draft",
				'post_title' => $product_title,
				'post_type' => "product",
			);

			$product_image = $_FILES['gallery_images'];

			//$newccAddress = implode(",",$product_image);
			$product_image_response = $this->image_upload($product_image);

			if ($product_image_response['error'] == false) {
				$post_id = wp_insert_post($product);
				$ids = $product_image_response['thumbnail_id'];
				$response_images = explode(",", $ids);
				$i = 0;
				foreach ($response_images as $key => $value) {
					if ($key == 0) {
						add_post_meta($post_id, '_thumbnail_id', $value);
					} else {
						$image_id .= $value . ",";
						update_post_meta($post_id, '_product_image_gallery', $image_id);
					}
					$i++;
				}
				wp_set_object_terms($post_id, 'simple', 'product_type');

				// update_post_meta($post_id, 'bedrooms', $_POST['bedrooms']);
				// update_post_meta($post_id, 'bathrooms', $_POST['bathrooms']);
				// update_post_meta($post_id, 'area_covered', $_POST['area_covered']);
				// update_post_meta($post_id, 'sell_rent', $_POST['sell_rent']);
				// update_post_meta($post_id, 'furnished', $_POST['furnished']);
				// update_post_meta($post_id, 'price', $_POST['price']);
				// update_post_meta($post_id, 'zipcode', $_POST['zipcode']);
				// update_post_meta($post_id, 'start_date', $_POST['start_date']);
				// update_post_meta($post_id, 'start_time', $_POST['start_time']);
				// update_post_meta($post_id, 'close_date', $_POST['close_date']);
				// update_post_meta($post_id, 'close_time', $_POST['close_time']);
				// update_post_meta($post_id, 'description', $_POST['description']);
				// update_post_meta($post_id, 'address', $_POST['address']);
				// update_post_meta($post_id, 'author_id', $_POST['author_id']);
				// update_post_meta($post_id, 'author_name', $_POST['author_name']);
				// update_post_meta($post_id, 'card_no', $_POST['card_no']);
				// update_post_meta($post_id, 'exp_date', $_POST['exp_date']);
				// update_post_meta($post_id, 'cvv', $_POST['cvv']);
				// update_post_meta($post_id, 'zip_code_card', $_POST['zip_code_card']);

				$response = array(
					"message" => "Service Added Successfully",
					"status" => true,

				);
			}

		} else {
			$response = array(
				"message" => "You are not logged in",
				"status" => false,
			);
		}
		return $this->response_json($response);

	}

/**************** Update Profile Paswword ****************/

}

new Everything_Ajax();
