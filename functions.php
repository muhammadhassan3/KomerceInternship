<?php

function themelintang_theme_support()
{
	add_theme_support('custom-logo', array(
		"height" => 50
	));
	add_theme_support('post-thumbnails', array('post', 'page'));
}

add_action('after_setup_theme', 'themelintang_theme_support');

function theme_initScript()
{
	$version = wp_get_theme()->get("Version");
	wp_enqueue_script("main-css", get_template_directory_uri() . '/main.js', array(), $version, true);
}

function lintang_menus()
{
	$location = array(
		'primary' => "Desktop Primary Left Sidebar",
		'footer'  => "Footer Menus Items"
	);

	register_nav_menus($location);
}

function enable_threaded_comments()
{
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'enable_threaded_comments');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

function initStyle()
{
	$version = wp_get_theme()->get("Version");
	wp_enqueue_style("custom-css", get_template_directory_uri() . '/style.css', array(), $version, "all");
}

$args         = array(
	'numberposts' => 3,
	'post_type'   => 'post',
	'post_status' => 'publish'
);
$custom_posts = get_posts($args);

add_action('init', 'lintang_menus');
add_action("wp_enqueue_scripts", 'initStyle');
add_action('wp_enqueue_scripts', 'theme_initScript');


//menambahkan class css dalam fungsi the_content();
function add_blog_post_paragraph_class($content)
{
	// Menambahkan class 'blog-post-paragraph' ke setiap tag <p> di dalam konten
	$content = preg_replace('/<p([^>]+)?>/', '<p$1 class="blog-post-paragraph">', $content);
	return $content;
}
add_filter('the_content', 'add_blog_post_paragraph_class');

// CRUD WORDPRESS TANPA PLUGIN
// tabel divisi dan jabatan

// menu dan submenu divisi & jabatan
function custom_data_menu()
{
	$page_title = 'List Divisi';
	$menu_title = 'Daftar Divisi';
	$capability = 'manage_options';
	$menu_slug  = 'users.php';
	$function   = 'custom_data_page';
	$icon_url   = 'dashicons-admin-generic';
	$position   = 25;

	add_submenu_page($menu_slug, $page_title, $menu_title, $capability, "divisi-management", $function);

	add_submenu_page($menu_slug, 'Add New Divisi', 'Add New', $capability, 'divisi-add', 'custom_data_add_page');
	add_submenu_page($menu_slug, 'Edit Divisi', 'Edit', $capability, 'divisi-edit', 'custom_data_edit_page');
}

add_action('admin_menu', 'custom_data_menu');

function custom_data_menu_jabatan()
{
	$page_title = 'List Jabatan';
	$menu_title = 'List Jabatan';
	$capability = 'manage_options';
	$menu_slug  = 'users.php';
	$function   = 'custom_data_page_jabatan';


	add_submenu_page($menu_slug, $page_title, $menu_title, $capability, "jabatan-management", $function);
	add_submenu_page($menu_slug, 'Add New Jabatan', 'Add New Jabatan', $capability, 'jabatan-add', 'custom_data_add_page_jabatan');
	add_submenu_page($menu_slug, 'Edit Jabatan', 'Edit', $capability, 'jabatan-edit', 'custom_data_edit_page_jabatan');
}

add_action('admin_menu', 'custom_data_menu_jabatan');

