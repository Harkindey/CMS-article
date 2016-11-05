<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Etc/Gmt+1" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=architecture" );
define( "DB_USERNAME", "bean" );
define( "DB_PASSWORD", "beanne" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
