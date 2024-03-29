<?php

/*
Plugin Name: HTML5 jQuery Audio Player
Plugin URI: http://wordpress.org/extend/plugins/html5-jquery-audio-player/
Description: The trendiest audio player plugin for WordPress. Works on iPhone/iPad and other mobile devices. Insert with shortcode [hmp_player]
Author: Enigma Digital
Version: 1.9.1
Author URI: http://enigmaweb.com.au
*/

//function add script

function hmp_script(){
	wp_enqueue_script('jquery');	
}
add_action( 'wp_enqueue_scripts', 'hmp_script' );

//Database table versions
global $hmp_player_db_table_version;
$hmp_player_db_table_version = "1.9.1";

//Create database tables needed by the DiveBook widget
function hmp_db_create () {
    hmp_create_table_player();
}

//Create dive table
function hmp_create_table_player(){
    //Get the table name with the WP database prefix
    global $wpdb;
    $table_name = $wpdb->prefix . "hmp_playlist";
    global $hmp_player_db_table_version;
    $installed_ver = get_option( "hmp_player_db_table_version" );
     //Check if the table already exists and if the table is up to date, if not create it
    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name
            ||  $installed_ver != $hmp_player_db_table_version ) {
        $sql = "CREATE TABLE " . $table_name . " (
              `id` INT( 9 ) NOT NULL AUTO_INCREMENT PRIMARY KEY,
              `mp3` TEXT NOT NULL,
              `ogg` TEXT NOT NULL,
              `rating` TEXT NOT NULL,
              `title` TEXT NOT NULL,
              `buy` TEXT NOT NULL,
			  `price` TEXT NOT NULL,
			  `cover` TEXT NOT NULL,
			  `duration` VARCHAR( 20 ) NOT NULL,
			  `artist` VARCHAR( 50 ) NOT NULL,
              UNIQUE KEY id (id)
            );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        update_option( "hmp_player_db_table_version", $hmp_player_db_table_version );
}
    //Add database table versions to options
    add_option("hmp_player_db_table_version", $hmp_player_db_table_version);
}

register_activation_hook( __FILE__, 'hmp_db_create' );









add_action( 'admin_menu', 'my_plugin_menu' );




function my_plugin_menu() {
	add_menu_page( 'HTML5 MP3 Player', 'HTML5 Player', 'manage_options', 'hmp-options', 'wp_hmp_options',plugin_dir_url( __FILE__ )."/music-beam.png" );
	add_submenu_page('hmp-options','','','manage_options','hmp-options','wp_hmp_options');
	add_submenu_page('hmp-options','Display Settings','Display Settings','manage_options','display_settings','wp_hmp_options');
	add_submenu_page( 'hmp-options', 'Manage Manage Songs', 'Manage Songs', 'manage_options', 'hmp_palylist', 'wp_hmp_playlist' );
	
}


add_action( 'admin_init', 'register_mysettings' );

function register_mysettings() {
	register_setting( 'baw-settings-group', 'buy_text' );
	register_setting( 'baw-settings-group', 'color' );
	register_setting( 'baw-settings-group', 'showlist' );
	register_setting( 'baw-settings-group', 'showbuy' );
	register_setting( 'baw-settings-group', 'hmp_description' );
	register_setting( 'baw-settings-group', 'currency' );
	register_setting( 'baw-settings-group', 'tracks' );
	register_setting( 'baw-settings-group', 'tcolor' );
}






function wp_hmp_options() {

include 'player/settings.php';

 }



function wp_hmp_playlist(){
		
include('playlist/add_playlist.php');
		
}

