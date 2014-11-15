<?php

/**
 * ObrazkoveOdkazy filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseObrazkoveOdkazyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(),
      'url'         => new sfWidgetFormFilterInput(),
      'img'         => new sfWidgetFormFilterInput(),
      'poradi'      => new sfWidgetFormFilterInput(),
      'publish'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'zobrazit_od' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'zobrazit_do' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'url'         => new sfValidatorPass(array('required' => false)),
      'img'         => new sfValidatorPass(array('required' => false)),
      'poradi'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'publish'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'zobrazit_od' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'zobrazit_do' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('obrazkove_odkazy_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ObrazkoveOdkazy';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'url'         => 'Text',
      'img'         => 'Text',
      'poradi'      => 'Number',
      'publish'     => 'Boolean',
      'zobrazit_od' => 'Date',
      'zobrazit_do' => 'Date',
    );
  }
}