// menampilkan data divisi & jabatan
function custom_data_page()
{
	global $wpdb;
	$table_name = $wpdb->prefix . 'divisi';
	$results    = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

	echo '<div class="wrap">';
	echo '<h1 class="wp-heading-inline">Divisi Management</h1>';
	echo '<a href="' . admin_url('admin.php?page=divisi-add') . '" class="page-title-action">Add New</a>';
	echo '<hr class="wp-header-end">';

	echo '<table class="wp-list-table widefat fixed striped">';
	echo '<thead><tr><th>ID</th><th>Nama Divisi</th><th>Created At</th><th>Updated At</th><th>Actions</th></tr></thead>';
	echo '<tbody>';

	foreach ($results as $row) {
		echo '<tr>';
		echo '<td>' . esc_html($row->id) . '</td>';
		echo '<td>' . esc_html($row->nama_divisi) . '</td>';
		echo '<td>' . esc_html($row->created_at) . '</td>';
		echo '<td>' . esc_html($row->updated_at) . '</td>';
		echo '<td><a href="' . admin_url('admin.php?page=divisi-edit&id=' . $row->id) . '">Edit</a> | <a href="#" class="delete-divisi-link" data-id="' . $row->id . '">Delete</a></td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}

function custom_data_page_jabatan()
{
	global $wpdb;
	$table_name = $wpdb->prefix . 'jabatan';
	$results    = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

	echo '<div class="wrap">';
	echo '<h1 class="wp-heading-inline">Jabatan Management</h1>';
	echo '<a href="' . admin_url('admin.php?page=jabatan-add') . '" class="page-title-action">Add New</a>';
	echo '<hr class="wp-header-end">';

	echo '<table class="wp-list-table widefat fixed striped">';
	echo '<thead><tr><th>ID</th><th>Nama Jabatan</th><th>Created At</th><th>Updated At</th><th>Actions</th></tr></thead>';
	echo '<tbody>';

	foreach ($results as $row) {
		echo '<tr>';
		echo '<td>' . esc_html($row->id) . '</td>';
		echo '<td>' . esc_html($row->nama_jabatan) . '</td>';
		echo '<td>' . esc_html($row->created_at) . '</td>';
		echo '<td>' . esc_html($row->updated_at) . '</td>';
		echo '<td><a href="' . admin_url('admin.php?page=jabatan-edit&id=' . $row->id) . '">Edit</a> | <a href="#" class="delete-jabatan-link" data-id="' . $row->id . '">Delete</a></td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}

// halaman menambah data divisi dan jabatan
function custom_data_add_page()
{
	global $wpdb;
	$table_name = $wpdb->prefix . 'divisi';

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['custom_data_nonce']) && wp_verify_nonce($_POST['custom_data_nonce'], 'custom_data_add')) {
		$nama_divisi = sanitize_text_field($_POST['nama_divisi']);
		$created_at  = current_time('mysql');
		$updated_at  = current_time('mysql');

		$wpdb->insert($table_name, compact('nama_divisi', 'created_at', 'updated_at'));

		echo '<div class="notice notice-success is-dismissible"><p>Divisi added successfully!</p></div>';
		echo '<script>window.location.href="' . admin_url('admin.php?page=divisi-management') . '";</script>';
	}

	echo '<div class="wrap">';
	echo '<h1 class="wp-heading-inline">Add New Divisi</h1>';
	echo '<hr class="wp-header-end">';

	echo '<form method="post">';
	echo '<table class="form-table">';
	echo '<tr>';
	echo '<th scope="row"><label for="nama_divisi">Nama Divisi</label></th>';
	echo '<td><input name="nama_divisi" type="text" id="nama_divisi" class="regular-text" required></td>';
	echo '</tr>';
	echo '</table>';

	echo '<input type="hidden" name="custom_data_nonce" value="' . wp_create_nonce('custom_data_add') . '">';
	echo '<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Add Divisi"></p>';
	echo '</form>';
	echo '</div>';
}

function custom_data_add_page_jabatan()
{
	global $wpdb;
	$table_jabatan = $wpdb->prefix . 'jabatan';
	$table_divisi  = $wpdb->prefix . 'divisi';
	$divisi_list   = $wpdb->get_results("SELECT id, nama_divisi FROM $table_divisi ORDER BY nama_divisi ASC");
	if (isset($user_id->id)) {
		$current_divisi = get_user_meta($user_id->id, 'divisi', true);
	}

	echo '<table class="form-table">';
	echo '</table>';
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['custom_data_nonce']) && wp_verify_nonce($_POST['custom_data_nonce'], 'custom_data_add')) {
		$id_divisi = sanitize_text_field($_POST['divisi']);
		$nama_jabatan = sanitize_text_field($_POST['nama_jabatan']);
		$created_at   = current_time('mysql');
		$updated_at   = current_time('mysql');

		$wpdb->insert($table_jabatan, compact('id_divisi', 'nama_jabatan', 'created_at', 'updated_at'));

		echo '<div class="notice notice-success is-dismissible"><p>Jabatan added successfully!</p></div>';
		echo '<script>window.location.href="' . admin_url('admin.php?page=jabatan-management') . '";</script>';
	}

	echo '<div class="wrap">';
	echo '<h1 class="wp-heading-inline">Add New Jabatan</h1>';
	echo '<hr class="wp-header-end">';

	echo '<form method="post">';
	echo '<table class="form-table">';
	echo '<tr>';
	echo '<th scope="row"><label for="nama_jabatan">Nama Jabatan</label></th>';
	echo '<td><input name="nama_jabatan" type="text" id="nama_jabatan" class="regular-text" required></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th><label for="divisi">Divisi</label></th>';
	echo '<td>';
	echo '<select name="divisi" id="divisi">';
	echo '<option value="">Pilih Divisi</option>';
	foreach ($divisi_list as $divisi) {
		$selected = '';
		if ($current_divisi == $divisi->id) {
			$selected = ' selected ';
		}
		echo '<option value="' . esc_attr($divisi->id) . '"' . $selected . '>' . esc_html($divisi->nama_divisi) . '</option>';
	}

	echo '</select>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';

	echo '<input type="hidden" name="custom_data_nonce" value="' . wp_create_nonce('custom_data_add') . '">';
	echo '<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Add Jabatan"></p>';
	echo '</form>';
	echo '</div>';
}

