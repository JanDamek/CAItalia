<?php

/**
 * BaseStranky
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property clob $popis
 * @property string $keywords
 * @property string $description
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getTitle()       Returns the current record's "title" value
 * @method clob    getPopis()       Returns the current record's "popis" value
 * @method string  getKeywords()    Returns the current record's "keywords" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method Stranky setId()          Sets the current record's "id" value
 * @method Stranky setName()        Sets the current record's "name" value
 * @method Stranky setTitle()       Sets the current record's "title" value
 * @method Stranky setPopis()       Sets the current record's "popis" value
 * @method Stranky setKeywords()    Sets the current record's "keywords" value
 * @method Stranky setDescription() Sets the current record's "description" value
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStranky extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('stranky');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'unique' => true,
             'length' => 50,
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('popis', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'name',
             ),
             'canUpdate' => false,
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}