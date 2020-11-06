<?php
namespace jakaria\To_Do_List;

/**
 * 
 */
class Database
{
	public $mysqli;

	function __construct()
	{
		require_once( TDL . '/configDB.php' );
		$this->mysqli = self::connect();
	}

	public static function connect(){
		$mysqli = new \mysqli( DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE );
		// Check connection
		if ($mysqli->connect_error) {
			echo "<b>Check <a href='".TDL."\configDB.php'>".TDL."\configDB.php file for Database Credentials</a></b><br>";
		  die("Connection failed: " . $mysqli->connect_error);
		}

		$sql = "EXITS( SELECT * FROM to_do_list )";

		$exits = $mysqli->query( $sql );

		if ( $exits === FALSE ) {
			$table_sql = "CREATE TABLE to_do_list (
			id INT AUTO_INCREMENT,
			item TEXT NOT NULL,
			status VARCHAR(30) NOT NULL,
			primary key (id)
			)";

			$table = $mysqli->query( $table_sql );
		}

		return $mysqli;
	}
}