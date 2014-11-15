<?php

/**
 * Kategorie filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseKategorieFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'popis'          => new sfWidgetFormFilterInput(),
      'poradi'         => new sfWidgetFormFilterInput(),
      'kat'            => new sfWidgetFormChoice(array('choices' => array('' => '', 'Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'keywords'       => new sfWidgetFormFilterInput(),
      'description'    => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'           => new sfWidgetFormFilterInput(),
      'destinace_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Destinace')),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'popis'          => new sfValidatorPass(array('required' => false)),
      'poradi'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kat'            => new sfValidatorChoice(array('required' => false, 'choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'keywords'       => new sfValidatorPass(array('required' => false)),
      'description'    => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'           => new sfValidatorPass(array('required' => false)),
      'destinace_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Destinace', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kategorie_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addDestinaceListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.DestinaceKategorie DestinaceKategorie')
      ->andWhereIn('DestinaceKategorie.kategorie_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Kategorie';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'name'           => 'Text',
      'popis'          => 'Text',
      'poradi'         => 'Number',
      'kat'            => 'Enum',
      'keywords'       => 'Text',
      'description'    => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'slug'           => 'Text',
      'destinace_list' => 'ManyKey',
    );
  }
}
