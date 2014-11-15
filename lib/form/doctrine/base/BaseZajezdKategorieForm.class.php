<?php

/**
 * ZajezdKategorie form base class.
 *
 * @method ZajezdKategorie getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseZajezdKategorieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'zajezd_id'    => new sfWidgetFormInputText(),
      'kategorie_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'zajezd_id'    => new sfValidatorInteger(array('required' => false)),
      'kategorie_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('zajezd_kategorie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ZajezdKategorie';
  }

}
