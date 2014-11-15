<?php

/**
 * CenyRadky form base class.
 *
 * @method CenyRadky getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCenyRadkyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'ceny_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'), 'add_empty' => false)),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'radek'      => new sfWidgetFormInputText(),
      'sl_od'      => new sfWidgetFormDate(),
      'sl_do'      => new sfWidgetFormDate(),
      'min_noc'    => new sfWidgetFormInputText(),
      'sl1'        => new sfWidgetFormInputText(),
      'sl2'        => new sfWidgetFormInputText(),
      'sl3'        => new sfWidgetFormInputText(),
      'sl4'        => new sfWidgetFormInputText(),
      'sl5'        => new sfWidgetFormInputText(),
      'sl6'        => new sfWidgetFormInputText(),
      'sl7'        => new sfWidgetFormInputText(),
      'sl8'        => new sfWidgetFormInputText(),
      'sl9'        => new sfWidgetFormInputText(),
      'bonus1'     => new sfWidgetFormInputText(),
      'bonus1_p'   => new sfWidgetFormInputText(),
      'bonus2'     => new sfWidgetFormInputText(),
      'bonus2_p'   => new sfWidgetFormInputText(),
      'bonus3'     => new sfWidgetFormInputText(),
      'bonus3_p'   => new sfWidgetFormInputText(),
      'bonus4'     => new sfWidgetFormInputText(),
      'bonus4_p'   => new sfWidgetFormInputText(),
      'bonus5'     => new sfWidgetFormInputText(),
      'bonus5_p'   => new sfWidgetFormInputText(),
      'bonus6'     => new sfWidgetFormInputText(),
      'bonus6_p'   => new sfWidgetFormInputText(),
      'bonus7'     => new sfWidgetFormInputText(),
      'bonus7_p'   => new sfWidgetFormInputText(),
      'bonus8'     => new sfWidgetFormInputText(),
      'bonus8_p'   => new sfWidgetFormInputText(),
      'bonus9'     => new sfWidgetFormInputText(),
      'bonus9_p'   => new sfWidgetFormInputText(),
      'sleva1'     => new sfWidgetFormInputText(),
      'sleva1_p'   => new sfWidgetFormInputText(),
      'sleva2'     => new sfWidgetFormInputText(),
      'sleva2_p'   => new sfWidgetFormInputText(),
      'sleva3'     => new sfWidgetFormInputText(),
      'sleva3_p'   => new sfWidgetFormInputText(),
      'sleva4'     => new sfWidgetFormInputText(),
      'sleva4_p'   => new sfWidgetFormInputText(),
      'sleva5'     => new sfWidgetFormInputText(),
      'sleva5_p'   => new sfWidgetFormInputText(),
      'sleva6'     => new sfWidgetFormInputText(),
      'sleva6_p'   => new sfWidgetFormInputText(),
      'sleva7'     => new sfWidgetFormInputText(),
      'sleva7_p'   => new sfWidgetFormInputText(),
      'sleva8'     => new sfWidgetFormInputText(),
      'sleva8_p'   => new sfWidgetFormInputText(),
      'sleva9'     => new sfWidgetFormInputText(),
      'sleva9_p'   => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'ceny_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'))),
      'is_active'  => new sfValidatorBoolean(array('required' => false)),
      'radek'      => new sfValidatorInteger(array('required' => false)),
      'sl_od'      => new sfValidatorDate(array('required' => false)),
      'sl_do'      => new sfValidatorDate(array('required' => false)),
      'min_noc'    => new sfValidatorInteger(array('required' => false)),
      'sl1'        => new sfValidatorNumber(array('required' => false)),
      'sl2'        => new sfValidatorNumber(array('required' => false)),
      'sl3'        => new sfValidatorNumber(array('required' => false)),
      'sl4'        => new sfValidatorNumber(array('required' => false)),
      'sl5'        => new sfValidatorNumber(array('required' => false)),
      'sl6'        => new sfValidatorNumber(array('required' => false)),
      'sl7'        => new sfValidatorNumber(array('required' => false)),
      'sl8'        => new sfValidatorNumber(array('required' => false)),
      'sl9'        => new sfValidatorNumber(array('required' => false)),
      'bonus1'     => new sfValidatorNumber(array('required' => false)),
      'bonus1_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus2'     => new sfValidatorNumber(array('required' => false)),
      'bonus2_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus3'     => new sfValidatorNumber(array('required' => false)),
      'bonus3_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus4'     => new sfValidatorNumber(array('required' => false)),
      'bonus4_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus5'     => new sfValidatorNumber(array('required' => false)),
      'bonus5_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus6'     => new sfValidatorNumber(array('required' => false)),
      'bonus6_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus7'     => new sfValidatorNumber(array('required' => false)),
      'bonus7_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus8'     => new sfValidatorNumber(array('required' => false)),
      'bonus8_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'bonus9'     => new sfValidatorNumber(array('required' => false)),
      'bonus9_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva1'     => new sfValidatorNumber(array('required' => false)),
      'sleva1_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva2'     => new sfValidatorNumber(array('required' => false)),
      'sleva2_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva3'     => new sfValidatorNumber(array('required' => false)),
      'sleva3_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva4'     => new sfValidatorNumber(array('required' => false)),
      'sleva4_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva5'     => new sfValidatorNumber(array('required' => false)),
      'sleva5_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva6'     => new sfValidatorNumber(array('required' => false)),
      'sleva6_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva7'     => new sfValidatorNumber(array('required' => false)),
      'sleva7_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva8'     => new sfValidatorNumber(array('required' => false)),
      'sleva8_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'sleva9'     => new sfValidatorNumber(array('required' => false)),
      'sleva9_p'   => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('ceny_radky[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CenyRadky';
  }

}
