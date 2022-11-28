<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bz_=1R876VbztU5:x~V4AAG?kT=kTVDu%~L_Mz wJxql2L5|&]@h!QMcI,&TN=A2' );
define( 'SECURE_AUTH_KEY',  '[.cwv&uPy%n_22=d&ww-6+>r{KA)!^u3qw#-ztNVo`?2_1u)uD&^UXK%q0T[=#iP' );
define( 'LOGGED_IN_KEY',    '/x6!mPEWfRqRVCya4c^eDXm=r;Y)e2J9/!-E06x.qnW4>!IxM*2|fs;8v3=LiM(K' );
define( 'NONCE_KEY',        'Pu]/OJ`IVYEnKGItn#<{rNmVI{!:[TNTzN{36;29QyhkO}RqenL%7Gs6z,6,7ZZ/' );
define( 'AUTH_SALT',        '~%9:5#5^J*2oI5k2.28h#F=I j8#RV,=c.uEp;3bCGX8=E-w@elmc>^U=:GFI zR' );
define( 'SECURE_AUTH_SALT', '39t9D{Oo1r>:{{#7HZC$`]GVl}d9YIc>)kF PEo[UE2AAK0>?GICX0o>izqS`$K7' );
define( 'LOGGED_IN_SALT',   '9H,hJVU+:w;R9!=0@Vg`uaaNsROnJ>/4xgfiyehI#RDUT8]|L#D.X7FJnp8qT(YZ' );
define( 'NONCE_SALT',       ':~A){}dXklb{1?[]$;GK#]QVZk`jM`*dmoM:-IxijV{,0$hS~~%LCmvk7C&F{qMK' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
