<?php

/**
 * BaseGallery
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property clob $description
 * @property string $path
 * @property boolean $is_active
 * @property enum $kat
 * @property Doctrine_Collection $GalleryImages
 * @property Doctrine_Collection $Zajezdy
 * 
 * @method string              getTitle()         Returns the current record's "title" value
 * @method clob                getDescription()   Returns the current record's "description" value
 * @method string              getPath()          Returns the current record's "path" value
 * @method boolean             getIsActive()      Returns the current record's "is_active" value
 * @method enum                getKat()           Returns the current record's "kat" value
 * @method Doctrine_Collection getGalleryImages() Returns the current record's "GalleryImages" collection
 * @method Doctrine_Collection getZajezdy()       Returns the current record's "Zajezdy" collection
 * @method Gallery             setTitle()         Sets the current record's "title" value
 * @method Gallery             setDescription()   Sets the current record's "description" value
 * @method Gallery             setPath()          Sets the current record's "path" value
 * @method Gallery             setIsActive()      Sets the current record's "is_active" value
 * @method Gallery             setKat()           Sets the current record's "kat" value
 * @method Gallery             setGalleryImages() Sets the current record's "GalleryImages" collection
 * @method Gallery             setZajezdy()       Sets the current record's "Zajezdy" collection
 * 
 * @package    caitalia
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGallery extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gallery');
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             'notnull' => false,
             ));
        $this->hasColumn('path', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
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


        $this->index('IsActive', array(
             'fields' => 
             array(
              'is_active' => 
              array(
              'sorting' => 'ASC',
              ),
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('GalleryImage as GalleryImages', array(
             'local' => 'id',
             'foreign' => 'gallery_id'));

        $this->hasMany('Zajezdy', array(
             'local' => 'id',
             'foreign' => 'gallery_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => false,
             'fields' => 
             array(
              0 => 'title',
             ),
             'canUpdate' => true,
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}