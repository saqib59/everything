<?php
if (WP_DEBUG) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
$GLOBALS['current_user_id'] = get_current_user_id();
Class Everything_Main {
	public function __construct() {
		add_action('wp_enqueue_scripts', array($this, 'custom_scripts'));

		/*Extra user profile fields*/
		add_action('show_user_profile', array($this, 'extra_user_profile_fields'));
		add_action('edit_user_profile', array($this, 'extra_user_profile_fields'));

		add_action('personal_options_update', array($this, 'save_extra_user_profile_fields'));
		add_action('edit_user_profile_update', array($this, 'save_extra_user_profile_fields'));

	}

	public function custom_scripts() {

		wp_enqueue_script('textarea-script', 'https://cdn.tiny.cloud/1/ov87bzapf74sjg5pw51bqswp39ekt0k9v8kcryz91lik452i/tinymce/5.4.2-90/tinymce.min.js', '', '', true);
		wp_enqueue_script('jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js', '', '', true);
		wp_enqueue_script('table-script', 'https://nightly.datatables.net/js/jquery.dataTables.js', '', '', true);
		wp_enqueue_style('table-cdn-style', 'https://nightly.datatables.net/css/jquery.dataTables.css', '', '', '');
		wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/custom/css/custom-style.css', '', '', 'all');
		wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/custom/js/custom-script.js', '', '', true);
		wp_localize_script('custom-script', 'ajax_script', array('ajax_url' => admin_url('admin-ajax.php')));

	}

	/*Extra user profile fields*/

	public function extra_user_profile_fields($user) {
		?>
            <h3><?php _e("Extra profile information", "blank");?></h3>

            <table class="form-table">
            <tr>
                <th><label for="phone_no"><?php _e("Phone No");?></label></th>
                <td>
                    <input type="text" name="phone_no" id="phone_no" value="<?php echo esc_attr(get_the_author_meta('phone_no', $user->ID)); ?>" class="regular-text" /><br />
                </td>
            </tr>
            <tr>
                <th><label for="provience"><?php _e("provience");?></label></th>
                <td>
                    <input type="text" name="provience" id="provience" value="<?php echo esc_attr(get_the_author_meta('provience', $user->ID)); ?>" class="regular-text" /><br />
                </td>
            </tr>
          <tr>
            <th><label for="city"><?php _e("City");?></label></th>
                <td>
                    <input type="text" name="city" id="city" value="<?php echo esc_attr(get_the_author_meta('city', $user->ID)); ?>" class="regular-text" /><br />
                </td>
            </tr>
            </table>
        <?php }

	public function save_extra_user_profile_fields($user_id) {

		if (!current_user_can('edit_user', $user_id)) {
			return false;
		}
		update_user_meta($user_id, 'phone_no', $_POST['phone_no']);
		update_user_meta($user_id, 'provience', $_POST['provience']);
		update_user_meta($user_id, 'city', $_POST['city']);
	}

	public function response_json($response) {
		header('content-type:application/json');
		echo json_encode($response);
		exit;
	}

	public function image_upload($files) {
//function image_upload($files){
		/*** File/Files can be passed   **/

		// WordPress environment
		require dirname(__FILE__) . '/../../../../wp-load.php';
		$wordpress_upload_dir = wp_upload_dir();
		$lenght_file = count($files['name']); //10
		if ($lenght_file == 0) {

			$response_image = array(
				"message" => "Please Select Images",
				"type" => "failure",
				"error" => true,
			);
			return $response_image;
			exit();

		} elseif ((is_string($files))) {

			//if($lenght_file==1)

			$i = 1;
			$product_image = $files;
			$new_file_path = $wordpress_upload_dir['path'] . '/' . $product_image['name'];
			$new_file_mime = mime_content_type($product_image['tmp_name']);
			while (file_exists($new_file_path)) {
				$i++;
				$new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $product_image['name'];
			}
			// // looks like everything is OK
			if (move_uploaded_file($product_image['tmp_name'], $new_file_path)) {
				$upload_id = wp_insert_attachment(array(
					'guid' => $new_file_path,
					'post_mime_type' => $new_file_mime,
					'post_title' => preg_replace('/\.[^.]+$/', '', $product_image['name']),
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
				add_post_meta($post_id, '_thumbnail_id', $response_image['thumbnail_id']);
			} else {
				$response_image = array(
					"type" => "failure",
					"error" => true,
				);
			}

			return $response_image;
		} elseif ((is_array($files))) {

			// Count total files
			$countfiles = count($files['name']);
			if ($countfiles > 6) {
				$response_image = array(
					"message" => "No more than six images",
					"type" => "failure",
					"error" => true,
				);
				return $response_image;
				exit();
			}

			// To store uploaded files path
			$thumbnail_ids = array();
			for ($index = 0; $index < $countfiles; $index++) {
				$i = 1;
				$product_image = $files;
				$new_file_path = $wordpress_upload_dir['path'] . '/' . $product_image['name'][$index];
				$new_file_mime = mime_content_type($product_image['tmp_name'][$index]);
				while (file_exists($new_file_path)) {
					$i++;
					$new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $product_image['name'][$index];
				}
				// // looks like everything is OK
				if (move_uploaded_file($product_image['tmp_name'][$index], $new_file_path)) {
					$upload_id = wp_insert_attachment(array(
						'guid' => $new_file_path,
						'post_mime_type' => $new_file_mime,
						'post_title' => preg_replace('/\.[^.]+$/', '', $product_image['name'][$index]),
						'post_content' => '',
						'post_status' => 'inherit',
					), $new_file_path);
					// wp_generate_attachment_metadata() won't work if you do not include this file
					require_once ABSPATH . 'wp-admin/includes/image.php';
					// Generate and save the attachment metas into the database
					wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));

					$thumbnail_ids[] = $upload_id;

				}
				/*else{
					                $response_image = array(
					                    "type" => "failure",
					                    "error" => true
					                );
				*/

			}

			$thumbnail_ids_str = implode(",", $thumbnail_ids);

			$response_image = array(
				"thumbnail_id" => $thumbnail_ids_str,
				"type" => "success21",
				"error" => false,
			);
			return $response_image;
		}
	}

}

new Everything_Main();

?>