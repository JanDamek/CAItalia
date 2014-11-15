<?php

/**
 * BaseKategorie
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property clob $popis
 * @property integer $poradi
 * @property enum $kat
 * @property string $keywords
 * @property string $description
 * @property Doctrine_Collection $Destinace
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method clob                getPopis()       Returns the current record's "popis" value
 * @method integer             getPoradi()      Returns the current record's "poradi" value
 * @method enum                getKat()         Returns the current record's "kat" value
 * @method string              getKeywords()    Returns the current record's "keywords" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method Doctrine_Collection getDestinace()   Returns the current record's "Destinace" collection
 * @method Kategorie           setId()          Sets the current record's "id" value
 * @method Kategorie           setName()        Sets the current record's "name" value
 * @method Kategorie           setPopis()       Sets the current record's "popis" value
 * @method Kategorie           setPoradi()      Sets the current record's "poradi" value
 * @method Kategorie           setKat()         Sets the current record's "kat" value
 * @method Kategorie           setKeywords()    Sets the current record's "keywords" value
 * @method Kategorie           setDescription() Sets the current record's "description" value
 * @method Kategorie           setDestinace()   Sets the current record's "Destinace" collection
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseKategorie extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('kategorie');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('popis', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('poradi', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('kat', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Leto',
              1 => 'Zima',
              2 => 'Agroturistika',
             ),
             'default' => 'Leto',
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));


        $this->index('sorting', array(
             'fields' => 
             array(
              'poradi' => 
              array(
              'sorting' => 'ASC',
              ),
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Destinace', array(
             'refClass' => 'DestinaceKategorie',
             'local' => 'destinace_id',
             'foreign' => 'kategorie_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'name',
             ),
             'canUpdate' => true,
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}