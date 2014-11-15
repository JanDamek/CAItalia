<?php

/**
 * destinace actions.
 *
 * @package    caitalia
 * @subpackage destinace
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class destinaceActions extends sfActions {

    /**
     * Executes list action
     *
     * @param sfRequest $request A request object
     */
    public function executeDetail(sfWebRequest $request) {
        $this->dest = Doctrine::getTable('Destinace')
                ->findOneBySlug($request->getParameter('slug', ''));

        $response = $this->getResponse();
        if ($this->dest) {
            $response->addMeta('keywords', $this->dest->getKeywords());
            $response->addMeta('description', $this->dest->getDescription());
            $response->setTitle(($this->dest->getName() ? $this->dest->getName() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());
        }
        $this->seo = $this->dest;
    }

    /**
     * Executes list action
     *
     * @param sfRequest $request A request object
     */
    public function executeList(sfWebRequest $request) {
        $this->destinace = Doctrine::getTable('Destinace')
                ->createQuery('Destinace d')
                ->orderBy('d.poradi')
                ->execute();

        $seo = Doctrine::getTable('seo')
                ->findOneByName('destinace');

        $response = $this->getResponse();
        if ($seo) {
            $response->addMeta('keywords', $seo->getKeywords());
            $response->addMeta('description', $seo->getDescription());
            $response->setTitle(($seo->getTitle() ? $seo->getTitle() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());
        }
        $this->seo = $seo;
    }

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
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
                ->orderBy('z.poradi DESC, z.zacatek, z.id desc');

        if ($this->getVar('oblast_id') <> '')
            $hp_item->andWhere('z.oblast_id = ?', $this->getVar('oblast_id'));

        if ($this->getVar('typ_id') <> '')
            $hp_item->andWhere('z.typ_id = ?', $this->getVar('typ_id'));

        if ($this->getVar('pocet_osob') <> '')
            $hp_item->andWhere('z.max_pocet_osob >= ?', $this->getVar('pocet_osob'));

        if ($request->getParameter('slug', '') <> '')
            $hp_item->andWhere('d.slug = "' . $request->getParameter('slug', '') . '"');

        $this->hp_item = new Doctrine_Pager($hp_item,
                        $request->getParameter('page', 1),
                        10);

        $seo = Doctrine::getTable('destinace')
                ->findOneBySlug($request->getParameter('slug', ''));

        $response = $this->getResponse();
        if ($seo) {
            $response->addMeta('keywords', $seo->getKeywords());
            $response->addMeta('description', $seo->getDescription());
            $response->setTitle(($seo->getName() ? $seo->getName() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName() . ($request->getParameter('page', 1) == 1 ? '' : ' strana ' . $request->getParameter('page', 1)));
        }
        $this->seo = $seo;
    }

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeKategorie(sfWebRequest $request) {
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
                ->orderBy('z.poradi DESC, z.zacatek, z.id desc');

        if ($this->getVar('oblast_id') <> '')
            $hp_item->andWhere('z.oblast_id = ?', $this->getVar('oblast_id'));

        if ($this->getVar('typ_id') <> '')
            $hp_item->andWhere('z.typ_id = ?', $this->getVar('typ_id'));

        if ($this->getVar('pocet_osob') <> '')
            $hp_item->andWhere('z.max_pocet_osob >= ?', $this->getVar('pocet_osob'));

        if ($request->getParameter('slug', '') <> '')
            $hp_item->andWhere('k.slug = "' . $request->getParameter('slug', '') . '"');

        $this->hp_item = new Doctrine_Pager($hp_item,
                        $request->getParameter('page', 1),
                        10);

        if ($request->getParameter('slug', '') <> '')
            $seo = Doctrine::getTable('kategorie')
                    ->findOneBySlug($request->getParameter('slug', ''));

        if ($seo) {
            $response = $this->getResponse();
            $response->addMeta('keywords', $seo->getKeywords());
            $response->addMeta('description', $seo->getDescription());
            $response->setTitle(($seo->getName() ? $seo->getName() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName() . ($request->getParameter('page', 1) == 1 ? '' : ' strana ' . $request->getParameter('page', 1)));
        }
        if ($seo and $seo->getSeo_text_id()!=NULL)
            $this->seo_text = Doctrine::getTable('seo_text')
                    ->findOneById($seo->getSeo_text_id());
        $this->seo = $seo;
    }

}
