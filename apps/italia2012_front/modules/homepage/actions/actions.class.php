<?php

/**
 * homepage actions.
 *
 * @package    caitalia
 * @subpackage homepage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        //$this->forward('default', 'module');
    }

    public function executeMapa(sfWebRequest $request) {
        $this->destinace = Doctrine::getTable('Destinace')
                ->createQuery('Destinace d')
                ->where('d.id=?', $request->getParameter('destinace', 1))
                ->execute();

        if ($this->destinace and $this->destinace->count() > 0)
            $this->regiony = Doctrine::getTable('Regiony')
                    ->createQuery('Regiony r')
                    ->where('r.id=?', $this->destinace[0]->getRegionyId())
                    ->execute();
    }

    public function executeDestinace(sfWebRequest $request) {
        $this->destinace = Doctrine::getTable('Destinace')
                ->createQuery('Destinace d')
                ->leftJoin('d.Kategorie k')
                ->where('k.id=?', $request->getParameter('kategorie', 1))
                ->andWhere('d.publikovat_italie=1')
                ->orderBy('poradi_italie')
                ->execute();
    }
    

    public function executeIcon(sfWebRequest $request)
    {
        $this->kategorie = $request->getParameter('kategorie', '1');
    }     

    public function executeRegion(sfWebRequest $request) {
        $this->regiony = Doctrine::getTable('Regiony')
                ->createQuery('Regiony r')
                ->where('r.id=?', $request->getParameter('id'))
                ->execute();
        
        $this->destinace = Doctrine::getTable('Destinace')
                ->createQuery('Destinace d')
                ->where('d.regiony_id=?',$request->getParameter('id',-1))
                ->execute();

        $this->id = $request->getParameter('id');
    }

}
