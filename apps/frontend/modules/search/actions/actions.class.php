<?php

/**
 * destinace actions.
 *
 * @package    caitalia
 * @subpackage destinace
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class searchActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {

        $q = $request->getParameter('q','');

        if ($q=='' and isset($_COOKIE['search']))
            $q = $_COOKIE['search'];

        setcookie('search',$q,time()+36000);

        $this->hp_item = new Doctrine_Pager(
                                Doctrine_Core::getTable('Zajezdy')
                                ->getForLuceneQuery($q),
                        $request->getParameter('page', 1),
                        10);

        $seo = Doctrine::getTable('seo')
                        ->findOneByName('search');

        $response = $this->getResponse();
        if ($seo)
        {
            $response->addMeta('keywords', $seo->getKeywords());
            $response->addMeta('description', $seo->getDescription());
            $response->setTitle(($seo->getTitle()?$seo->getTitle().' | ':'') . NavigationHelper::getSetting()->getSiteName() . ($request->getParameter('page', 1)==1?'':' strana '.$request->getParameter('page', 1)) );
        }
        $this->seo = $seo;

    }

}
