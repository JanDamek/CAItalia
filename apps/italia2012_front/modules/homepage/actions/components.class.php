<?php

use_helper('Navigation');

class homepageComponents extends sfComponents {

    public function executeDolni_odkazy(sfWebRequest $request)
    {
        $this->dolniOdkazy = Doctrine::getTable('DolniOdkazy')
                ->createQuery('')
                ->where('publish=?',1)
                ->andwhere('zobrazit_od IS NULL or zobrazit_od = "0000-00-00 00:00:00" or zobrazit_od>=current_date()')
                ->andWhere('zobrazit_do IS NULL or zobrazit_do = "0000-00-00 00:00:00" or zobrazit_do<=current_date()')
                ->orderBy('poradi')
                ->limit(4)
                ->execute();
    }
    
    public function executeObrazkove_odkazy(sfWebRequest $request)
    {
        $this->obrazkoveOdkazy = Doctrine::getTable('ObrazkoveOdkazy')
                ->createQuery('')
                ->where('publish=?',1)
                ->andwhere('zobrazit_od IS NULL or zobrazit_od = "0000-00-00 00:00:00" or zobrazit_od>=current_date()')
                ->andWhere('zobrazit_do IS NULL or zobrazit_do = "0000-00-00 00:00:00" or zobrazit_do<=current_date()')
                ->orderBy('poradi')
                ->limit(4)
                ->execute();
    }

    public function executeMenu(sfWebRequest $request)
    {
        $this->destinace = Doctrine::getTable('Destinace')
                ->createQuery('Destinace d')
                ->leftJoin('d.Kategorie k')
                ->where('k.id=?',$request->getParameter('kategorie', '1'))
                ->andWhere('d.publikovat_italie=1')
                ->orderBy('poradi_italie')
                ->execute();
    }    

    public function executeIcon(sfWebRequest $request)
    {
        $this->kategorie = $request->getParameter('kategorie', '1');
    }    
    
}