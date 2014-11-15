<?php

/**
 * Aktuality filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAktualityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(),
      'kat'         => new sfWidgetFormChoice(array('choices' => array('' => '', 'Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'perex'       => new sfWidgetFormFilterInput(),
      'perex_img'   => new sfWidgetFormFilterInput(),
      'popis'       => new sfWidgetFormFilterInput(),
      'publikovat'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'publikovano' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'keywords'    => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'zajezdy_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zajezdy'), 'add_empty' => true)),
      'zobrazeno'   => new sfWidgetFormFilterInput(),
      'detail'      => new sfWidgetFormFilterInput(),
      'imprese'     => new sfWidgetFormFilterInput(),
      'zacatek'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'konec'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'kat'         => new sfValidatorChoice(array('required' => false, 'choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'perex'       => new sfValidatorPass(array('required' => false)),
      'perex_img'   => new sfValidatorPass(array('required' => false)),
      'popis'       => new sfValidatorPass(array('required' => false)),
      'publikovat'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'publikovano' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'keywords'    => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'zajezdy_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Zajezdy'), 'column' => 'id')),
      'zobrazeno'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'detail'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'imprese'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'zacatek'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'konec'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aktuality_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aktuality';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'kat'         => 'Enum',
      'perex'       => 'Text',
      'perex_img'   => 'Text',
      'popis'       => 'Text',
      'publikovat'  => 'Boolean',
      'publikovano' => 'Date',
      'keywords'    => 'Text',
      'description' => 'Text',
      'zajezdy_id'  => 'ForeignKey',
      'zobrazeno'   => 'Number',
      'detail'      => 'Number',
      'imprese'     => 'Number',
      'zacatek'     => 'Date',
      'konec'       => 'Date',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'slug'        => 'Text',
    );
  }
}