// halaman edit data
function custom_data_edit_page()
{
	global $wpdb;
	$table_name = $wpdb->prefix . 'divisi';
	$id         = isset($_GET['id']) ? intval($_GET['id']) : 0;
	$row        = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $id));

	if (! $row) {
		echo '<div class="notice notice-error is-dismissible"><p>Invalid Divisi ID!</p></div>';

		return;
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['custom_data_nonce']) && wp_verify_nonce($_POST['custom_data_nonce'], 'custom_data_edit')) {
		$nama_divisi = sanitize_text_field($_POST['nama_divisi']);
		$updated_at  = current_time('mysql');

		$wpdb->update($table_name, compact('nama_divisi', 'updated_at'), array('id' => $id));

		echo '<div class="notice notice-success is-dismissible"><p>Divisi updated successfully!</p></div>';
		echo '<script>window.location.href="' . admin_url('admin.php?page=divisi-management') . '";</script>';
	}

	echo '<div class="wrap">';
	echo '<h1 class="wp-heading-inline">Edit Divisi</h1>';
	echo '<hr class="wp-header-end">';

	echo '<form method="post">';
	echo '<table class="form-table">';
	echo '<tr>';
	echo '<th scope="row"><label for="nama_divisi">Nama Divisi</label></th>';
	echo '<td><input name="nama_divisi" type="text" id="nama_divisi" value="' . esc_attr($row->nama_divisi) . '" class="regular-text" required></td>';
	echo '</tr>';
	echo '</table>';

	echo '<input type="hidden" name="custom_data_nonce" value="' . wp_create_nonce('custom_data_edit') . '">';
	echo '<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Update"></p>';
	echo '</form>';
	echo '</div>';
}

