<?php

/**
 * Reklama filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReklamaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'reklama_pozice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ReklamaPozice'), 'add_empty' => true)),
      'name'              => new sfWidgetFormFilterInput(),
      'zacatek'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'konec'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'img'               => new sfWidgetFormFilterInput(),
      'url'               => new sfWidgetFormFilterInput(),
      'imprese'           => new sfWidgetFormFilterInput(),
      'poznamka'          => new sfWidgetFormFilterInput(),
      'zobrazeno'         => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'reklama_pozice_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ReklamaPozice'), 'column' => 'id')),
      'name'              => new sfValidatorPass(array('required' => false)),
      'zacatek'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'konec'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'img'               => new sfValidatorPass(array('required' => false)),
      'url'               => new sfValidatorPass(array('required' => false)),
      'imprese'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poznamka'          => new sfValidatorPass(array('required' => false)),
      'zobrazeno'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('reklama_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reklama';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'reklama_pozice_id' => 'ForeignKey',
      'name'              => 'Text',
      'zacatek'           => 'Date',
      'konec'             => 'Date',
      'img'               => 'Text',
      'url'               => 'Text',
      'imprese'           => 'Number',
      'poznamka'          => 'Text',
      'zobrazeno'         => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
