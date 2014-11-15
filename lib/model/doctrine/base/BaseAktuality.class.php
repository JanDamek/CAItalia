<?php

/**
 * BaseAktuality
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property enum $kat
 * @property clob $perex
 * @property string $perex_img
 * @property clob $popis
 * @property boolean $publikovat
 * @property date $publikovano
 * @property string $keywords
 * @property string $description
 * @property integer $zajezdy_id
 * @property integer $zobrazeno
 * @property integer $detail
 * @property integer $imprese
 * @property date $zacatek
 * @property date $konec
 * @property Zajezdy $Zajezdy
 * 
 * @method integer   getId()          Returns the current record's "id" value
 * @method string    getName()        Returns the current record's "name" value
 * @method enum      getKat()         Returns the current record's "kat" value
 * @method clob      getPerex()       Returns the current record's "perex" value
 * @method string    getPerexImg()    Returns the current record's "perex_img" value
 * @method clob      getPopis()       Returns the current record's "popis" value
 * @method boolean   getPublikovat()  Returns the current record's "publikovat" value
 * @method date      getPublikovano() Returns the current record's "publikovano" value
 * @method string    getKeywords()    Returns the current record's "keywords" value
 * @method string    getDescription() Returns the current record's "description" value
 * @method integer   getZajezdyId()   Returns the current record's "zajezdy_id" value
 * @method integer   getZobrazeno()   Returns the current record's "zobrazeno" value
 * @method integer   getDetail()      Returns the current record's "detail" value
 * @method integer   getImprese()     Returns the current record's "imprese" value
 * @method date      getZacatek()     Returns the current record's "zacatek" value
 * @method date      getKonec()       Returns the current record's "konec" value
 * @method Zajezdy   getZajezdy()     Returns the current record's "Zajezdy" value
 * @method Aktuality setId()          Sets the current record's "id" value
 * @method Aktuality setName()        Sets the current record's "name" value
 * @method Aktuality setKat()         Sets the current record's "kat" value
 * @method Aktuality setPerex()       Sets the current record's "perex" value
 * @method Aktuality setPerexImg()    Sets the current record's "perex_img" value
 * @method Aktuality setPopis()       Sets the current record's "popis" value
 * @method Aktuality setPublikovat()  Sets the current record's "publikovat" value
 * @method Aktuality setPublikovano() Sets the current record's "publikovano" value
 * @method Aktuality setKeywords()    Sets the current record's "keywords" value
 * @method Aktuality setDescription() Sets the current record's "description" value
 * @method Aktuality setZajezdyId()   Sets the current record's "zajezdy_id" value
 * @method Aktuality setZobrazeno()   Sets the current record's "zobrazeno" value
 * @method Aktuality setDetail()      Sets the current record's "detail" value
 * @method Aktuality setImprese()     Sets the current record's "imprese" value
 * @method Aktuality setZacatek()     Sets the current record's "zacatek" value
 * @method Aktuality setKonec()       Sets the current record's "konec" value
 * @method Aktuality setZajezdy()     Sets the current record's "Zajezdy" value
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAktuality extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('aktuality');
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
        $this->hasColumn('perex', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('perex_img', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('popis', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('publikovat', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('publikovano', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('zajezdy_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('zobrazeno', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('detail', 'integer', null, array(
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
        $this->hasOne('Zajezdy', array(
             'local' => 'zajezdy_id',
             'foreign' => 'id'));

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