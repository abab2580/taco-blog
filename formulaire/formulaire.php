<?php
/**
* Plugin Name:Formulaire
* Description: plugging of form
* Version: 0.1
* Author: TWOP
* Author URI: tacotroc.com
*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Creating the add to menu function
function add_Menu()
{
  $page = 'formulaire';
  $menu = 'formulaire';
  $capability = 'edit_pages';
  $slug = 'formulaire';
  $function =  'form_Car';
  $icon = '';
  $position = 80;
  if(is_admin()){
    wp_enqueue_style('mastercss',plugin_dir_url( __FILE__ ).'views/Css/mastercss.css');
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway', false );
    add_menu_page($page, $menu, $capability, $slug, $function, $icon, $position);
  }
}
function form_Car()
{
  // require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Country.php');
  wp_enqueue_script('jqueryAlternatif', 'https://code.jquery.com/jquery-3.4.1.min.js');
  wp_enqueue_style('AdminCarcss',plugin_dir_url( __FILE__ ).'views/Css/AdminCar.css');
  wp_enqueue_script('AdminCar',plugin_dir_url( __FILE__ ).'views/Js/AdminCar.js');
  wp_localize_script('AdminCar','ajaxurl',admin_url("admin-ajax.php"));
  require_once ('views/AdminPhpHtml/AdminCar.html');
  wp_enqueue_script('Masterjs',plugin_dir_url( __FILE__ ).'views/Js/masterjs.js');
}
add_action("admin_menu", "add_Menu", 10);
function getAll()
{
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Car.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Brand.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Model.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Country.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Color.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Version.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Type.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Cylinder.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Vintage.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Owner.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Museum.php');
  require_once('/home/tacotrocrv/www/wp-content/plugins/formulaire/entity/twp_Club.php');
  $arr = array(
    'Immatriculation' => twp_Car::getAllCar(),
    'Marque' => twp_Brand::getAllBrand(),
    'Model' => twp_Model::getAllModel(),
    'Pays' => twp_Country::getAllCountry(),
    'Couleur' => twp_Color::getAllColor(),
    'Version' => twp_Version::getAllVersion(),
    'Type' => twp_Type::getAllType(),
    'Cylindrée' => twp_Cylinder::getAllCylinder(),
    'Annee' => twp_Vintage::getAllVintage(),
    'Propriétaire' => twp_Owner::getAllOwnerName(),
    'Musée' => twp_Museum::getAllMuseum(),
    'Club' => twp_Club::getAllClub()
  );
  echo json_encode($arr);
  die();
}
add_action("wp_ajax_getAll","getAll");
add_action("wp_ajax_nopriv_getAll","getAll");
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_brand()
{
  $parent_slug ='formulaire';
  $page_title ='Add Brand';
  $menu_title ='Gestion Marque';
  $capability ='edit_pages';
  $menu_slug ='add_brand';
  $function ='form_brand';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_brand()
{
  require_once ('views/AdminPhpHtml/addBrand.php');
}
add_action('admin_menu','add_submenu_brand',11);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_model()
{
  $parent_slug ='formulaire';
  $page_title ='Add Model';
  $menu_title ='Gestion Model';
  $capability ='edit_pages';
  $menu_slug ='add_model';
  $function ='form_Model';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Model()
{
  require_once ('views/AdminPhpHtml/addModel.php');
}
add_action('admin_menu','add_submenu_model',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_country()
{
  $parent_slug ='formulaire';
  $page_title ='Add Country';
  $menu_title ='Gestion Country';
  $capability ='edit_pages';
  $menu_slug ='add_country';
  $function ='form_Country';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Country()
{
  require_once ('views/AdminPhpHtml/addCountry.php');
}
add_action('admin_menu','add_submenu_country',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_color()
{
  $parent_slug ='formulaire';
  $page_title ='Add Color';
  $menu_title ='Gestion Couleur';
  $capability ='edit_pages';
  $menu_slug ='add_color';
  $function ='form_Color';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Color()
{
  require_once ('views/AdminPhpHtml/addColor.php');
}
add_action('admin_menu','add_submenu_color',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_version()
{
  $parent_slug ='formulaire';
  $page_title ='Add Version';
  $menu_title ='Gestion Version';
  $capability ='edit_pages';
  $menu_slug ='add_version';
  $function ='form_Version';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Version()
{
  require_once ('views/AdminPhpHtml/addVersion.php');
}
add_action('admin_menu','add_submenu_version',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_type()
{
  $parent_slug ='formulaire';
  $page_title ='Add Type';
  $menu_title ='Gestion Type';
  $capability ='edit_pages';
  $menu_slug ='add_type';
  $function ='form_Type';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Type()
{
  require_once ('views/AdminPhpHtml/addType.php');
}
add_action('admin_menu','add_submenu_type',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_cylinder()
{
  $parent_slug ='formulaire';
  $page_title ='Add Cylinder';
  $menu_title ='Gestion Cylindrée';
  $capability ='edit_pages';
  $menu_slug ='add_cylinder';
  $function ='form_Cylinder';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Cylinder()
{
  require_once ('views/AdminPhpHtml/addCylinder.php');
}
add_action('admin_menu','add_submenu_cylinder',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_vintage()
{
  $parent_slug ='formulaire';
  $page_title ='Add Vintage';
  $menu_title ='Gestion Vintage';
  $capability ='edit_pages';
  $menu_slug ='add_vintage';
  $function ='form_Vintage';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Vintage()
{
  require_once ('views/AdminPhpHtml/addVintage.php');
}
add_action('admin_menu','add_submenu_vintage',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_owner()
{
  $parent_slug ='formulaire';
  $page_title ='Add Owner';
  $menu_title ='Gestion Propriétaire';
  $capability ='edit_pages';
  $menu_slug ='add_owner';
  $function ='form_Owner';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Owner()
{
  require_once ('views/AdminPhpHtml/addOwner.php');
}
add_action('admin_menu','add_submenu_owner',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_museum()
{
  $parent_slug ='formulaire';
  $page_title ='Add Museum';
  $menu_title ='Gestion Musée';
  $capability ='edit_pages';
  $menu_slug ='add_museum';
  $function ='form_Museum';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Museum()
{
  require_once ('views/AdminPhpHtml/addMuseum.php');
}
add_action('admin_menu','add_submenu_museum',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_submenu_club()
{
  $parent_slug ='formulaire';
  $page_title ='Add Club';
  $menu_title ='Gestion Club';
  $capability ='edit_pages';
  $menu_slug ='add_club';
  $function ='form_Club';
  add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug,$function);
}
function form_Club()
{
  require_once ('views/AdminPhpHtml/addClub.php');
}
add_action('admin_menu','add_submenu_club',12);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function add_shortcode_registration()
{
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway', false );
  wp_enqueue_style('mastercss',plugin_dir_url( __FILE__ ).'views/Css/mastercss.css');
  wp_enqueue_script('AdminCar',plugin_dir_url( __FILE__ ).'views/Js/masterjs.js');
  require('views/Html/Registration.php');
}
add_shortcode('form_add_registration','add_shortcode_registration');


function add_shortcode_login()
{
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway', false );
  wp_enqueue_style('mastercss',plugin_dir_url( __FILE__ ).'views/Css/mastercss.css');
  wp_enqueue_script('AdminCar',plugin_dir_url( __FILE__ ).'views/Js/masterjs.js');
  require('views/Html/Login.php');
}
add_shortcode('form_add_login','add_shortcode_login');


function add_shortcode_hello()
{
  require('views/Html/Hello.php');
}
add_shortcode('hello_session','add_shortcode_hello');


function add_shortcode_logout()
{
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway', false );
  wp_enqueue_style('mastercss',plugin_dir_url( __FILE__ ).'views/Css/mastercss.css');
  wp_enqueue_script('AdminCar',plugin_dir_url( __FILE__ ).'views/Js/masterjs.js');
  require('views/Html/Logout.php');
}
add_shortcode('logout','add_shortcode_logout');


function add_shortcode_cookie()
{
  require('views/Html/Cookie.php');
}
add_shortcode('cookie','add_shortcode_cookie');


function monprefixe_session_start()
{
  if (! session_id())
  {
    @session_start();
  }
}
add_action( 'init', 'monprefixe_session_start', 1 );