function custom_data_edit_page_jabatan()
{
	global $wpdb;
	$table_jabatan = $wpdb->prefix . 'jabatan';
	$table_divisi  = $wpdb->prefix . 'divisi';
	$id            = isset($_GET['id']) ? intval($_GET['id']) : 0;

	$row = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_jabatan WHERE id = %d", $id));

	$divisi_list = $wpdb->get_results("SELECT id, nama_divisi FROM $table_divisi ORDER BY nama_divisi ASC");

	if (! $row) {
		echo '<div class="notice notice-error is-dismissible"><p>ID Jabatan tidak valid!</p></div>';
		return;
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['custom_data_nonce']) && wp_verify_nonce($_POST['custom_data_nonce'], 'custom_data_edit')) {
		$id_divisi    = sanitize_text_field($_POST['divisi']);
		$nama_jabatan = sanitize_text_field($_POST['nama_jabatan']);
		$updated_at   = current_time('mysql');

		$wpdb->update($table_jabatan, compact('id_divisi', 'nama_jabatan', 'updated_at'), array('id' => $id));

		echo '<div class="notice notice-success is-dismissible"><p>Jabatan berhasil diperbarui!</p></div>';
		echo '<script>window.location.href="' . admin_url('admin.php?page=jabatan-management') . '";</script>';
	}

	// Menampilkan form edit
	echo '<div class="wrap">';
	echo '<h1 class="wp-heading-inline">Edit Jabatan</h1>';
	echo '<hr class="wp-header-end">';

	echo '<form method="post">';
	echo '<table class="form-table">';
	echo '<tr>';
	echo '<th scope="row"><label for="nama_jabatan">Nama Jabatan</label></th>';
	echo '<td><input name="nama_jabatan" type="text" id="nama_jabatan" value="' . esc_attr($row->nama_jabatan) . '" class="regular-text" required></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th><label for="divisi">Divisi</label></th>';
	echo '<td>';
	echo '<select name="divisi" id="divisi">';
	echo '<option value="">Pilih Divisi</option>';
	foreach ($divisi_list as $divisi) {
		$selected = '';
		if ($row->id_divisi == $divisi->id) {
			$selected = ' selected ';
		}
		echo '<option value="' . esc_attr($divisi->id) . '"' . $selected . '>' . esc_html($divisi->nama_divisi) . '</option>';
	}
	echo '</select>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';

	echo '<input type="hidden" name="custom_data_nonce" value="' . wp_create_nonce('custom_data_edit') . '">';
	echo '<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Update"></p>';
	echo '</form>';
	echo '</div>';
}


// menghapus data divisi dan jabatan
// function admin_scripts()
// {
// 	wp_enqueue_script('main-script', get_template_directory_uri() . '/main.js', array('jquery'), false, true);
// 	wp_localize_script('main-script', 'divisiData', array(
// 		'ajaxurl'      => admin_url('admin-ajax.php'),
// 		'delete_nonce' => wp_create_nonce('delete_divisi_nonce')
// 	));
// 	wp_localize_script('main-script', 'jabatanData', array(
// 		'ajaxurl'      => admin_url('admin-ajax.php'),
// 		'delete_nonce' => wp_create_nonce('delete_jabatan_nonce')
// 	));
// }
// add_action('admin_enqueue_scripts', 'admin_scripts');

// menghapus data divisi dan jabatan & filter jabatan by divisi
function admin_scripts()
{
	wp_enqueue_script('main-script', get_template_directory_uri() . '/main.js', array('jquery'), false, true);
	wp_localize_script('main-script', 'divisiData', array(
		'ajaxurl'      => admin_url('admin-ajax.php'),
		'delete_nonce' => wp_create_nonce('delete_divisi_nonce')
	));
	wp_localize_script('main-script', 'jabatanData', array(
		'ajaxurl'      => admin_url('admin-ajax.php'),
		'delete_nonce' => wp_create_nonce('delete_jabatan_nonce')
	));
	wp_localize_script('main-script', 'filterData', array(
		'ajaxurl'      => admin_url('admin-ajax.php'),
		'filter_nonce' => wp_create_nonce('filter_jabatan_nonce')
	));
}

add_action('admin_enqueue_scripts', 'admin_scripts');

