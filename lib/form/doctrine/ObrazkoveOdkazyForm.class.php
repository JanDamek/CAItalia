<?php

/**
 * ObrazkoveOdkazy form.
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ObrazkoveOdkazyForm extends BaseObrazkoveOdkazyForm {

    public function configure() {
        $this->setWidget('img', new sfWidgetFormInputMediaBrowser());
        $this->setWidget('zobrazit_od', new sfWidgetFormJQueryDate(array('culture' => sfContext::getInstance()->getUser()->getCulture())));
        $this->setWidget('zobrazit_do', new sfWidgetFormJQueryDate(array('culture' => sfContext::getInstance()->getUser()->getCulture())));
    }

}
