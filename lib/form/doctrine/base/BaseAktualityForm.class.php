<?php

/**
 * Aktuality form base class.
 *
 * @method Aktuality getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAktualityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'kat'         => new sfWidgetFormChoice(array('choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'perex'       => new sfWidgetFormTextarea(),
      'perex_img'   => new sfWidgetFormInputText(),
      'popis'       => new sfWidgetFormTextarea(),
      'publikovat'  => new sfWidgetFormInputCheckbox(),
      'publikovano' => new sfWidgetFormDate(),
      'keywords'    => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'zajezdy_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zajezdy'), 'add_empty' => true)),
      'zobrazeno'   => new sfWidgetFormInputText(),
      'detail'      => new sfWidgetFormInputText(),
      'imprese'     => new sfWidgetFormInputText(),
      'zacatek'     => new sfWidgetFormDate(),
      'konec'       => new sfWidgetFormDate(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'kat'         => new sfValidatorChoice(array('choices' => array(0 => 'Leto', 1 => 'Zima', 2 => 'Agroturistika'), 'required' => false)),
      'perex'       => new sfValidatorString(array('required' => false)),
      'perex_img'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'popis'       => new sfValidatorString(array('required' => false)),
      'publikovat'  => new sfValidatorBoolean(array('required' => false)),
      'publikovano' => new sfValidatorDate(array('required' => false)),
      'keywords'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'zajezdy_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zajezdy'), 'required' => false)),
      'zobrazeno'   => new sfValidatorInteger(array('required' => false)),
      'detail'      => new sfValidatorInteger(array('required' => false)),
      'imprese'     => new sfValidatorInteger(array('required' => false)),
      'zacatek'     => new sfValidatorDate(array('required' => false)),
      'konec'       => new sfValidatorDate(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Aktuality', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Aktuality', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('aktuality[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aktuality';
  }

}
