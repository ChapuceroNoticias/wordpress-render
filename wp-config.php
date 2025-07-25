<?php
define( 'DB_NAME', 'u538889987_miwordpressdb' );
define( 'DB_USER', 'u538889987_miusuario' );
define( 'DB_PASSWORD', 'ProyectosIa2025@' );
define( 'DB_HOST', 'ftp://gansoinformativo.com' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Clave para JWT
define('JWT_AUTH_SECRET_KEY', 'f65a2a6f-3947-45ea-84bb-911b32444ea5');
define('JWT_AUTH_CORS_ENABLE', true);

// Claves de seguridad recomendadas (puedes generarlas en https://api.wordpress.org/secret-key/1.1/salt/)
define('AUTH_KEY',         '3+jzLFqV;LV NJOx(wj}<CX]kKP=i2(Nlv^cy6g~ga6C(_5(ebo1jcG25oR;1JL@');
define('SECURE_AUTH_KEY',  'O*zJn[X-fLa9xSBOATdVKUl{Y`uh8si{?/NU6i-+m_$VvTKp&I%YnM!v?zz@aQO0');
define('LOGGED_IN_KEY',    '$U@e%iu8vp#7P<xM-/|||eMyn:t<IKvQ*!9lS%/-SH.@tKM>:*g<j<<O_`.:6/,2');
define('NONCE_KEY',        '>{ydq^R]duq|[%Al9D|Qw%g>|x*G4!KLo tk|e0IHAx.B`JC0S&0.oGhw?!BL#(3');
define('AUTH_SALT',        '[DbTP k+Zd:0W:v,dBK,.Ed}u5PTX+%+%+Qnt+g%Jr/Y;K=_QUO,aB3*VE.5aga7');
define('SECURE_AUTH_SALT', '[q0i&dWb(t>jJ<yq;^Ta0_2D-,nc2;N<@P2wrPQLyp`IEgxv]3~|a:9%K-~:q73c');
define('LOGGED_IN_SALT',   '_Ue2HZ+kqbxwMPE0r|dW`JRX`+]-sKqs#a-+2KsMCIp 8$|BA[_Ti<}=yx,&V-2i');
define('NONCE_SALT',       'nf?;$c[_mi`7:4e{6f8YPTF#jv6eu~Hub|2kF1kS>}4c{:2o6ua4B-)1Vlgz~Feh');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
