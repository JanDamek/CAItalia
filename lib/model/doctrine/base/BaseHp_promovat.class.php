<?php

/**
 * BaseHp_promovat
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $zajezdy_id
 * @property integer $imprese
 * @property integer $zobrazeno
 * @property date $zacatek
 * @property date $konec
 * @property integer $skupina
 * @property Zajezdy $Zajezdy
 * 
 * @method integer     getId()         Returns the current record's "id" value
 * @method string      getName()       Returns the current record's "name" value
 * @method integer     getZajezdyId()  Returns the current record's "zajezdy_id" value
 * @method integer     getImprese()    Returns the current record's "imprese" value
 * @method integer     getZobrazeno()  Returns the current record's "zobrazeno" value
 * @method date        getZacatek()    Returns the current record's "zacatek" value
 * @method date        getKonec()      Returns the current record's "konec" value
 * @method integer     getSkupina()    Returns the current record's "skupina" value
 * @method Zajezdy     getZajezdy()    Returns the current record's "Zajezdy" value
 * @method Hp_promovat setId()         Sets the current record's "id" value
 * @method Hp_promovat setName()       Sets the current record's "name" value
 * @method Hp_promovat setZajezdyId()  Sets the current record's "zajezdy_id" value
 * @method Hp_promovat setImprese()    Sets the current record's "imprese" value
 * @method Hp_promovat setZobrazeno()  Sets the current record's "zobrazeno" value
 * @method Hp_promovat setZacatek()    Sets the current record's "zacatek" value
 * @method Hp_promovat setKonec()      Sets the current record's "konec" value
 * @method Hp_promovat setSkupina()    Sets the current record's "skupina" value
 * @method Hp_promovat setZajezdy()    Sets the current record's "Zajezdy" value
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHp_promovat extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hp_promovat');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('zajezdy_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('imprese', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('zobrazeno', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('zacatek', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('konec', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('skupina', 'integer', null, array(
             'type' => 'integer',
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
              'imprese' => 
              array(
              'sorting' => 'ASC',
              ),
             ),
             ));
        $this->index('sort', array(
             'fields' => 
             array(
              'skupina' => 
              array(
              'sorting' => 'ASC',
              ),
              'zobrazeno' => 
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

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}