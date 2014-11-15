<?php

/**
 * Mista form base class.
 *
 * @method Mista getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMistaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'popis'        => new sfWidgetFormTextarea(),
      'cena_od'      => new sfWidgetFormInputText(),
      'last_minute'  => new sfWidgetFormInputCheckbox(),
      'akce'         => new sfWidgetFormInputCheckbox(),
      'destinace_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Destinace'), 'add_empty' => false)),
      'ceny_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'), 'add_empty' => true)),
      'obrazek'      => new sfWidgetFormInputText(),
      'kategorie_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'slug'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 50)),
      'popis'        => new sfValidatorString(array('required' => false)),
      'cena_od'      => new sfValidatorNumber(array('required' => false)),
      'last_minute'  => new sfValidatorBoolean(array('required' => false)),
      'akce'         => new sfValidatorBoolean(array('required' => false)),
      'destinace_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Destinace'))),
      'ceny_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'), 'required' => false)),
      'obrazek'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'kategorie_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Mista', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Mista', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('mista[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mista';
  }

}
