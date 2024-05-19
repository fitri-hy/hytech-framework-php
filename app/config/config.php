<?php
namespace App\Config;

class Config {
    public static function getDatabaseConfig() {
        return array(
            'host' => 'localhost',
            'dbname' => 'demo',
            'username' => 'root',
            'password' => 'root',
            'use_database' => false // Set to 'true' for use database connection
        );
    }
}
?>
