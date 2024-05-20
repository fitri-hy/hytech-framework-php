<?php
namespace App\Config;

class Config {
    public static function getDatabaseConfig() {
        return array(
            'host' => $_ENV['DB_HOST'],
            'dbname' => $_ENV['DB_NAME'],
            'username' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
			'use_database' => false // set to 'true' for use database connection
        );
    }
    public static function getBaseUrl() {
        return $_ENV['BASE_URL'];
    }
}
?>
