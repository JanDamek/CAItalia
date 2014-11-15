<?php

/**
 * system actions.
 *
 * @package    femina.cz
 * @subpackage system
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class systemActions extends sfActions
{

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->forward('default', 'module');
    }

    /**
     * natahne obsah pro page404
     *
     * @param sfWebRequest $request
     */
    public function executePage404(sfWebRequest $request)
    {
    }

    /**
     * generuje RSS
     *
     * @return <type>
     */
    public function executeRss()
    {
        $this->getResponse()->setContentType('application/xml');

        $this->items = Doctrine::getTable('Zajezdy')
                        ->createQuery('Zajezdy z')
                        ->leftjoin('z.Destinace d')
                        ->leftjoin('d.Oblast o')
                        ->leftjoin('d.Kategorie k')
                        ->where('(z.zacatek = "0000-00-00 00:00:00" or z.zacatek >= current_date() or z.zacatek IS NULL) and
                         (z.konec = "0000-00-00 00:00:00" or z.konec <= current_date() or z.konec IS NULL) and
                         (z.imprese IS NULL or z.imprese>0)')
                        ->andWhere('z.publikovat = 1')
                        ->orderBy('z.zacatek, z.id desc')
                        ->limit(20)
                        ->execute();

        return $this->renderPartial('system/rss');
    }

    /**
     * vytvori sitemap
     *
     * @return <type>
     */
    public function executeSitemap()
    {
        $this->getResponse()->setContentType('application/xml');

        $this->items = Doctrine::getTable('Destinace')
            ->createQuery('a')
            ->execute();

        $this->articles = Doctrine::getTable('Zajezdy')
                        ->createQuery('Zajezdy z')
                        ->leftjoin('z.Destinace d')
                        ->leftjoin('d.Oblast o')
                        ->leftjoin('d.Kategorie k')
                        ->where('(z.zacatek = "0000-00-00 00:00:00" or z.zacatek >= current_date() or z.zacatek IS NULL) and
                         (z.konec = "0000-00-00 00:00:00" or z.konec <= current_date() or z.konec IS NULL) and
                         (z.imprese IS NULL or z.imprese>0)')
                        ->andWhere('z.publikovat = 1')
                        ->orderBy('z.zacatek, z.id desc')
            ->execute();
        return $this->renderPartial('system/sitemap');
    }

    public function executeReindex()
    {
      set_time_limit(1800);
      Item::luceneReindex();
      
      return sfView::NONE;
    }
    

}
