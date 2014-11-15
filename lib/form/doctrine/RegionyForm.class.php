<?php

/**
 * Regiony form.
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RegionyForm extends BaseRegionyForm {

    public function configure() {
        $this->setWidget('img', new sfWidgetFormInputMediaBrowser());
        $this->setWidget('img_small', new sfWidgetFormInputMediaBrowser());
//        $this->widgetSchema['destinace_list']
//                ->setOption('renderer_class', 'sfWidgetFormSelectDoubleList')
//                ->setOption('renderer_options', array('label_unassociated' => 'Nepřiřazeno', 'label_associated' => 'Přiřazeno'));
    }

}