function wp_hmp_player(){
	
	
	if(get_option('showbuy')==1){ 
		$bt		=	get_option('buy_text');
	}else{
		$bt	=	'';
	}
	$desc	=	get_option('hmp_description');
	$sb		=	get_option('showbuy');
	$nt		=	get_option('tracks');
	if(empty($nt)){
		$nt		=	1;
	}
	
	$cr		=	get_option('currency');
	$sl		=	get_option('showlist');
	$cl		=	get_option('color');
	/*if(empty($cl)){
		$cl		=	'currentcolor';
	}*/
	$tc		=	get_option('tcolor'); 
	if(empty($tc)){
		$tc		=	'#cccccc';
	}	
	
	if($sb==0){ ?> <style type="text/css">.buy{ display:none !important;} .rating{ right:10px !important;}</style><?php } 
	if(!empty($cl)){ ?><style type="text/css"> .ttw-music-player{ background:<?php echo $cl; ?>; !important;}   </style><?php }
	if(!empty($tc)){ ?><style type="text/css"> .ttw-music-player .tracklist, .ttw-music-player .buy, .ttw-music-player .description, .ttw-music-player .player .title, .ttw-music-player .artist, .ttw-music-player .artist-outer{ color:<?php echo $tc; ?>; !important;}   </style><?php }
	if($tc=='black'){ ?><style type="text/css">.ttw-music-player .player .title, .ttw-music-player .description, .ttw-music-player .tracklist li{ text-shadow:none !important;}</style><?php } 
	if($sl==0){ ?> <style type="text/css"> .tracklist{ display:none !important;}   </style> <?php }
	
	  
	$pluginurl	=	plugin_dir_url( __FILE__ );
?>
	<link href="<?php echo $pluginurl ; ?>includes/css/style.css" type="text/css" rel="stylesheet" media="screen" />
    <script type="text/javascript" src="<?php echo $pluginurl ; ?>includes/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="<?php echo $pluginurl ; ?>includes/ttw-music-player-min.js"></script>
   
     <script type="text/javascript">
	
	
	var myPlaylist = [

<?php  



	global $wpdb;
	$table		=	$wpdb->prefix.'hmp_playlist';	
	$lsql		=	"SELECT * FROM $table";

	$songs 	= 	$wpdb->get_results( $lsql  );
	
	

//$artists		=	array('sajid hussain','tasbeel hussain','omer','ali');

if(!empty($songs)):
foreach($songs as $song): ?>
    {
        mp3:'<?php echo $song->mp3; ?>',
        oga:'<?php echo $song->ogg; ?>',
        title:'<?php echo $song->title; ?>',
        artist:'<?php echo $song->artist; ?>',
        rating:'<?php echo $song->rating; ?>',
        buy:'<?php echo $song->buy; ?>',
        price:'<?php echo $song->price; ?>',
        duration:'<?php echo $song->duration; ?>',
        cover:'<?php echo $song->cover; ?>'
    }, <?php endforeach ?>
	<?php else: ?>
	
	{
        mp3:'<?php echo $pluginurl; ?>player/mix/1.mp3',
        oga:'<?php echo $pluginurl; ?>player/mix/1.ogg',
        title:'Sample Track',
        artist:'Sample',
        rating:4,
        buy:'#',
        price:'1.00',
        duration:'4:50',
        cover:'<?php echo $pluginurl; ?>player/mix/1.png'
    }
	
	
	<?php endif; ?>
];

	
	
	
        jQuery(document).ready(function(){
           

            jQuery('#myplayer').ttwMusicPlayer(myPlaylist, {
				
				currencySymbol:'<?php echo $cr; ?>',
        		description:"<?php echo $desc; ?>",
				buyText:'<?php echo $bt; ?>',
        		tracksToShow:<?php echo $nt; ?>,
        		
        
				
				});
        });
 
    </script>
 <?php
  $palyer_div	=	'<div id="myplayer"></div>';
return $palyer_div;

}
add_shortcode('hmp_player','wp_hmp_player');


function my_admin_scripts() {
    wp_enqueue_style( 'farbtastic' );
    wp_enqueue_script( 'farbtastic' );
    wp_enqueue_script( 'my-theme-options', get_template_directory_uri() . '/js/theme-options.js', array( 'farbtastic', 'jquery' ) );
}