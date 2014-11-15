<?php

/**
 * Reklama actions.
 *
 * @package    caitalia
 * @subpackage Reklama
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReklamaActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
      $this->pozice = $request->getParameter('pozice',null);
  }


  public function executeIndex(sfWebRequest $request)
  {
    $id = $request->getParameter('id','');
    $reklama_pozice_id = $request->getParameter('reklama_pozice_id','');
    if ($reklama_pozice_id==0)
    {
    $reklama = Doctrine::getTable('Hp_img')
                        ->findOneById($id);
    $url = $reklama->getUrl();
    if (strpos($url, 'http://')===false)
            $url = 'http://'.$url;
    }
    else
    {
    //var_dump($_SERVER);

    $reklama = Doctrine::getTable('Reklama')
                        ->findOneById($id);
    
    $url = $reklama->getUrl();
    if (strpos($url, 'http://')===false)
            $url = 'http://'.$url;

    $stat = new Reklama_statistika;
    $stat->reklama_id = $id;
    $stat->reklama_pozice_id = $reklama_pozice_id;
    $stat->from_ip = $_SERVER['REMOTE_ADDR'];
    $stat->user_agent = $_SERVER['HTTP_USER_AGENT'];
    $stat->referer = $_SERVER['HTTP_REFERER'];
    $stat->url = $url;

    $stat->save();
    }
    $this->redirect($url);
  }

}
