<?php

/**
 * Reklama_statistika form base class.
 *
 * @method Reklama_statistika getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReklama_statistikaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'reklama_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Reklama'), 'add_empty' => true)),
      'reklama_pozice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ReklamaPozice'), 'add_empty' => true)),
      'from_ip'           => new sfWidgetFormInputText(),
      'user_agent'        => new sfWidgetFormInputText(),
      'referer'           => new sfWidgetFormInputText(),
      'url'               => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'reklama_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Reklama'), 'required' => false)),
      'reklama_pozice_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ReklamaPozice'), 'required' => false)),
      'from_ip'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user_agent'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'referer'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('reklama_statistika[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reklama_statistika';
  }

}
