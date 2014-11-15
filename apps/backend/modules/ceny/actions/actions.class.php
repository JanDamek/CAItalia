<?php

require_once dirname(__FILE__).'/../lib/cenyGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/cenyGeneratorHelper.class.php';

/**
 * ceny actions.
 *
 * @package    caitalia
 * @subpackage ceny
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cenyActions extends autoCenyActions
{
  public function executeDeleteImage(sfWebRequest $request)
  {
    $image = Doctrine::getTable('CenyRadky')->findOneById($request->getParameter('id'));
    $image->delete();

    return sfView::NONE;
  }

  public function executeSortimages(sfWebRequest $request)
  {
    foreach($request->getParameter('listItem') as $position => $item)
    {
      $image = Doctrine::getTable('CenyRadky')->findOneById($item);
      if($image != null)
      {
        $image->setOrd($position);
        $image->save();
      }
    }

    return sfView::NONE;
  }

  public function executeAjaxGallery($request)
  {
    $this->getResponse()->setContentType('application/json');

    $authors = Doctrine::getTable('Ceny')->retrieveForSelect(
      $request->getParameter('q'),
      $request->getParameter('limit')
    );
    $authors[''] = ' ... ';
    return $this->renderText(json_encode($authors));
  }
}
