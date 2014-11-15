<?php

/**
 * Hp_promovat form.
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Hp_promovatForm extends BaseHp_promovatForm {

    public function configure() {
        $this->setWidget('zacatek', new sfWidgetFormJQueryDate(array('culture' => 'cs')));
        $this->setWidget('konec', new sfWidgetFormJQueryDate(array('culture' => 'cs')));
    }

}
