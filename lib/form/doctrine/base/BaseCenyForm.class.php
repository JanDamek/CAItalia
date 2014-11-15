<?php

/**
 * Ceny form base class.
 *
 * @method Ceny getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCenyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'popis'      => new sfWidgetFormTextarea(),
      'kat'        => new sfWidgetFormChoice(array('choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'min_den'    => new sfWidgetFormInputText(),
      'sl1'        => new sfWidgetFormInputText(),
      'sl1p'       => new sfWidgetFormTextarea(),
      'sl2'        => new sfWidgetFormInputText(),
      'sl2p'       => new sfWidgetFormTextarea(),
      'sl3'        => new sfWidgetFormInputText(),
      'sl3p'       => new sfWidgetFormTextarea(),
      'sl4'        => new sfWidgetFormInputText(),
      'sl4p'       => new sfWidgetFormTextarea(),
      'sl5'        => new sfWidgetFormInputText(),
      'sl5p'       => new sfWidgetFormTextarea(),
      'sl6'        => new sfWidgetFormInputText(),
      'sl6p'       => new sfWidgetFormTextarea(),
      'sl7'        => new sfWidgetFormInputText(),
      'sl7p'       => new sfWidgetFormTextarea(),
      'sl8'        => new sfWidgetFormInputText(),
      'sl8p'       => new sfWidgetFormTextarea(),
      'sl9'        => new sfWidgetFormInputText(),
      'sl9p'       => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'slug'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 100)),
      'popis'      => new sfValidatorString(array('required' => false)),
      'kat'        => new sfValidatorChoice(array('choices' => array(0 => 'Leto', 1 => 'Zima', 2 => 'Agroturistika'), 'required' => false)),
      'is_active'  => new sfValidatorBoolean(array('required' => false)),
      'min_den'    => new sfValidatorInteger(array('required' => false)),
      'sl1'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl1p'       => new sfValidatorString(array('required' => false)),
      'sl2'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl2p'       => new sfValidatorString(array('required' => false)),
      'sl3'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl3p'       => new sfValidatorString(array('required' => false)),
      'sl4'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl4p'       => new sfValidatorString(array('required' => false)),
      'sl5'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl5p'       => new sfValidatorString(array('required' => false)),
      'sl6'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl6p'       => new sfValidatorString(array('required' => false)),
      'sl7'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl7p'       => new sfValidatorString(array('required' => false)),
      'sl8'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl8p'       => new sfValidatorString(array('required' => false)),
      'sl9'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'sl9p'       => new sfValidatorString(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'slug'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ceny[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ceny';
  }

}
