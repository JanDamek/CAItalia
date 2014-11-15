<?php

/**
 * Kategorie form base class.
 *
 * @method Kategorie getObject() Returns the current form's model object
 *
 * @package    caitalia
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseKategorieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'popis'          => new sfWidgetFormTextarea(),
      'poradi'         => new sfWidgetFormInputText(),
      'kat'            => new sfWidgetFormChoice(array('choices' => array('Leto' => 'Leto', 'Zima' => 'Zima', 'Agroturistika' => 'Agroturistika'))),
      'keywords'       => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
      'destinace_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Destinace')),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 50)),
      'popis'          => new sfValidatorString(array('required' => false)),
      'poradi'         => new sfValidatorInteger(array('required' => false)),
      'kat'            => new sfValidatorChoice(array('choices' => array(0 => 'Leto', 1 => 'Zima', 2 => 'Agroturistika'), 'required' => false)),
      'keywords'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'destinace_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Destinace', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Kategorie', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Kategorie', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('kategorie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kategorie';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['destinace_list']))
    {
      $this->setDefault('destinace_list', $this->object->Destinace->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveDestinaceList($con);

    parent::doSave($con);
  }

  public function saveDestinaceList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['destinace_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Destinace->getPrimaryKeys();
    $values = $this->getValue('destinace_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Destinace', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Destinace', array_values($link));
    }
  }

}