function delete_divisi()
{
	check_ajax_referer('delete_divisi_nonce', 'nonce');
	global $wpdb;
	$table_name = $wpdb->prefix . 'divisi';
	$id         = isset($_POST['id']) ? intval($_POST['id']) : 0;

	if ($id > 0) {
		$result = $wpdb->delete($table_name, array('id' => $id));
		if ($result !== false) {
			wp_send_json_success('Divisi deleted successfully.');
		} else {
			wp_send_json_error('Failed to delete divisi.');
		}
	} else {
		wp_send_json_error('Invalid Divisi ID.');
	}
}

add_action('wp_ajax_delete_divisi', 'delete_divisi');

function delete_jabatan()
{
	check_ajax_referer('delete_jabatan_nonce', 'nonce');
	global $wpdb;
	$table_name = $wpdb->prefix . 'jabatan';
	$id         = isset($_POST['id']) ? intval($_POST['id']) : 0;

	if ($id > 0) {
		$result = $wpdb->delete($table_name, array('id' => $id));
		if ($result !== false) {
			wp_send_json_success('Jabatan deleted successfully.');
		} else {
			wp_send_json_error('Failed to delete jabatan.');
		}
	} else {
		wp_send_json_error('Invalid Jabatan ID.');
	}
}

add_action('wp_ajax_delete_jabatan', 'delete_jabatan');

//Create table
function createTables()
{
	global $wpdb;
	$prefix       = $wpdb->prefix;
	$jabatan_name = $prefix . "jabatan";
	$divisi_name  = $prefix . "divisi";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	maybe_create_table(
		$divisi_name,
		"CREATE TABLE " . $divisi_name . " (id int NOT NULL AUTO_INCREMENT primary key, nama_divisi varchar(255) not null, created_at datetime not null, updated_at datetime not null)"
	);
	maybe_create_table(
		$jabatan_name,
		"CREATE TABLE " . $jabatan_name . " (id int NOT NULL AUTO_INCREMENT primary key, nama_jabatan varchar(255) not null, id_divisi int not null, created_at datetime not null, updated_at datetime not null, foreign key (id_divisi) references " . $divisi_name . "(id) on update cascade on delete cascade)"
	);
}

add_action("after_switch_theme", "createTables");

// field divisi di users
function add_divisi_field_to_user_form($user_id)
{
	global $wpdb;
	$table_name     = $wpdb->prefix . 'divisi';
	$divisi_list    = $wpdb->get_results("SELECT id, nama_divisi FROM $table_name ORDER BY nama_divisi ASC");
	if (isset($user_id->id)) {
		$current_divisi = get_user_meta($user_id->id, 'divisi', true);
	}

	echo '<table class="form-table">';
	echo '<tr>';
	echo '<th><label for="divisi">Divisi</label></th>';
	echo '<td>';
	echo '<select name="divisi" id="divisi">';
	echo '<option value="">Pilih Divisi</option>';
	foreach ($divisi_list as $divisi) {
		$selected = '';
		if ($current_divisi == $divisi->id) {
			$selected = ' selected ';
		}
		echo '<option value="' . esc_attr($divisi->id) . '"' . $selected . '>' . esc_html($divisi->nama_divisi) . '</option>';
	}

	echo '</select>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
}

add_action('user_new_form', 'add_divisi_field_to_user_form');
add_action('show_user_profile', 'add_divisi_field_to_user_form');
add_action('edit_user_profile', 'add_divisi_field_to_user_form');

// function add_jabatan_field_to_user_form( $user_id ) {
// 	global $wpdb;
// 	$table_name      = $wpdb->prefix . 'jabatan';
// 	$jabatan_list    = $wpdb->get_results( "SELECT id, nama_jabatan FROM $table_name ORDER BY nama_jabatan ASC" );
// 	if(isset($user_id->id)){
// 		$current_jabatan = get_user_meta( $user_id->id, 'jabatan', true );
// 	}

