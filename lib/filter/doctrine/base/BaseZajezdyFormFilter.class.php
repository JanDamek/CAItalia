<?php

/**
 * Zajezdy filter form base class.
 *
 * @package    caitalia
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseZajezdyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'destinace_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Destinace'), 'add_empty' => true)),
      'oblast_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Oblast'), 'add_empty' => true)),
      'kat'                  => new sfWidgetFormChoice(array('choices' => array('' => '', 'Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'typ_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Typ'), 'add_empty' => true)),
      'cena_od'              => new sfWidgetFormFilterInput(),
      'cena_typ'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CenaTyp'), 'add_empty' => true)),
      'ceny_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'), 'add_empty' => true)),
      'ceny2_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny2'), 'add_empty' => true)),
      'obrazek'              => new sfWidgetFormFilterInput(),
      'gallery_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
      'publikovat'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'max_pocet_osob'       => new sfWidgetFormFilterInput(),
      'max_pristilka'        => new sfWidgetFormFilterInput(),
      'popis_list'           => new sfWidgetFormFilterInput(),
      'popis_detail'         => new sfWidgetFormFilterInput(),
      'last_minute'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cena_last_minute'     => new sfWidgetFormFilterInput(),
      'last_minute_do'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ceny_last_minute_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CenyLastMinute'), 'add_empty' => true)),
      'ceny_last_minute2_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CenyLastMinute2'), 'add_empty' => true)),
      'popis_pod_cenikem'    => new sfWidgetFormFilterInput(),
      'akce'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'autobus'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parkoviste'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'klimatizace'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'bazen'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'strava'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'internet'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'plazovy_servis'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tv'                   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'zvire'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'adr_map_google'       => new sfWidgetFormFilterInput(),
      'promovat_hp_do'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'promovat_hp_pos'      => new sfWidgetFormFilterInput(),
      'keywords'             => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(),
      'detail'               => new sfWidgetFormFilterInput(),
      'zobrazeno'            => new sfWidgetFormFilterInput(),
      'imprese'              => new sfWidgetFormFilterInput(),
      'zacatek'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'konec'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'poradi'               => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'                 => new sfValidatorPass(array('required' => false)),
      'destinace_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Destinace'), 'column' => 'id')),
      'oblast_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Oblast'), 'column' => 'id')),
      'kat'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'typ_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Typ'), 'column' => 'id')),
      'cena_od'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cena_typ'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CenaTyp'), 'column' => 'id')),
      'ceny_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ceny'), 'column' => 'id')),
      'ceny2_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ceny2'), 'column' => 'id')),
      'obrazek'              => new sfValidatorPass(array('required' => false)),
      'gallery_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery'), 'column' => 'id')),
      'publikovat'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'max_pocet_osob'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'max_pristilka'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'popis_list'           => new sfValidatorPass(array('required' => false)),
      'popis_detail'         => new sfValidatorPass(array('required' => false)),
      'last_minute'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cena_last_minute'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'last_minute_do'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ceny_last_minute_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CenyLastMinute'), 'column' => 'id')),
      'ceny_last_minute2_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CenyLastMinute2'), 'column' => 'id')),
      'popis_pod_cenikem'    => new sfValidatorPass(array('required' => false)),
      'akce'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'autobus'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parkoviste'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'klimatizace'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'bazen'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'strava'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'internet'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'plazovy_servis'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tv'                   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'zvire'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'adr_map_google'       => new sfValidatorPass(array('required' => false)),
      'promovat_hp_do'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'promovat_hp_pos'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'keywords'             => new sfValidatorPass(array('required' => false)),
      'description'          => new sfValidatorPass(array('required' => false)),
      'detail'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'zobrazeno'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'imprese'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'zacatek'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'konec'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'poradi'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('zajezdy_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zajezdy';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'name'                 => 'Text',
      'destinace_id'         => 'ForeignKey',
      'oblast_id'            => 'ForeignKey',
      'kat'                  => 'Enum',
      'typ_id'               => 'ForeignKey',
      'cena_od'              => 'Number',
      'cena_typ'             => 'ForeignKey',
      'ceny_id'              => 'ForeignKey',
      'ceny2_id'             => 'ForeignKey',
      'obrazek'              => 'Text',
      'gallery_id'           => 'ForeignKey',
      'publikovat'           => 'Boolean',
      'max_pocet_osob'       => 'Number',
      'max_pristilka'        => 'Number',
      'popis_list'           => 'Text',
      'popis_detail'         => 'Text',
      'last_minute'          => 'Boolean',
      'cena_last_minute'     => 'Number',
      'last_minute_do'       => 'Date',
      'ceny_last_minute_id'  => 'ForeignKey',
      'ceny_last_minute2_id' => 'ForeignKey',
      'popis_pod_cenikem'    => 'Text',
      'akce'                 => 'Boolean',
      'autobus'              => 'Boolean',
      'parkoviste'           => 'Boolean',
      'klimatizace'          => 'Boolean',
      'bazen'                => 'Boolean',
      'strava'               => 'Boolean',
      'internet'             => 'Boolean',
      'plazovy_servis'       => 'Boolean',
      'tv'                   => 'Boolean',
      'zvire'                => 'Boolean',
      'adr_map_google'       => 'Text',
      'promovat_hp_do'       => 'Date',
      'promovat_hp_pos'      => 'Number',
      'keywords'             => 'Text',
      'description'          => 'Text',
      'detail'               => 'Number',
      'zobrazeno'            => 'Number',
      'imprese'              => 'Number',
      'zacatek'              => 'Date',
      'konec'                => 'Date',
      'poradi'               => 'Number',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'slug'                 => 'Text',
    );
  }
}
