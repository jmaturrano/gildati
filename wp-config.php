<?php
$abspath=str_replace(array('\gildati', '/gildati'),'/wp-config',ABSPATH);

/*para testear echo "$abspath"; y borrar si algo falla cuando se subio */
include($abspath.'/server.php');
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', $server['database']['gildati']);

/** Tu nombre de usuario de MySQL */
define('DB_USER', $server['main']['user']);

/** Tu contraseña de MySQL */
define('DB_PASSWORD', $server['main']['pass']);

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', $server['main']['host']);

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');



/** Lenguaje de wordpress **/
define('WPLANG', 'es_PE');
/** Revisiones de POSTS **/
define('WP_POST_REVISIONS', 5);
/** Auto guardado de POSTS **/
define('WP_POST_REVISIONS', false);
/** Guardar las consultas en una constante **/
define('SAVEQUERIES', true );
/** Desactivar las actualizaciones automáticas **/
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
/** Desactivar el editor de temas y plugins **/
define('DISALLOW_FILE_EDIT', true);
/** Desactivar la instalación de temas y plugins **/
define('DISALLOW_FILE_MODS', true);
/** No usar las versiones minificadas **/
define('CONCATENATE_SCRIPTS', false);

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/L`?gr~i_a_}IxY% >t;A*[v:+w!j[B!d2mv;&imS?s;dOJ(78|afu3qk{x?CM!2');
define('SECURE_AUTH_KEY', '+2ME7G|qYG`LKnZ8yIZ1Z&qc6oj/mRlQC9x%}S{_O]Ej8]s{OEVfJYuG,w]K-Jvp');
define('LOGGED_IN_KEY', ',DC8j_ESitVS_ 3EMI--R9+5}7cC!4Tb28fj68x*._SEFK(0`8dg;ys]u=d9SYHs');
define('NONCE_KEY', '8aH0/=pL~=k2,?wpxcv{ZUuQ+~,Q63zZ*f 8|dD&@Ng3<<q?Ye4h1aRqpbKxQri>');
define('AUTH_SALT', ';%1_xYmuxx!U[$WVP+S{O/|+&KGS5jq;)&5@-G6@8>Hq;w.c[PRO2ry5g``lBm,6');
define('SECURE_AUTH_SALT', 'qlw^Z&9oG_de08$oo@OOO1Vu.T?9%HZ+LwXoSH#Sw5hhdTWPpxbEd~L`kk:[{N2s');
define('LOGGED_IN_SALT', 'cjl%rJi86oXmA8duczdJz7<y9(~Qo{cl*^;~}!k2JH9vda$5>/*x+BAH7Dv:]FiX');
define('NONCE_SALT', '@$o8MOh u8^x?bYE]5h.>NLW>)hb<BtSL:zzul(O.[ChoXsjC]^RwI{~1Adh?PK/');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

