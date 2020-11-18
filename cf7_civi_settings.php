<?php
/**
 * @author Jaap Jansma (CiviCooP) <jaap.jansma@civicoop.org>
 * @license http://www.gnu.org/licenses/agpl-3.0.html
 */

class cf7_civi_settings {

  public static function getHost() {
    return trim( get_option('cf7_civi_host') );
  }

  public static function getPath() {
    return trim( get_option('cf7_civi_path') ) ? trim( get_option('cf7_civi_path') ) : '/sites/all/modules/civicrm/extern/rest.php';
  }

  public static function setHost($host) {
    update_option( 'cf7_civi_host', trim( $host ) );
  }

  public static function setPath($path) {
    update_option( 'cf7_civi_path', trim( $path ) );
  }

  public static function getSiteKey() {
    return trim( get_option('cf7_civi_site_key') );
  }

  public static function setSiteKey($key) {
    update_option( 'cf7_civi_site_key', trim( $key ) );
  }

  public static function getApiKey() {
    return trim( get_option('cf7_civi_api_key') );
  }

  public static function setApiKey($key) {
    update_option( 'cf7_civi_api_key', trim( $key ) );
  }

}
