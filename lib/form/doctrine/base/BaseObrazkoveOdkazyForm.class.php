<?php

/**
 * ObrazkoveOdkazy form base class.
 *
 * @method ObrazkoveOdkazy getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseObrazkoveOdkazyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'url'         => new sfWidgetFormInputText(),
      'img'         => new sfWidgetFormInputText(),
      'poradi'      => new sfWidgetFormInputText(),
      'publish'     => new sfWidgetFormInputCheckbox(),
      'zobrazit_od' => new sfWidgetFormDate(),
      'zobrazit_do' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'img'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'poradi'      => new sfValidatorInteger(array('required' => false)),
      'publish'     => new sfValidatorBoolean(array('required' => false)),
      'zobrazit_od' => new sfValidatorDate(array('required' => false)),
      'zobrazit_do' => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('obrazkove_odkazy[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ObrazkoveOdkazy';
  }

}
