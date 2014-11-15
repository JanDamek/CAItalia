<?php

require_once dirname(__FILE__).'/../lib/zajezdyGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/zajezdyGeneratorHelper.class.php';

/**
 * zajezdy actions.
 *
 * @package    caitalia
 * @subpackage zajezdy
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class zajezdyActions extends autoZajezdyActions
{
private function delete_directory($dirname) {
    $dir_handle = null;
   if (is_dir($dirname))
      $dir_handle = opendir($dirname);
   if (!$dir_handle)
      return false;
   while($file = readdir($dir_handle)) {
      if ($file != "." && $file != "..") {
         if (!is_dir($dirname."/".$file))
            unlink($dirname."/".$file);
         else
            $this->delete_directory($dirname.'/'.$file);
      }
   }
   closedir($dir_handle);
   rmdir($dirname);
   return true;
}
    public function executeRemove(sfWebRequest $request){
        $dir = sfConfig::get('sf_template_cache_dir');
        $dir = str_replace('_dev', '', $dir);
        
        $this->delete_directory($dir);
        $dir = str_replace('backend', 'frontend', $dir);
        $this->delete_directory($dir);

        $dir = str_replace('frontend', 'frontend_dev', $dir);
        $this->delete_directory($dir);
        
        $dir = str_replace('frontend_dev', 'backend_dev', $dir);
        $this->delete_directory($dir);
     }

    public function executeReindex(sfWebRequest $request){
        Zajezdy::luceneReindex();
    }
}
