<?php
namespace jakaria\To_Do_List;

class Main
{
	public static $instance;

	function __construct(){
		require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
		self::defined();
		new Database;
		self::view();
	}

	public function defined(){
		define( 'TDL', dirname( __FILE__ ) );
		define( 'TDL_DIR', basename( __DIR__ ) );
	}

	public function view()	{
		View::index();
	}

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
Main::instance();