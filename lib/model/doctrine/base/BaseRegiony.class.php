<?php

/**
 * BaseRegiony
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $img_small
 * @property Doctrine_Collection $Destinace
 * @property Regiony $Regiony
 * 
 * @method integer             getId()        Returns the current record's "id" value
 * @method string              getName()      Returns the current record's "name" value
 * @method string              getImg()       Returns the current record's "img" value
 * @method string              getImgSmall()  Returns the current record's "img_small" value
 * @method Doctrine_Collection getDestinace() Returns the current record's "Destinace" collection
 * @method Regiony             getRegiony()   Returns the current record's "Regiony" value
 * @method Regiony             setId()        Sets the current record's "id" value
 * @method Regiony             setName()      Sets the current record's "name" value
 * @method Regiony             setImg()       Sets the current record's "img" value
 * @method Regiony             setImgSmall()  Sets the current record's "img_small" value
 * @method Regiony             setDestinace() Sets the current record's "Destinace" collection
 * @method Regiony             setRegiony()   Sets the current record's "Regiony" value
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegiony extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('regiony');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('img', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('img_small', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Regiony as Destinace', array(
             'local' => 'regiony_id',
             'foreign' => 'id'));

        $this->hasOne('Regiony', array(
             'local' => 'id',
             'foreign' => 'regiony_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}