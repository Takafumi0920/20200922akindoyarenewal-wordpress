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

//管理画面メニューからliタグクラスを入力し、aタグのクラスとして付与する。出典：https://blog.simmon.design/add-any-classes-to-custom-menu-link-in-wordpress/
add_filter( 'walker_nav_menu_start_el', function( $item_output, $item ) {

    $link_classes = '';
    // カスタムメニューのリストに付いているクラスはデフォルトでmenu-itemとcurrent-という文字が含まれているので、
    // それが含まれていないクラス（フォームから追加したクラス）を取得し、link_classesに格納。
    foreach( $item->classes as $class ) {
        if ( false === strpos( $class, 'menu-item' ) && false === strpos( $class, 'current-' ) && '' !== $class ) {
            $link_classes .= $class . ' ';
        }
    }

    // フォームから取得したクラス達（$link_classes）をaタグに追加してreturn。
    if ( '' !== $link_classes ) {
        return str_replace( 'href',  'class="' . $link_classes . '" href', $item_output );
    } else {
        return $item_output;
    }

}, 10, 2 );

// このままだとリストにも同じクラスが付いたままになるので
// menu-itemとcurrent-の文字を含まないクラス（フォームから追加したクラス）をリストから削除します。
add_filter( 'nav_menu_css_class', function( $classes, $item ) {

    foreach( $classes as $i => $class ) {
        if ( false === strpos( $class, 'menu-item' ) && false === strpos( $class, 'current-' ) && '' !== $class ) {
            unset( $classes[$i] );
        }
    }

    return $classes;

}, 10, 2 );

//ヘッダーナビに検索フォームを挿入

add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {
 ob_start();
 get_search_form();
 $searchform = ob_get_contents();
 ob_end_clean();
  $items .= '

' . $searchform . '


';
 return $items;
}


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

/*footer*/

register_nav_menu('footer-left','フッター買う');
register_nav_menu('footer-center','フッター知る');
register_nav_menu('footer-right','フッターヘルプ');


