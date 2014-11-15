<?php

/**
 * akce actions.
 *
 * @package    caitalia
 * @subpackage akce
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aktualityActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $akt =
                        Doctrine::getTable('Aktuality')
                        ->createQuery('Aktuality a')
                        ->where('(a.zacatek = "0000-00-00 00:00:00" or a.zacatek <= current_date() or a.zacatek IS NULL) and
                         (a.konec = "0000-00-00 00:00:00" or a.konec >= current_date() or a.konec IS NULL) and
                         (a.imprese IS NULL or a.imprese>0)')
                        ->andWhere('a.publikovat = 1')
                        ->orderBy('a.publikovano desc');

        $this->akt = new Doctrine_Pager($akt,
                        $request->getParameter('page', 1),
                        10);

        $seo = Doctrine::getTable('seo')
                        ->findOneByName('aktuality');

        $response = $this->getResponse();
        if ($seo)
        {
            $response->addMeta('keywords', $seo->getKeywords());
            $response->addMeta('description', $seo->getDescription());
            $response->setTitle(($seo->getTitle() ? $seo->getTitle() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName() . ($request->getParameter('page', 1) == 1 ? '' : ' strana ' . $request->getParameter('page', 1)));
        }
        $this->seo = $seo;
    }

    public function executeDetail(sfWebRequest $request)
    {
        $akt = Doctrine::getTable('Aktuality')
                        ->createQuery('Aktuality a')
                        ->leftjoin('a.Zajezdy z')
                        ->where('a.slug = "' . $request->getParameter('slug', '') . '"')
                        ->execute();

        if ($akt[0]->getZajezdyId()!=0 and $akt[0]->getZajezdyId()!=null)
        {
            $this->redirect('item/index?slug=' . $akt[0]->getZajezdy()->getSlug());
        }
        else
        {
            $this->akt_det = $akt[0];

            $response = $this->getResponse();
            $response->addMeta('keywords', $this->akt_det->getKeywords());
            $response->addMeta('description', $this->akt_det->getDescription());
            $response->setTitle(($this->akt_det->getName() ? $this->akt_det->getName() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());
        }
    }

}
