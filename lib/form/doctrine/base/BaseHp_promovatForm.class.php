<?php

/**
 * Hp_promovat form base class.
 *
 * @method Hp_promovat getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHp_promovatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'zajezdy_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zajezdy'), 'add_empty' => true)),
      'imprese'    => new sfWidgetFormInputText(),
      'zobrazeno'  => new sfWidgetFormInputText(),
      'zacatek'    => new sfWidgetFormDate(),
      'konec'      => new sfWidgetFormDate(),
      'skupina'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'zajezdy_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zajezdy'), 'required' => false)),
      'imprese'    => new sfValidatorInteger(array('required' => false)),
      'zobrazeno'  => new sfValidatorInteger(array('required' => false)),
      'zacatek'    => new sfValidatorDate(array('required' => false)),
      'konec'      => new sfValidatorDate(array('required' => false)),
      'skupina'    => new sfValidatorInteger(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('hp_promovat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Hp_promovat';
  }

}
