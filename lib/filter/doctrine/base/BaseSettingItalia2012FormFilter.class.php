<?php

/**
 * SettingItalia2012 filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSettingItalia2012FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'SiteName'       => new sfWidgetFormFilterInput(),
      'email'          => new sfWidgetFormFilterInput(),
      'tel'            => new sfWidgetFormFilterInput(),
      'mobil'          => new sfWidgetFormFilterInput(),
      'pracovni_doba'  => new sfWidgetFormFilterInput(),
      'ulice'          => new sfWidgetFormFilterInput(),
      'mesto'          => new sfWidgetFormFilterInput(),
      'pocet_na_hp'    => new sfWidgetFormFilterInput(),
      'adr_map_google' => new sfWidgetFormFilterInput(),
      'web_adr'        => new sfWidgetFormFilterInput(),
      'ga_code'        => new sfWidgetFormFilterInput(),
      'google_overeni' => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'SiteName'       => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'tel'            => new sfValidatorPass(array('required' => false)),
      'mobil'          => new sfValidatorPass(array('required' => false)),
      'pracovni_doba'  => new sfValidatorPass(array('required' => false)),
      'ulice'          => new sfValidatorPass(array('required' => false)),
      'mesto'          => new sfValidatorPass(array('required' => false)),
      'pocet_na_hp'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adr_map_google' => new sfValidatorPass(array('required' => false)),
      'web_adr'        => new sfValidatorPass(array('required' => false)),
      'ga_code'        => new sfValidatorPass(array('required' => false)),
      'google_overeni' => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('setting_italia2012_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SettingItalia2012';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'SiteName'       => 'Text',
      'email'          => 'Text',
      'tel'            => 'Text',
      'mobil'          => 'Text',
      'pracovni_doba'  => 'Text',
      'ulice'          => 'Text',
      'mesto'          => 'Text',
      'pocet_na_hp'    => 'Number',
      'adr_map_google' => 'Text',
      'web_adr'        => 'Text',
      'ga_code'        => 'Text',
      'google_overeni' => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
