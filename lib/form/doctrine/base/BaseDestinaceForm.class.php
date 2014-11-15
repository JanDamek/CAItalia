<?php

/**
 * Destinace form base class.
 *
 * @method Destinace getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDestinaceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'name'                => new sfWidgetFormInputText(),
      'img'                 => new sfWidgetFormInputText(),
      'kat'                 => new sfWidgetFormChoice(array('choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'popis'               => new sfWidgetFormTextarea(),
      'keywords'            => new sfWidgetFormInputText(),
      'description'         => new sfWidgetFormInputText(),
      'poradi'              => new sfWidgetFormInputText(),
      'adr_map_google'      => new sfWidgetFormInputText(),
      'regiony_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Regiony'), 'add_empty' => true)),
      'publikovat_italie'   => new sfWidgetFormInputCheckbox(),
      'poradi_italie'       => new sfWidgetFormInputText(),
      'cena_od_italie'      => new sfWidgetFormInputText(),
      'cena_od_italie_ozna' => new sfWidgetFormInputText(),
      'popisek_italie'      => new sfWidgetFormTextarea(),
      'pozice_italie_x'     => new sfWidgetFormInputText(),
      'pozice_italie_y'     => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
      'slug'                => new sfWidgetFormInputText(),
      'kategorie_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Kategorie')),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                => new sfValidatorString(array('max_length' => 50)),
      'img'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'kat'                 => new sfValidatorChoice(array('choices' => array(0 => 'Leto', 1 => 'Zima', 2 => 'Agroturistika'), 'required' => false)),
      'popis'               => new sfValidatorString(array('required' => false)),
      'keywords'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'poradi'              => new sfValidatorInteger(array('required' => false)),
      'adr_map_google'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'regiony_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Regiony'), 'required' => false)),
      'publikovat_italie'   => new sfValidatorBoolean(array('required' => false)),
      'poradi_italie'       => new sfValidatorInteger(array('required' => false)),
      'cena_od_italie'      => new sfValidatorNumber(array('required' => false)),
      'cena_od_italie_ozna' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'popisek_italie'      => new sfValidatorString(array('required' => false)),
      'pozice_italie_x'     => new sfValidatorInteger(array('required' => false)),
      'pozice_italie_y'     => new sfValidatorInteger(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
      'slug'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'kategorie_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Kategorie', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Destinace', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Destinace', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('destinace[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Destinace';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['kategorie_list']))
    {
      $this->setDefault('kategorie_list', $this->object->Kategorie->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveKategorieList($con);

    parent::doSave($con);
  }

  public function saveKategorieList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['kategorie_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Kategorie->getPrimaryKeys();
    $values = $this->getValue('kategorie_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Kategorie', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Kategorie', array_values($link));
    }
  }

}
