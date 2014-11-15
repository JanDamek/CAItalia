<?php

/**
 * Ceny filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCenyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'popis'      => new sfWidgetFormFilterInput(),
      'kat'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'is_active'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'min_den'    => new sfWidgetFormFilterInput(),
      'sl1'        => new sfWidgetFormFilterInput(),
      'sl1p'       => new sfWidgetFormFilterInput(),
      'sl2'        => new sfWidgetFormFilterInput(),
      'sl2p'       => new sfWidgetFormFilterInput(),
      'sl3'        => new sfWidgetFormFilterInput(),
      'sl3p'       => new sfWidgetFormFilterInput(),
      'sl4'        => new sfWidgetFormFilterInput(),
      'sl4p'       => new sfWidgetFormFilterInput(),
      'sl5'        => new sfWidgetFormFilterInput(),
      'sl5p'       => new sfWidgetFormFilterInput(),
      'sl6'        => new sfWidgetFormFilterInput(),
      'sl6p'       => new sfWidgetFormFilterInput(),
      'sl7'        => new sfWidgetFormFilterInput(),
      'sl7p'       => new sfWidgetFormFilterInput(),
      'sl8'        => new sfWidgetFormFilterInput(),
      'sl8p'       => new sfWidgetFormFilterInput(),
      'sl9'        => new sfWidgetFormFilterInput(),
      'sl9p'       => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'popis'      => new sfValidatorPass(array('required' => false)),
      'kat'        => new sfValidatorChoice(array('required' => false, 'choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'is_active'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'min_den'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sl1'        => new sfValidatorPass(array('required' => false)),
      'sl1p'       => new sfValidatorPass(array('required' => false)),
      'sl2'        => new sfValidatorPass(array('required' => false)),
      'sl2p'       => new sfValidatorPass(array('required' => false)),
      'sl3'        => new sfValidatorPass(array('required' => false)),
      'sl3p'       => new sfValidatorPass(array('required' => false)),
      'sl4'        => new sfValidatorPass(array('required' => false)),
      'sl4p'       => new sfValidatorPass(array('required' => false)),
      'sl5'        => new sfValidatorPass(array('required' => false)),
      'sl5p'       => new sfValidatorPass(array('required' => false)),
      'sl6'        => new sfValidatorPass(array('required' => false)),
      'sl6p'       => new sfValidatorPass(array('required' => false)),
      'sl7'        => new sfValidatorPass(array('required' => false)),
      'sl7p'       => new sfValidatorPass(array('required' => false)),
      'sl8'        => new sfValidatorPass(array('required' => false)),
      'sl8p'       => new sfValidatorPass(array('required' => false)),
      'sl9'        => new sfValidatorPass(array('required' => false)),
      'sl9p'       => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ceny_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ceny';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'popis'      => 'Text',
      'kat'        => 'Enum',
      'is_active'  => 'Boolean',
      'min_den'    => 'Number',
      'sl1'        => 'Text',
      'sl1p'       => 'Text',
      'sl2'        => 'Text',
      'sl2p'       => 'Text',
      'sl3'        => 'Text',
      'sl3p'       => 'Text',
      'sl4'        => 'Text',
      'sl4p'       => 'Text',
      'sl5'        => 'Text',
      'sl5p'       => 'Text',
      'sl6'        => 'Text',
      'sl6p'       => 'Text',
      'sl7'        => 'Text',
      'sl7p'       => 'Text',
      'sl8'        => 'Text',
      'sl8p'       => 'Text',
      'sl9'        => 'Text',
      'sl9p'       => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
      'slug'       => 'Text',
    );
  }
}
