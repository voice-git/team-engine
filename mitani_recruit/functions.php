<?php
// スマートフォン ｜ タブレットPC を判別
function is_mobile(){
	$useragents = array(
	'iPhone', // iPhone
	'iPod', // iPod touch
	'Android.*Mobile', // 1.5+ Android *** Only mobile
	'Windows.*Phone', // *** Windows Phone
	'dream', // Pre 1.5 Android
	'CUPCAKE', // 1.5+ Android
	'blackberry9500', // Storm
	'blackberry9530', // Storm
	'blackberry9520', // Storm v2
	'blackberry9550', // Storm v2
	'blackberry9800', // Torch
	'webOS', // Palm Pre Experimental
	'incognito', // Other iPhone browser
	'webmate' // Other iPhone browser
);
$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//郵便番号住所自動入力
function add_scripts() {
	if(is_page(array("contact","entry"))){
		wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );
	}
}
add_action('wp_print_scripts', 'add_scripts');

//reCAPTCHA
function load_recaptcha_js() {
 if (!(is_page(array('contact','entry')))){
  wp_deregister_script( 'google-recaptcha' );
 }
}
add_action( 'wp_enqueue_scripts', 'load_recaptcha_js',100 );

//本体の更新通知を非表示
add_filter("pre_site_transient_update_core", "__return_null");
//プラグインの更新通知を非表示
add_filter("pre_site_transient_update_plugins", "__return_null");
//テーマの更新通知を非表示
add_filter("pre_site_transient_update_themes", "__return_null");
?>