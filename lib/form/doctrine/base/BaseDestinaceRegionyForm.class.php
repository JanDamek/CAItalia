<?php

/**
 * DestinaceRegiony form base class.
 *
 * @method DestinaceRegiony getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDestinaceRegionyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'destinace_id' => new sfWidgetFormInputHidden(),
      'regiony_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'destinace_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('destinace_id')), 'empty_value' => $this->getObject()->get('destinace_id'), 'required' => false)),
      'regiony_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('regiony_id')), 'empty_value' => $this->getObject()->get('regiony_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('destinace_regiony[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DestinaceRegiony';
  }

}