// 	echo '<table class="form-table">';
// 	echo '<tr>';
// 	echo '<th><label for="jabatan">Jabatan</label></th>';
// 	echo '<td>';
// 	echo '<select name="jabatan" id="jabatan">';
// 	echo '<option value="">Pilih Jabatan</option>';

// 	foreach ( $jabatan_list as $jabatan ) {
// 		$selected = '';
// 		if ( $current_jabatan == $jabatan->id ) {
// 			$selected = ' selected ';
// 		}
// 		echo '<option value="' . esc_attr( $jabatan->id ) . '"'.$selected.' >' . esc_html( $jabatan->nama_jabatan ) . '</option>';
// 	}
// 	echo '</select>';
// 	echo '</td>';
// 	echo '</tr>';
// 	echo '</table>';
// }

// add_action( 'user_new_form', 'add_jabatan_field_to_user_form' );
// add_action( 'show_user_profile', 'add_jabatan_field_to_user_form' );
// add_action( 'edit_user_profile', 'add_jabatan_field_to_user_form' );

function add_jabatan_field_to_user_form($user_id)
{
	global $wpdb;
	$table_name     = $wpdb->prefix . 'jabatan';
	$current_jabatan = isset($user_id->id) ? get_user_meta($user_id->id, 'jabatan', true) : '';

	echo '<table class="form-table">';
	echo '<tr>';
	echo '<th><label for="jabatan">Jabatan</label></th>';
	echo '<td>';
	echo '<select name="jabatan" id="jabatan">';
	echo '<option value="">Pilih Jabatan</option>';
	if ($current_jabatan) {
		$jabatan = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $current_jabatan));
		if ($jabatan) {
			echo '<option value="' . esc_attr($jabatan->id) . '" selected>' . esc_html($jabatan->nama_jabatan) . '</option>';
		}
	}
	echo '</select>';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
}
add_action('user_new_form', 'add_jabatan_field_to_user_form');
add_action('show_user_profile', 'add_jabatan_field_to_user_form');
add_action('edit_user_profile', 'add_jabatan_field_to_user_form');

function filter_jabatan_by_divisi()
{
	check_ajax_referer('filter_jabatan_nonce', 'nonce');

	global $wpdb;
	$table_name = $wpdb->prefix . 'jabatan';
	$divisi_id = intval($_POST['divisi_id']);

	if ($divisi_id > 0) {
		$jabatan_list = $wpdb->get_results($wpdb->prepare("SELECT id, nama_jabatan FROM $table_name WHERE id_divisi = %d ORDER BY nama_jabatan ASC", $divisi_id));
		$output = '<option value="">Pilih Jabatan</option>';
		foreach ($jabatan_list as $jabatan) {
			$output .= '<option value="' . esc_attr($jabatan->id) . '">' . esc_html($jabatan->nama_jabatan) . '</option>';
		}
		echo $output;
	} else {
		echo '<option value="">Pilih Jabatan</option>';
	}

	wp_die();
}

add_action('wp_ajax_filter_jabatan_by_divisi', 'filter_jabatan_by_divisi');
add_action('wp_ajax_nopriv_filter_jabatan_by_divisi', 'filter_jabatan_by_divisi');



//Save custom fields
function theme_save_custom_field($user_id)
{

	//	if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'create-user_' . $user_id ) ) {
	//		return;
	//	}
	if (! current_user_can('edit_user', $user_id)) {
		return;
	}
	$check = get_user_meta($user_id, 'divisi');
	if (! empty($check)) {
		update_user_meta($user_id, 'divisi', sanitize_text_field($_POST['divisi']));
	} else {
		add_user_meta($user_id, 'divisi', sanitize_text_field($_POST['divisi']));
	}
	$check = get_user_meta($user_id, 'jabatan');
	if (! empty($check)) {
		update_user_meta($user_id, 'jabatan', sanitize_text_field($_POST['jabatan']));
	} else {
		add_user_meta($user_id, 'jabatan', sanitize_text_field($_POST['jabatan']));
	}
}

