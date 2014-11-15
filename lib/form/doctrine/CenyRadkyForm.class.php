<?php

/**
 * CenyRadky form.
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CenyRadkyForm extends BaseCenyRadkyForm
{
  public function configure()
  {
      unset($this['ceny_id']);
    $this->setWidget('sl_od', new sfWidgetFormJQueryDate(array('culture' => 'cs')));
    $this->setWidget('sl_do', new sfWidgetFormJQueryDate(array('culture' => 'cs')));
  }
}
