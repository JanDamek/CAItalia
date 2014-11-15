<?php

/**
 * ZajezdyTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ZajezdyTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object ZajezdyTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Zajezdy');
    }

    static public function getLuceneIndex()
    {
        ProjectConfiguration::registerZend();

        if (file_exists($index = self::getLuceneIndexFile()))
        {
            return Zend_Search_Lucene::open($index);
        }

        return Zend_Search_Lucene::create($index);
    }

    static public function getLuceneIndexFile()
    {
        return sfConfig::get('sf_data_dir') . '/item.' . sfConfig::get('sf_environment') . '.index';
    }

    public function getForLuceneQuery($query, $options = array())
    {
        $hits = self::getLuceneIndex()->find($query);

        $pks = array();
        foreach ($hits as $hit)
        {
            $pks[] = $hit->pk;
        }

        if (empty($pks))
        {
            return Doctrine_Query::create()
                    ->from('Zajezdy z')
                    ->where('FALSE');
        }

        $q = Doctrine_Query::create()
                        ->from('Zajezdy z')
                        ->leftjoin('z.Destinace d')
                        ->leftjoin('d.Oblast o')
                        ->leftjoin('d.Kategorie k')
                        ->where('(z.zacatek = "0000-00-00 00:00:00" or z.zacatek >= current_date() or z.zacatek IS NULL) and
                         (z.konec = "0000-00-00 00:00:00" or z.konec <= current_date() or z.konec IS NULL) and
                         (z.imprese IS NULL or z.imprese>0)')
                        ->andWhere('z.publikovat = 1')
                        ->whereIn('z.id', $pks)
                        ->orderBy('z.id desc');

        return $q;
    }
    
    function retrieveForSelect($q, $limit = 10) {
        $q = Doctrine_Query::create()
                        ->from('Zajezdy')
                        ->andWhere('title like ?', '%' . $q . '%')
                        ->addOrderBy('title')
                        ->limit($limit);
        $items = array();
        foreach ($q->execute() as $item) {
            $items[$item->getId()] = (string) $item;
        }
        return $items;
    }    

}