<?php

/**
 * homepage actions.
 *
 * @package    caitalia
 * @subpackage homepage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

//use_helper('Navigation');

class homepageActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {

        $seo = Doctrine::getTable('seo')
                        ->findOneByName('homepage');

        $response = $this->getResponse();
        if ($seo)
        {
            $response->addMeta('keywords', $seo->getKeywords());
            $response->addMeta('description', $seo->getDescription());
            $response->setTitle(($seo->getTitle()?$seo->getTitle().' | ':'') . NavigationHelper::getSetting()->getSiteName());
        }
        $this->seo = $seo;
    }

}
