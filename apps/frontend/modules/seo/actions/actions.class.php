<?php

/**
 * stranky actions.
 *
 * @package    caitalia
 * @subpackage seo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class seoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->str = Doctrine::getTable('Seo_text')
            ->findOneBySlug($request->getParameter('slug'));

        $response = $this->getResponse();
        if ($this->str)
        {
            $response->addMeta('keywords', $this->str->getKeywords());
            $response->addMeta('description', $this->str->getDescription());
            $response->setTitle(($this->str->getTitle()?$this->str->getTitle().' | ':'') . NavigationHelper::getSetting()->getSiteName());
        }

  }
}
