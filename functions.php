<?php 
function akindoyawp_scripts() {
	//ここに関数の中身を記述
	wp_enqueue_style( 'akindoyawp-style' , get_stylesheet_uri() );
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/menu-jquery.css');
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/searchform.css');
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/contactform7.css');
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/sidebar.css');
}

add_action( 'wp_enqueue_scripts' , 'akindoyawp_scripts' );

function akindoyawp_setup() {
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'akindoyawp-thumbnail');//テーマサムネ呼び出し
	
	add_image_size( 'akindoyawp-hero',1200,630,true );//トップ画像サイズ設定
	
	add_theme_support('menus');//フッター用カスタムメニュー実装
	
//カスタムメニュー登録
	register_nav_menus( array(
		'global' => 'トップページナビ',
	));
	
	register_nav_menus( array( //カスタムメニュー機能の追加
		'footer' => 'フッター', //'ここで指定した引数を、htmlでメニューを表示する際のwp_nav_menuメソッドの連想配列に使用する' => 'メニュー位置の名前を指定'
	) );
	
}

add_action( 'after_setup_theme' , 'akindoyawp_setup' );


//サイドバー追加
function akindoyawp_widgets_init() {
	register_sidebar( array(
		'name'	=>	'サイドバー',
		'id'	=>	'sidebar',
	));
}
add_action( 'widgets_init','akindoyawp_widgets_init');



/*テーマカスタマイザー：実装*/

function akindoyawp_customize_register( $wp_customize ) {
	//ここでパネル、セクション、コントロール、セッティングを追加
//トップコンテンツ　セクションの追加
	$wp_customize->add_section( 'content_section', array(
		'title'		=>'トップコンテンツ設定',
		'priority'	=>0,
		'description'=>'トップページの各リンク先を指定',
	));
	

for($i = 1; $i <= 4; $i++ ) {
//商品コントロール追加
 $wp_customize->add_setting('content_section' .$i, array(
    'type' => 'option',
  ));

	$wp_customize->add_control( 'content_section' .$i, array(
		'label' => 'コンテンツ' .$i,
		'section' => 'content_section', 
		'settings' => 'content_section' .$i, 
		'type' => 'dropdown-pages',
		'description' => "$i つ目のコンテンツのリンク先を指定", 
	));
	

}
	
	
	
	
//お問合せセクション追加
	
$wp_customize->add_section( 'contact_section', array(
		'title'		=>'お問い合わせ',
		'priority'	=>1,
		'description'=>'トップページお問い合わせボタンのリンク指定',
	));
	
$wp_customize->add_setting( 'contact_section' , array(
		'type'	=> 'option',
	));

$wp_customize->add_control( 'contact_section', array(
		'label' => 'お問合せ',
		'section' => 'contact_section', 
		'settings' => 'contact_section' , 
		'type' => 'dropdown-pages',
		'description' => "「お問合せ」固定ページを選択", 
	));

	
//オンラインサイトバナーセクション追加	
$wp_customize->add_section( 'storelink_section', array(
		'title'		=>'オンラインストアリンク',
		'priority'	=>1,
		'description'=>'トップページオンラインストアバナーのリンク指定',
	));
	
$wp_customize->add_setting( 'storelink_section' , array(
		'type'	=> 'option',
	));

$wp_customize->add_control( 'storelink_section', array(
		'label' => 'オンラインストアリンク',
		'section' => 'storelink_section', 
		'settings' => 'storelink_section' , 
		'type' => 'url',
		'description' => "オンラインストアのURLを入力", 
	));



}

//アクションフックに登録
add_action( 'customize_register' , 'akindoyawp_customize_register' );




