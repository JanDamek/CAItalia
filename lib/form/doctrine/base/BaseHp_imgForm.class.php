<?php

/**
 * Hp_img form base class.
 *
 * @method Hp_img getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHp_imgForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'img'        => new sfWidgetFormInputText(),
      'alt'        => new sfWidgetFormInputText(),
      'title'      => new sfWidgetFormInputText(),
      'url'        => new sfWidgetFormInputText(),
      'zobrazeno'  => new sfWidgetFormInputText(),
      'imprese'    => new sfWidgetFormInputText(),
      'zacatek'    => new sfWidgetFormDate(),
      'konec'      => new sfWidgetFormDate(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alt'        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'url'        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'zobrazeno'  => new sfValidatorInteger(array('required' => false)),
      'imprese'    => new sfValidatorInteger(array('required' => false)),
      'zacatek'    => new sfValidatorDate(array('required' => false)),
      'konec'      => new sfValidatorDate(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Hp_img', 'column' => array('title')))
    );

    $this->widgetSchema->setNameFormat('hp_img[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Hp_img';
  }

}
