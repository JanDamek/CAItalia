<?php

/**
 * Destinace filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDestinaceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'img'                 => new sfWidgetFormFilterInput(),
      'kat'                 => new sfWidgetFormChoice(array('choices' => array('' => '', 'Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'popis'               => new sfWidgetFormFilterInput(),
      'keywords'            => new sfWidgetFormFilterInput(),
      'description'         => new sfWidgetFormFilterInput(),
      'poradi'              => new sfWidgetFormFilterInput(),
      'adr_map_google'      => new sfWidgetFormFilterInput(),
      'regiony_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Regiony'), 'add_empty' => true)),
      'publikovat_italie'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'poradi_italie'       => new sfWidgetFormFilterInput(),
      'cena_od_italie'      => new sfWidgetFormFilterInput(),
      'cena_od_italie_ozna' => new sfWidgetFormFilterInput(),
      'popisek_italie'      => new sfWidgetFormFilterInput(),
      'pozice_italie_x'     => new sfWidgetFormFilterInput(),
      'pozice_italie_y'     => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'                => new sfWidgetFormFilterInput(),
      'kategorie_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Kategorie')),
    ));

    $this->setValidators(array(
      'name'                => new sfValidatorPass(array('required' => false)),
      'img'                 => new sfValidatorPass(array('required' => false)),
      'kat'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'popis'               => new sfValidatorPass(array('required' => false)),
      'keywords'            => new sfValidatorPass(array('required' => false)),
      'description'         => new sfValidatorPass(array('required' => false)),
      'poradi'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adr_map_google'      => new sfValidatorPass(array('required' => false)),
      'regiony_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Regiony'), 'column' => 'id')),
      'publikovat_italie'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'poradi_italie'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cena_od_italie'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cena_od_italie_ozna' => new sfValidatorPass(array('required' => false)),
      'popisek_italie'      => new sfValidatorPass(array('required' => false)),
      'pozice_italie_x'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pozice_italie_y'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'                => new sfValidatorPass(array('required' => false)),
      'kategorie_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Kategorie', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('destinace_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addKategorieListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('DestinaceKategorie.destinace_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Destinace';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'name'                => 'Text',
      'img'                 => 'Text',
      'kat'                 => 'Enum',
      'popis'               => 'Text',
      'keywords'            => 'Text',
      'description'         => 'Text',
      'poradi'              => 'Number',
      'adr_map_google'      => 'Text',
      'regiony_id'          => 'ForeignKey',
      'publikovat_italie'   => 'Boolean',
      'poradi_italie'       => 'Number',
      'cena_od_italie'      => 'Number',
      'cena_od_italie_ozna' => 'Text',
      'popisek_italie'      => 'Text',
      'pozice_italie_x'     => 'Number',
      'pozice_italie_y'     => 'Number',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
      'slug'                => 'Text',
      'kategorie_list'      => 'ManyKey',
    );
  }
}
