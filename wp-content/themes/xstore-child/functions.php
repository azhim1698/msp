<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 1001 );
function theme_enqueue_styles() {
	if (function_exists('etheme_child_styles')){
		etheme_child_styles();
	}
}
//add_action('woocommerce_after_customer_login_form', 'custom_register_button');
//function custom_register_button() {
//    if (!is_user_logged_in()) {
//        echo '<p class="custom-register-link" style="text-align: center; margin-top: 15px;">Belum punya akun? <a class="button" href="' . //esc_url( home_url('/my-account/?action=register') ) . '">Daftar di sini</a></p>';
//    }
//}
