<?php
define( 'DB_NAME', 'u538889987_miwordpressdb' );
define( 'DB_USER', 'u538889987_miusuario' );
define( 'DB_PASSWORD', 'ProyectosIA2025@' );
define( 'DB_HOST', 'srv628.hstgr.io' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// JWT Authentication (si lo estás usando con n8n)
define('JWT_AUTH_SECRET_KEY', 'clave-larga-y-unica');
define('JWT_AUTH_CORS_ENABLE', true);

define('AUTH_KEY',         'o3mE8KK+#[ 5{>JX2#,:7/g|-8C^/{HL8fn:)CO-E&8M0F#,;rlbT[))S[@MnQz+');
define('SECURE_AUTH_KEY',  'gg[)/nX:IM54#.fa/|MuXPu]$VAj-EnoBh?+_OT7aJ@$-FH]qCv|o2U?hoF)Rt.i');
define('LOGGED_IN_KEY',    '|k|b99zg^B18--7:m F*V)|.7+pl.:,0b#7RQGgI2y!g]9+XSMcNob@koNl?|{w[');
define('NONCE_KEY',        'f523lw|isRe4^+CP.JQm1fUf<6UiI|pPpR}=gZm8|>%5l(CnoE8BcV^D,&D@0RL]');
define('AUTH_SALT',        '7rdiU9^<2uY0g@?L+dPc|o&pT7B;YL`?ICds~/+H$q8,)5+mk6R,NXDNt`wRl)=R');
define('SECURE_AUTH_SALT', 'i9,:n2d~lJ.#1^OA?IH{tw%Q%U:^l+;Dt}KxR,>~HjF|Aj!.YRj)G>GH`(P)CSUM');
define('LOGGED_IN_SALT',   'qC;O8A_`bGuH[Hni+~k!7wtlmxCe0.i]8e!S*h(C~75trLPH+A>nf+KZUK;R51?A');
define('NONCE_SALT',       '))ij0Hc%12J;id0k}U0#.d[Vu/XuLjq@6Q2b4qy?Uk(g|4-NhyS`S)PDAXds$6J1');

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
