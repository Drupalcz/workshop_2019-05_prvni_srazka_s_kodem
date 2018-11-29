<?php
/**
 * @file
 * Local development override configuration feature.
 *
 * To activate this feature, copy and rename it such that its path plus
 * filename is 'sites/default/settings.local.php'.
 */

$site = "default";
$loc_db_name = "drupal8";
$loc_db_user = 'drupal8';
$loc_db_pass = 'drupal8';
//$loc_db_host = "db_$site";
$loc_db_host = "database";
$loc_db_port = '3306';
$remote_user = '';
$remote_pass = '';
$databases = array(
  'default' =>
    array(
      'default' =>
        array(
          'database' => $loc_db_name,
          'username' => $loc_db_user,
          'password' => $loc_db_pass,
          'host' => $loc_db_host,
          'port' => $loc_db_port,
          'driver' => 'mysql',
          'prefix' => '',
        ),
    ),
);

/**
 * File paths.
 */
// mkdir -p files/private && mkdir -p files/tmp && chmod -R 777 files
//$settings['file_public_path'] = DRUPAL_ROOT . "/sites/$site/files";
//$config['system.file']['path']['temporary'] = "/sites/$site/files/tmp";
//$settings['file_private_path'] = DRUPAL_ROOT . "/sites/$site/files/private";
/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = TRUE;
/**
 * Enable local development services.
 */
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
/**
 * Show all error messages, with backtrace information.
 */
$config['system.logging']['error_level'] = 'verbose';
/**
 * Disable CSS and JS aggregation.
 */
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
/**
 * Allow test modules and themes to be installed.
 *
 * Drupal ignores test modules and themes by default for performance reasons.
 * During development it can be useful to install test extensions for debugging
 * purposes.
 */
$settings['extension_discovery_scan_tests'] = TRUE;
/**
 * Enable access to rebuild.php.
 *
 * This setting can be enabled to allow Drupal's php and database cached
 * storage to be cleared via the rebuild.php page. Access to this page can also
 * be gained by generating a query string from rebuild_token_calculator.sh and
 * using these parameters in a request to rebuild.php.
 */
$settings['rebuild_access'] = TRUE;
/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'LOCAL_ONLY';
/**
 * Disable Acquia connector configuration.
 */
$config['acquia_connector.settings']['identifier'] = 'LOCAL';
$config['acquia_connector.settings']['key'] = 'LOCAL';
/**
 * Stage File Proxy configuration.
 */
$config['stage_file_proxy.settings']['origin'] = 'http://USERNAME:' . urlencode('PASSWORD') . '@DOMAIN';
/**
 * Don't send e-mail from local.
 */
$config['system.mail']['interface']['default'] = 'devel_mail_log';
/**
 * Skip file system permissions hardening.
 *
 * The system module will periodically check the permissions of your site's
 * site directory to ensure that it is not writable by the website user. For
 * sites that are managed with a version control system, this can cause problems
 * when files in that directory such as settings.php are updated, because the
 * user pulling in the changes won't have permissions to modify files in the
 * directory.
 */
$settings['skip_permissions_hardening'] = TRUE;