<?php

/**
 * Hp_img filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseHp_imgFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'img'        => new sfWidgetFormFilterInput(),
      'alt'        => new sfWidgetFormFilterInput(),
      'title'      => new sfWidgetFormFilterInput(),
      'url'        => new sfWidgetFormFilterInput(),
      'zobrazeno'  => new sfWidgetFormFilterInput(),
      'imprese'    => new sfWidgetFormFilterInput(),
      'zacatek'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'konec'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'img'        => new sfValidatorPass(array('required' => false)),
      'alt'        => new sfValidatorPass(array('required' => false)),
      'title'      => new sfValidatorPass(array('required' => false)),
      'url'        => new sfValidatorPass(array('required' => false)),
      'zobrazeno'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'imprese'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'zacatek'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'konec'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('hp_img_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Hp_img';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'img'        => 'Text',
      'alt'        => 'Text',
      'title'      => 'Text',
      'url'        => 'Text',
      'zobrazeno'  => 'Number',
      'imprese'    => 'Number',
      'zacatek'    => 'Date',
      'konec'      => 'Date',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
