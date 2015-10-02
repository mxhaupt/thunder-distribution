<?php
// enable dev services
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => '<database>',
  'username' => '<user>',
  'password' => '<password>',
  'host' => '<host>',
  'prefix' => '',
);

$config_directories['active'] = '../config/active';
$config_directories['staging'] = '../config/staging';

$config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)\//';
$config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp|avi|mp4|mpe?g|mov)$/i';
$config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

$settings['hash_salt'] = 'sdklskfjslökdj987sd98f7sddf';

// disable render cache
$settings['cache']['bins']['render'] = 'cache.backend.null';
/**
 * Keep production settings in configuration files,
 * override them here for development / stage
 */
$config['system.logging']['error_level'] = 'verbose';

// disable css/js preprocessing
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;


