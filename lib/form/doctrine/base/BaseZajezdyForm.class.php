<?php

/**
 * Zajezdy form base class.
 *
 * @method Zajezdy getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseZajezdyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'name'                 => new sfWidgetFormInputText(),
      'destinace_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Destinace'), 'add_empty' => false)),
      'oblast_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Oblast'), 'add_empty' => true)),
      'kat'                  => new sfWidgetFormChoice(array('choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'typ_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Typ'), 'add_empty' => true)),
      'cena_od'              => new sfWidgetFormInputText(),
      'cena_typ'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CenaTyp'), 'add_empty' => true)),
      'ceny_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'), 'add_empty' => true)),
      'ceny2_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny2'), 'add_empty' => true)),
      'obrazek'              => new sfWidgetFormInputText(),
      'gallery_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
      'publikovat'           => new sfWidgetFormInputCheckbox(),
      'max_pocet_osob'       => new sfWidgetFormInputText(),
      'max_pristilka'        => new sfWidgetFormInputText(),
      'popis_list'           => new sfWidgetFormTextarea(),
      'popis_detail'         => new sfWidgetFormTextarea(),
      'last_minute'          => new sfWidgetFormInputCheckbox(),
      'cena_last_minute'     => new sfWidgetFormInputText(),
      'last_minute_do'       => new sfWidgetFormDate(),
      'ceny_last_minute_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CenyLastMinute'), 'add_empty' => true)),
      'ceny_last_minute2_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CenyLastMinute2'), 'add_empty' => true)),
      'popis_pod_cenikem'    => new sfWidgetFormTextarea(),
      'akce'                 => new sfWidgetFormInputCheckbox(),
      'autobus'              => new sfWidgetFormInputCheckbox(),
      'parkoviste'           => new sfWidgetFormInputCheckbox(),
      'klimatizace'          => new sfWidgetFormInputCheckbox(),
      'bazen'                => new sfWidgetFormInputCheckbox(),
      'strava'               => new sfWidgetFormInputCheckbox(),
      'internet'             => new sfWidgetFormInputCheckbox(),
      'plazovy_servis'       => new sfWidgetFormInputCheckbox(),
      'tv'                   => new sfWidgetFormInputCheckbox(),
      'zvire'                => new sfWidgetFormInputCheckbox(),
      'adr_map_google'       => new sfWidgetFormInputText(),
      'promovat_hp_do'       => new sfWidgetFormDate(),
      'promovat_hp_pos'      => new sfWidgetFormInputText(),
      'keywords'             => new sfWidgetFormInputText(),
      'description'          => new sfWidgetFormInputText(),
      'detail'               => new sfWidgetFormInputText(),
      'zobrazeno'            => new sfWidgetFormInputText(),
      'imprese'              => new sfWidgetFormInputText(),
      'zacatek'              => new sfWidgetFormDate(),
      'konec'                => new sfWidgetFormDate(),
      'poradi'               => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'slug'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                 => new sfValidatorString(array('max_length' => 50)),
      'destinace_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Destinace'))),
      'oblast_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Oblast'), 'required' => false)),
      'kat'                  => new sfValidatorChoice(array('choices' => array(0 => 'Leto', 1 => 'Zima', 2 => 'Agroturistika'), 'required' => false)),
      'typ_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Typ'), 'required' => false)),
      'cena_od'              => new sfValidatorNumber(array('required' => false)),
      'cena_typ'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CenaTyp'), 'required' => false)),
      'ceny_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny'), 'required' => false)),
      'ceny2_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ceny2'), 'required' => false)),
      'obrazek'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gallery_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'required' => false)),
      'publikovat'           => new sfValidatorBoolean(array('required' => false)),
      'max_pocet_osob'       => new sfValidatorInteger(array('required' => false)),
      'max_pristilka'        => new sfValidatorInteger(array('required' => false)),
      'popis_list'           => new sfValidatorString(array('required' => false)),
      'popis_detail'         => new sfValidatorString(array('required' => false)),
      'last_minute'          => new sfValidatorBoolean(array('required' => false)),
      'cena_last_minute'     => new sfValidatorNumber(array('required' => false)),
      'last_minute_do'       => new sfValidatorDate(array('required' => false)),
      'ceny_last_minute_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CenyLastMinute'), 'required' => false)),
      'ceny_last_minute2_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CenyLastMinute2'), 'required' => false)),
      'popis_pod_cenikem'    => new sfValidatorString(array('required' => false)),
      'akce'                 => new sfValidatorBoolean(array('required' => false)),
      'autobus'              => new sfValidatorBoolean(array('required' => false)),
      'parkoviste'           => new sfValidatorBoolean(array('required' => false)),
      'klimatizace'          => new sfValidatorBoolean(array('required' => false)),
      'bazen'                => new sfValidatorBoolean(array('required' => false)),
      'strava'               => new sfValidatorBoolean(array('required' => false)),
      'internet'             => new sfValidatorBoolean(array('required' => false)),
      'plazovy_servis'       => new sfValidatorBoolean(array('required' => false)),
      'tv'                   => new sfValidatorBoolean(array('required' => false)),
      'zvire'                => new sfValidatorBoolean(array('required' => false)),
      'adr_map_google'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promovat_hp_do'       => new sfValidatorDate(array('required' => false)),
      'promovat_hp_pos'      => new sfValidatorInteger(array('required' => false)),
      'keywords'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'detail'               => new sfValidatorInteger(array('required' => false)),
      'zobrazeno'            => new sfValidatorInteger(array('required' => false)),
      'imprese'              => new sfValidatorInteger(array('required' => false)),
      'zacatek'              => new sfValidatorDate(array('required' => false)),
      'konec'                => new sfValidatorDate(array('required' => false)),
      'poradi'               => new sfValidatorInteger(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'slug'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Zajezdy', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Zajezdy', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('zajezdy[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Zajezdy';
  }

}
