<?php

/**
 * ZajezdyKategorie form base class.
 *
 * @method ZajezdyKategorie getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseZajezdyKategorieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'zajezdy_id'   => new sfWidgetFormInputHidden(),
      'kategorie_id' => new sfWidgetFormInputHidden(),
      'id'           => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'zajezdy_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('zajezdy_id')), 'empty_value' => $this->getObject()->get('zajezdy_id'), 'required' => false)),
      'kategorie_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('kategorie_id')), 'empty_value' => $this->getObject()->get('kategorie_id'), 'required' => false)),
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('zajezdy_kategorie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ZajezdyKategorie';
  }

}
