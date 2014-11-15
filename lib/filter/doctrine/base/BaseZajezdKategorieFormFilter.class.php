<?php

/**
 * ZajezdKategorie filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseZajezdKategorieFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'zajezd_id'    => new sfWidgetFormFilterInput(),
      'kategorie_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Kategorie'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'zajezd_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kategorie_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Kategorie'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('zajezd_kategorie_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ZajezdKategorie';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'zajezd_id'    => 'Number',
      'kategorie_id' => 'ForeignKey',
    );
  }
}
