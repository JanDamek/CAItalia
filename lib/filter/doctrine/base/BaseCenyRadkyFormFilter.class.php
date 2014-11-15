<?php

/**
 * CenyRadky filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCenyRadkyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ceny_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'), 'add_empty' => true)),
      'is_active'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'radek'      => new sfWidgetFormFilterInput(),
      'sl_od'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'sl_do'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'min_noc'    => new sfWidgetFormFilterInput(),
      'sl1'        => new sfWidgetFormFilterInput(),
      'sl2'        => new sfWidgetFormFilterInput(),
      'sl3'        => new sfWidgetFormFilterInput(),
      'sl4'        => new sfWidgetFormFilterInput(),
      'sl5'        => new sfWidgetFormFilterInput(),
      'sl6'        => new sfWidgetFormFilterInput(),
      'sl7'        => new sfWidgetFormFilterInput(),
      'sl8'        => new sfWidgetFormFilterInput(),
      'sl9'        => new sfWidgetFormFilterInput(),
      'bonus1'     => new sfWidgetFormFilterInput(),
      'bonus1_p'   => new sfWidgetFormFilterInput(),
      'bonus2'     => new sfWidgetFormFilterInput(),
      'bonus2_p'   => new sfWidgetFormFilterInput(),
      'bonus3'     => new sfWidgetFormFilterInput(),
      'bonus3_p'   => new sfWidgetFormFilterInput(),
      'bonus4'     => new sfWidgetFormFilterInput(),
      'bonus4_p'   => new sfWidgetFormFilterInput(),
      'bonus5'     => new sfWidgetFormFilterInput(),
      'bonus5_p'   => new sfWidgetFormFilterInput(),
      'bonus6'     => new sfWidgetFormFilterInput(),
      'bonus6_p'   => new sfWidgetFormFilterInput(),
      'bonus7'     => new sfWidgetFormFilterInput(),
      'bonus7_p'   => new sfWidgetFormFilterInput(),
      'bonus8'     => new sfWidgetFormFilterInput(),
      'bonus8_p'   => new sfWidgetFormFilterInput(),
      'bonus9'     => new sfWidgetFormFilterInput(),
      'bonus9_p'   => new sfWidgetFormFilterInput(),
      'sleva1'     => new sfWidgetFormFilterInput(),
      'sleva1_p'   => new sfWidgetFormFilterInput(),
      'sleva2'     => new sfWidgetFormFilterInput(),
      'sleva2_p'   => new sfWidgetFormFilterInput(),
      'sleva3'     => new sfWidgetFormFilterInput(),
      'sleva3_p'   => new sfWidgetFormFilterInput(),
      'sleva4'     => new sfWidgetFormFilterInput(),
      'sleva4_p'   => new sfWidgetFormFilterInput(),
      'sleva5'     => new sfWidgetFormFilterInput(),
      'sleva5_p'   => new sfWidgetFormFilterInput(),
      'sleva6'     => new sfWidgetFormFilterInput(),
      'sleva6_p'   => new sfWidgetFormFilterInput(),
      'sleva7'     => new sfWidgetFormFilterInput(),
      'sleva7_p'   => new sfWidgetFormFilterInput(),
      'sleva8'     => new sfWidgetFormFilterInput(),
      'sleva8_p'   => new sfWidgetFormFilterInput(),
      'sleva9'     => new sfWidgetFormFilterInput(),
      'sleva9_p'   => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'ceny_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ceny'), 'column' => 'id')),
      'is_active'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'radek'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sl_od'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'sl_do'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'min_noc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sl1'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl2'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl3'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl4'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl5'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl6'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl7'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl8'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sl9'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus1'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus1_p'   => new sfValidatorPass(array('required' => false)),
      'bonus2'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus2_p'   => new sfValidatorPass(array('required' => false)),
      'bonus3'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus3_p'   => new sfValidatorPass(array('required' => false)),
      'bonus4'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus4_p'   => new sfValidatorPass(array('required' => false)),
      'bonus5'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus5_p'   => new sfValidatorPass(array('required' => false)),
      'bonus6'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus6_p'   => new sfValidatorPass(array('required' => false)),
      'bonus7'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus7_p'   => new sfValidatorPass(array('required' => false)),
      'bonus8'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus8_p'   => new sfValidatorPass(array('required' => false)),
      'bonus9'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'bonus9_p'   => new sfValidatorPass(array('required' => false)),
      'sleva1'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva1_p'   => new sfValidatorPass(array('required' => false)),
      'sleva2'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva2_p'   => new sfValidatorPass(array('required' => false)),
      'sleva3'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva3_p'   => new sfValidatorPass(array('required' => false)),
      'sleva4'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva4_p'   => new sfValidatorPass(array('required' => false)),
      'sleva5'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva5_p'   => new sfValidatorPass(array('required' => false)),
      'sleva6'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva6_p'   => new sfValidatorPass(array('required' => false)),
      'sleva7'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva7_p'   => new sfValidatorPass(array('required' => false)),
      'sleva8'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva8_p'   => new sfValidatorPass(array('required' => false)),
      'sleva9'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sleva9_p'   => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ceny_radky_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CenyRadky';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'ceny_id'    => 'ForeignKey',
      'is_active'  => 'Boolean',
      'radek'      => 'Number',
      'sl_od'      => 'Date',
      'sl_do'      => 'Date',
      'min_noc'    => 'Number',
      'sl1'        => 'Number',
      'sl2'        => 'Number',
      'sl3'        => 'Number',
      'sl4'        => 'Number',
      'sl5'        => 'Number',
      'sl6'        => 'Number',
      'sl7'        => 'Number',
      'sl8'        => 'Number',
      'sl9'        => 'Number',
      'bonus1'     => 'Number',
      'bonus1_p'   => 'Text',
      'bonus2'     => 'Number',
      'bonus2_p'   => 'Text',
      'bonus3'     => 'Number',
      'bonus3_p'   => 'Text',
      'bonus4'     => 'Number',
      'bonus4_p'   => 'Text',
      'bonus5'     => 'Number',
      'bonus5_p'   => 'Text',
      'bonus6'     => 'Number',
      'bonus6_p'   => 'Text',
      'bonus7'     => 'Number',
      'bonus7_p'   => 'Text',
      'bonus8'     => 'Number',
      'bonus8_p'   => 'Text',
      'bonus9'     => 'Number',
      'bonus9_p'   => 'Text',
      'sleva1'     => 'Number',
      'sleva1_p'   => 'Text',
      'sleva2'     => 'Number',
      'sleva2_p'   => 'Text',
      'sleva3'     => 'Number',
      'sleva3_p'   => 'Text',
      'sleva4'     => 'Number',
      'sleva4_p'   => 'Text',
      'sleva5'     => 'Number',
      'sleva5_p'   => 'Text',
      'sleva6'     => 'Number',
      'sleva6_p'   => 'Text',
      'sleva7'     => 'Number',
      'sleva7_p'   => 'Text',
      'sleva8'     => 'Number',
      'sleva8_p'   => 'Text',
      'sleva9'     => 'Number',
      'sleva9_p'   => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
