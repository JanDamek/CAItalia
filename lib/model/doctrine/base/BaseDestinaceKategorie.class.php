<?php

/**
 * BaseDestinaceKategorie
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $destinace_id
 * @property integer $kategorie_id
 * 
 * @method integer            getDestinaceId()  Returns the current record's "destinace_id" value
 * @method integer            getKategorieId()  Returns the current record's "kategorie_id" value
 * @method DestinaceKategorie setDestinaceId()  Sets the current record's "destinace_id" value
 * @method DestinaceKategorie setKategorieId()  Sets the current record's "kategorie_id" value
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDestinaceKategorie extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('destinace_kategorie');
        $this->hasColumn('destinace_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('kategorie_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}