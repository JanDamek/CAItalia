<?php

/**
 * lastminute actions.
 *
 * @package    caitalia
 * @subpackage lastminute
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class lastminuteActions extends sfActions {

    public function executeIndex(sfWebRequest $request)
    {
        $this->destinace_id = $request->getParameter('destinace_id', '');
        $this->oblast_id = $request->getParameter('oblast_id', '');
        $this->typ_id = $request->getParameter('typ_id', '');
        $this->pocet_osob = $request->getParameter('pocet_osob', '');

        $hp_item =
                        Doctrine::getTable('Zajezdy')
                        ->createQuery('Zajezdy z')
                        ->leftjoin('z.Destinace d')
                        ->leftjoin('d.Oblast o')
                        ->leftjoin('d.Kategorie k')
                ->leftjoin('z.CenaTyp ct')
                        ->where('(z.zacatek = "0000-00-00 00:00:00" or z.zacatek >= current_date() or z.zacatek IS NULL) and 
                         (z.konec = "0000-00-00 00:00:00" or z.konec <= current_date() or z.konec IS NULL) and 
                         (z.imprese IS NULL or z.imprese>0)')
                        ->andWhere('z.publikovat = 1')
                        ->orderBy('z.id desc');

        $hp_item->andWhere('z.last_minute = 1');
        
        if ($this->getVar('destinace_id') <> '')
            $hp_item->andWhere('z.destinace_id = ?', $this->getVar('destinace_id'));

        if ($this->getVar('oblast_id') <> '')
            $hp_item->andWhere('z.oblast_id = ?', $this->getVar('oblast_id'));

        if ($this->getVar('typ_id') <> '')
            $hp_item->andWhere('z.typ_id = ?', $this->getVar('typ_id'));

        if ($this->getVar('pocet_osob') <> '')
            $hp_item->andWhere('z.max_pocet_osob >= ?', $this->getVar('pocet_osob'));

        $this->hp_item = new Doctrine_Pager($hp_item,
                        $request->getParameter('page', 1),
                        10);

        $seo = Doctrine::getTable('seo')
                        ->findOneByName('lastminute');

        $response = $this->getResponse();
        if ($seo)
        {
            $response->addMeta('keywords', $seo->getKeywords());
            $response->addMeta('description', $seo->getDescription());
            $response->setTitle(($seo->getTitle()?$seo->getTitle().' | ':'') . NavigationHelper::getSetting()->getSiteName(). ($request->getParameter('page', 1)==1?'':' strana '.$request->getParameter('page', 1)));
        }
        $this->seo = $seo;
    }

}