add_action('personal_options_update', 'theme_save_custom_field');
add_action('user_register', 'theme_save_custom_field');
add_action('edit_user_profile_update', 'theme_save_custom_field');

function custom_user_menu_admin()
{
	$page_title = "Manajemen User";
	$menu_title = "Manajemen User";
	$capability = 'manage_options';
	$menu_slug = 'users.php';
	$function = 'custom_user_page_admin';
	remove_submenu_page($menu_slug, $menu_slug);
	add_submenu_page($menu_slug, $page_title, $menu_title, $capability, $menu_slug, $function, 0);
	// add_submenu_page($menu_slug, 'Add New Admin', 'Add New Admin', $capability, 'admin-add', 'custom_data_add_page_admin');
	// add_submenu_page($menu_slug, 'Edit Admin', 'Edit', $capability, 'admin-edit', 'custom_data_edit_page_admin');
}
add_action('admin_menu', 'custom_user_menu_admin');

function custom_user_page_admin()
{
	global $wpdb;
	$users_table = $wpdb->prefix . 'users';
	$users_meta  = $wpdb->prefix . 'usermeta';
	$divisi_table = $wpdb->prefix . "divisi";
	$jabatan_table = $wpdb->prefix . 'jabatan';
	$results = $wpdb->get_results("SELECT distinct(u.id), u.user_login, u.user_nicename, u.user_email FROM $users_table u join $users_meta m on u.id = m.user_id ");
	// $results = $wpdb->get_results(" SELECT u.user_login, u.user_nicename, u.user_email, d.nama_divisi, d.nama_jabatan FROM $users_table u LEFT JOIN $users_meta d ON u.ID = d.user_id ORDER BY u.user_login ASC ");
	echo '<div class="wrap">';
	echo '<h1 class="wp-heading-inline">Manajemen User</h1>';
	echo '<a href="' . admin_url('user-new.php') . '" class="page-title-action">Add New</a>';
	echo '<hr class="wp-header-end">';

	echo '<table class="wp-list-table widefat fixed striped">';
	echo '<thead><tr><th>Username</th><th>Name</th><th>Email</th><th>Divisi</th><th>Jabatan</th><th>Actions</th></tr></thead>';
	echo '<tbody>';
	foreach ($results as $row) {
		echo '<tr>';
		echo '<td>' . esc_html($row->user_login) . '</td>';
		echo '<td>' . esc_html($row->user_nicename) . '</td>';
		echo '<td>' . esc_html($row->user_email) . '</td>';
		$divisi = $wpdb->get_results("select d.nama_divisi from $divisi_table d, $users_meta m where m.meta_key='divisi' and m.meta_value = d.id and m.user_id = $row->id");
		$jabatan = $wpdb->get_results("select j.nama_jabatan from $jabatan_table j, $users_meta m where m.meta_key='jabatan' and m.meta_value = j.id and m.user_id = $row->id");
		$divisi_value = '';
		if (!empty($divisi)) {
			$divisi_value = $divisi[0]->nama_divisi;
		}
		$jabatan_value = '';
		if (!empty($divisi)) {
			$jabatan_value = $jabatan[0]->nama_jabatan;
		}
		echo '<td>' . esc_html($divisi_value) . '</td>';
		echo '<td>' . esc_html($jabatan_value) . '</td>';

		$delete_url = add_query_arg(
			array(
				'action' => 'delete',
				'users[]' => $row->id,
			),
			self_admin_url('users.php')
		);

		$delete_url = wp_nonce_url($delete_url, 'bulk-users');
		echo '<td><a href="' . esc_url(
			add_query_arg(
				'wp_http_referer',
				urlencode(wp_unslash($_SERVER['REQUEST_URI'])),
				self_admin_url('user-edit.php?user_id=' . $row->id)
			)
		) .  '">Edit</a> | <a href="' . esc_url($delete_url) . '" class="delete-user-link">Delete</a></td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}
// ======================================CHAIN COMBOBOX===========================