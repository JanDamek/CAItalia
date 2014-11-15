<?php

/**
 * Oblast form base class.
 *
 * @method Oblast getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOblastForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'popis'          => new sfWidgetFormTextarea(),
      'destinace_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Destinace'), 'add_empty' => true)),
      'kat'            => new sfWidgetFormChoice(array('choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'adr_map_google' => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 50)),
      'popis'          => new sfValidatorString(array('required' => false)),
      'destinace_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Destinace'), 'required' => false)),
      'kat'            => new sfValidatorChoice(array('choices' => array(0 => 'Leto', 1 => 'Zima', 2 => 'Agroturistika'), 'required' => false)),
      'adr_map_google' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Oblast', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('oblast[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Oblast';
  }

}
