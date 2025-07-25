<?php
define( 'DB_NAME', 'u538889987_miwordpressdb' );
define( 'DB_USER', 'u538889987_miusuario' );
define( 'DB_PASSWORD', 'ProyectosIA2025@' );
define( 'DB_HOST', 'mysql.hostinger.com' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// JWT Authentication (si lo estás usando con n8n)
define('JWT_AUTH_SECRET_KEY', 'clave-larga-y-unica');
define('JWT_AUTH_CORS_ENABLE', true);

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
