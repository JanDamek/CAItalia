<?php

/**
 * BaseObrazkoveOdkazy
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $url
 * @property string $img
 * @property integer $poradi
 * @property boolean $publish
 * @property date $zobrazit_od
 * @property date $zobrazit_do
 * 
 * @method string          getName()        Returns the current record's "name" value
 * @method string          getUrl()         Returns the current record's "url" value
 * @method string          getImg()         Returns the current record's "img" value
 * @method integer         getPoradi()      Returns the current record's "poradi" value
 * @method boolean         getPublish()     Returns the current record's "publish" value
 * @method date            getZobrazitOd()  Returns the current record's "zobrazit_od" value
 * @method date            getZobrazitDo()  Returns the current record's "zobrazit_do" value
 * @method ObrazkoveOdkazy setName()        Sets the current record's "name" value
 * @method ObrazkoveOdkazy setUrl()         Sets the current record's "url" value
 * @method ObrazkoveOdkazy setImg()         Sets the current record's "img" value
 * @method ObrazkoveOdkazy setPoradi()      Sets the current record's "poradi" value
 * @method ObrazkoveOdkazy setPublish()     Sets the current record's "publish" value
 * @method ObrazkoveOdkazy setZobrazitOd()  Sets the current record's "zobrazit_od" value
 * @method ObrazkoveOdkazy setZobrazitDo()  Sets the current record's "zobrazit_do" value
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseObrazkoveOdkazy extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('obrazkove_odkazy');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('img', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('poradi', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('publish', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('zobrazit_od', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('zobrazit_do', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}