<?php

/**
 * BaseHp_img
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $img
 * @property string $alt
 * @property string $title
 * @property string $url
 * @property integer $zobrazeno
 * @property integer $imprese
 * @property date $zacatek
 * @property date $konec
 * 
 * @method integer getId()        Returns the current record's "id" value
 * @method string  getImg()       Returns the current record's "img" value
 * @method string  getAlt()       Returns the current record's "alt" value
 * @method string  getTitle()     Returns the current record's "title" value
 * @method string  getUrl()       Returns the current record's "url" value
 * @method integer getZobrazeno() Returns the current record's "zobrazeno" value
 * @method integer getImprese()   Returns the current record's "imprese" value
 * @method date    getZacatek()   Returns the current record's "zacatek" value
 * @method date    getKonec()     Returns the current record's "konec" value
 * @method Hp_img  setId()        Sets the current record's "id" value
 * @method Hp_img  setImg()       Sets the current record's "img" value
 * @method Hp_img  setAlt()       Sets the current record's "alt" value
 * @method Hp_img  setTitle()     Sets the current record's "title" value
 * @method Hp_img  setUrl()       Sets the current record's "url" value
 * @method Hp_img  setZobrazeno() Sets the current record's "zobrazeno" value
 * @method Hp_img  setImprese()   Sets the current record's "imprese" value
 * @method Hp_img  setZacatek()   Sets the current record's "zacatek" value
 * @method Hp_img  setKonec()     Sets the current record's "konec" value
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHp_img extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hp_img');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('img', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('alt', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('title', 'string', 250, array(
             'type' => 'string',
             'unique' => true,
             'length' => 250,
             ));
        $this->hasColumn('url', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('zobrazeno', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('imprese', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('zacatek', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('konec', 'date', null, array(
             'type' => 'date',
             ));


        $this->index('datum', array(
             'fields' => 
             array(
              'zacatek' => 
              array(
              'sorting' => 'ASC',
              ),
              'konec' => 
              array(
              'sorting' => 'ASC',
              ),
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}