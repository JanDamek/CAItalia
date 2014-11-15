<?php

use_helper('Navigation');

class homepageComponents extends sfComponents {

    public function executeSeo_text()
    {
        $this->seo_text = Doctrine::getTable('seo_text')
                ->createQuery('Seo_text s')
                ->orderby('s.title')
                ->where('s.published=?',1)
                ->execute();
    }
    
    public function executeHp_filter(sfWebRequest $request)
    {
        $destinace = $this->getVar('destinace');
        if ($destinace){
            $this->destinace_id = $destinace->getId();
        }else{
        $this->destinace_id = $request->getParameter('destinace_id', '');
        }
        $this->oblast_id = $request->getParameter('oblast_id', '');
        $this->typ_id = $request->getParameter('typ_id', '');
        $this->pocet_osob = $request->getParameter('pocet_osob', '');

        $this->destinace = Doctrine::getTable('Destinace')
                ->createQuery('Destinace d')
                ->orderBy('d.name')
                ->execute();

        $oblast = Doctrine::getTable('Oblast')
                ->createQuery('Oblast d')
                ->orderBy('d.name');

        if (is_numeric($this->destinace_id)){
            $oblast->addWhere('d.destinace_id = ?',$this->destinace_id);
        }
        $this->oblast = $oblast->execute();

        $this->typ = Doctrine::getTable('Typ')
                ->createQuery('Typ d')
                ->orderBy('d.name')
                ->execute();
    }

