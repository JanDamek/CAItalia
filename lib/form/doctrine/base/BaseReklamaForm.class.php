<?php

/**
 * Reklama form base class.
 *
 * @method Reklama getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReklamaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'reklama_pozice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ReklamaPozice'), 'add_empty' => true)),
      'name'              => new sfWidgetFormInputText(),
      'zacatek'           => new sfWidgetFormDate(),
      'konec'             => new sfWidgetFormDate(),
      'img'               => new sfWidgetFormInputText(),
      'url'               => new sfWidgetFormInputText(),
      'imprese'           => new sfWidgetFormInputText(),
      'poznamka'          => new sfWidgetFormTextarea(),
      'zobrazeno'         => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'reklama_pozice_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ReklamaPozice'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'zacatek'           => new sfValidatorDate(array('required' => false)),
      'konec'             => new sfValidatorDate(array('required' => false)),
      'img'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'imprese'           => new sfValidatorInteger(array('required' => false)),
      'poznamka'          => new sfValidatorString(array('required' => false)),
      'zobrazeno'         => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Reklama', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('reklama[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reklama';
  }

}