    public function executeHp_akt()
    {
        $this->hp_akt = Doctrine::getTable('Aktuality')
                        ->createQuery('Aktuality a')
                        ->where('(a.zacatek = "0000-00-00 00:00:00" or a.zacatek <= current_date() or a.zacatek IS NULL) and
                         (a.konec = "0000-00-00 00:00:00" or a.konec >= current_date() or a.konec IS NULL) and
                         (a.imprese IS NULL or a.imprese>0)')
                        ->andWhere('a.publikovat = 1')
                        ->orderBy('a.publikovano desc')
                        ->limit(2)
                        ->execute();
    }

    public function executeHp_kat_detail()
    {
        $this->detail = Doctrine::getTable('Destinace')
                        ->createQuery('Destinace d')
                        ->leftjoin('d.Kategorie k')
                        ->where('k.id = ' . $this->getVar('kat_id'))
                        ->orderby('d.poradi')
                        ->execute();
    }

    public function executeHp_kategorie()
    {
        $this->kategorie = Doctrine::getTable('Kategorie')
                        ->createQuery('Kategorie k')
                        ->orderby('k.poradi')
                        ->execute();
    }

    public function executeRychlykontakt()
    {
        $this->setting = NavigationHelper::getSetting();
    }

    public function executeReklama1()
    {
        $this->reklama1 = Doctrine::getTable('Reklama')
                        ->createQuery('Reklama r')
                        ->where('(r.zacatek = "0000-00-00 00:00:00" or r.zacatek <= current_date() or r.zacatek IS NULL) and
                         (r.konec = "0000-00-00 00:00:00" or r.konec >= current_date() or r.konec IS NULL) and
                         (r.imprese IS NULL or r.imprese>0)')
                        ->andWhere('r.reklama_pozice_id = 1')
                        ->orderBy('r.zobrazeno')
                        ->limit(1)
                        ->execute();
    }

    public function executeReklama2()
    {
        $this->reklama2 = Doctrine::getTable('Reklama')
                        ->createQuery('Reklama r')
                        ->where('(r.zacatek = "0000-00-00 00:00:00" or r.zacatek <= current_date() or r.zacatek IS NULL) and
                         (r.konec = "0000-00-00 00:00:00" or r.konec >= current_date() or r.konec IS NULL) and
                         (r.imprese IS NULL or r.imprese>0)')
                        ->andWhere('r.reklama_pozice_id = 2')
                        ->orderBy('r.zobrazeno')
                        ->limit(1)
                        ->execute();
    }

    public function executeReklama3()
    {
        $this->reklama3 = Doctrine::getTable('Reklama')
                        ->createQuery('Reklama r')
                        ->where('(r.zacatek = "0000-00-00 00:00:00" or r.zacatek <= current_date() or r.zacatek IS NULL) and
                         (r.konec = "0000-00-00 00:00:00" or r.konec >= current_date() or r.konec IS NULL) and
                         (r.imprese IS NULL or r.imprese>0)')
                        ->andWhere('r.reklama_pozice_id = 3')
                        ->orderBy('r.zobrazeno')
                        ->limit(1)
                        ->execute();
    }

    public function executeHp_img()
    {
        $this->hp_img = Doctrine::getTable('Hp_img')
                        ->createQuery('Hp_img r')
                        ->where('(r.zacatek = "0000-00-00 00:00:00" or r.zacatek <= current_date() or r.zacatek IS NULL)')
                        ->andWhere('(r.konec = "0000-00-00 00:00:00" or r.konec >= current_date() or r.konec IS NULL)')
                        ->andWhere('(r.imprese IS NULL or r.imprese>0)')
                        ->orderBy('r.zobrazeno')
                        ->limit(1)
                        ->execute();
    }

    public function executeHp_promovat()
    {
        $setting = NavigationHelper::getSetting();
        if ($setting)
        {
            $pocet = $setting->getPocetNaHp();
        }
        else
        {
            $pocet = 8;
        }
        //echo $pocet;
        $this->hp_promovat = Doctrine::getTable('Hp_promovat')
                        ->createQuery('Hp_promovat r')
                        ->where('r.zacatek = "0000-00-00 00:00:00" or r.zacatek <= current_date() or r.zacatek IS NULL')
                        ->andWhere('r.konec = "0000-00-00 00:00:00" or r.konec >= current_date() or r.konec IS NULL')
                        ->andWhere('r.imprese IS NULL or r.imprese>0')
                        ->leftJoin('r.Zajezdy z')
                        ->leftjoin('z.Destinace d')
                        ->leftjoin('d.Kategorie k')
                        ->leftjoin('d.Oblast o')
                                ->leftjoin('z.CenaTyp ct')
                        ->andWhere('z.publikovat = 1')
                        ->andWhere('(z.zacatek = "0000-00-00 00:00:00" or z.zacatek <= current_date() or z.zacatek IS NULL) and
                         (z.konec = "0000-00-00 00:00:00" or z.konec >= current_date() or z.konec IS NULL) and
                         (z.imprese IS NULL or z.imprese>0)')
                        ->orderBy('r.skupina, r.zobrazeno')
                        ->limit($pocet)
                        ->execute();
        $hp_promo = '';
        $promovat = array();
        
        foreach ($this->hp_promovat as $item)
            $promovat[] = $item->getId();

        $hp_promo = implode(',', $promovat);
        NavigationHelper::setPromovat($hp_promo);
    }

    public function executeHp_items()
    {
        $promovat = NavigationHelper::getPromovat();
        $pocet = count(explode(',', $promovat));
        $setting = NavigationHelper::getSetting();
        if ($setting)
        {
            $pocet = $setting->getPocetNaHp() - $pocet;
        }
        else
        {
            $pocet = 8 - $pocet;
        }

        //echo $pocet;
        if ($pocet){
        $hp_item = Doctrine::getTable('Zajezdy')
                        ->createQuery('Zajezdy z')
                        ->leftjoin('z.Destinace d')
                        ->leftjoin('d.Kategorie k')
                        ->leftjoin('d.Oblast o')
                ->leftjoin('z.CenaTyp ct')
                        ->where('(z.zacatek = "0000-00-00 00:00:00" or z.zacatek <= current_date() or z.zacatek IS NULL) and
                         (z.konec = "0000-00-00 00:00:00" or z.konec >= current_date() or z.konec IS NULL) and
                         (z.imprese IS NULL or z.imprese>0)')
                        ->andWhere('z.publikovat = 1')
                        ->orderBy('z.promovat_hp_do desc, z.promovat_hp_pos ,z.id desc');
        if (!empty($promovat))
            $hp_item->andWhere('z.id not in (' . $promovat . ')');

        $this->hp_item = $hp_item->limit($pocet)
                        ->execute();
        }
    }

}