<?php

/**
 * item actions.
 *
 * @package    caitalia
 * @subpackage item
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemActions extends sfActions {

    /**
     * Executes list action
     *
     * @param sfRequest $request A request object
     */
    private function fn_sendData(sfWebRequest $request) {
        $this->getResponse()->setContentType('application/json');

        $items = "Zajezdy\r\n";
        $r = "CenyRadky\r\n";
        $ceny = "Ceny\r\n";

        $ceny_t = Doctrine::getTable('Ceny')
                ->createQuery('Ceny c')
                ->orderby('c.name')
                ->execute();

        foreach ($ceny_t as $value) {
            $ceny .=
                    'id:' . $value->getId() .
                    ';name:' . $value->getName() .
                    ';popis:' . $value->getPopis() .
                    ';is_active:' . $value->getIsActive() .
                    ';min_den:' . $value->getMinDen() .
                    ';sl1:' . $value->getSl1() .
                    ';sl1p:' . $value->getSl1p() .
                    ';sl2:' . $value->getSl2() .
                    ';sl2p:' . $value->getSl2p() .
                    ';sl3:' . $value->getSl3() .
                    ';sl3p:' . $value->getSl3p() .
                    ';sl4:' . $value->getSl4() .
                    ';sl4p:' . $value->getSl4p() .
                    ';sl5:' . $value->getSl5() .
                    ';sl5p:' . $value->getSl5p() .
                    ';sl6:' . $value->getSl6() .
                    ';sl6p:' . $value->getSl6p() .
                    ';sl7:' . $value->getSl7() .
                    ';sl7p:' . $value->getSl7p() .
                    ';sl8:' . $value->getSl8() .
                    ';sl8p:' . $value->getSl8p() .
                    ';sl9:' . $value->getSl9() .
                    ';sl9p:' . $value->getSl9p() . ";\r\n";
        }

        $ceny_r = Doctrine::getTable('CenyRadky')
                ->createQuery('CenyRadky cr')
                ->orderby('cr.ceny_id, cr.radek, cr.sl_od')
                ->execute();

        foreach ($ceny_r as $vr) {
            $r .=
                    'id:' . $vr->getId() .
                    ';id_ceny:' . $vr->getCenyId() .
                    ';is_active:' . $vr->getIsActive() .
                    ';radek:' . $vr->getRadek() .
                    ';sl_od:' . date('d-m-Y', StrToTime($vr->getSlOd())) .
                    ';sl_do:' . date('d-m-Y', strtotime($vr->getSlDo())) .
                    ';min_noc:' . $vr->getMinNoc() .
                    ';sl1:' . $vr->getSl1() .
                    ';sl2:' . $vr->getSl2() .
                    ';sl3:' . $vr->getSl3() .
                    ';sl4:' . $vr->getSl4() .
                    ';sl5:' . $vr->getSl5() .
                    ';sl6:' . $vr->getSl6() .
                    ';sl7:' . $vr->getSl7() .
                    ';sl8:' . $vr->getSl8() .
                    ';sl9:' . $vr->getSl9() .
                    ';bonus1:' . $vr->getBonus1() .
                    ';bonus1_p:' . $vr->getBonus1P() .
                    ';bonus2:' . $vr->getBonus2() .
                    ';bonus2_p:' . $vr->getBonus2P() .
                    ';bonus3:' . $vr->getBonus3() .
                    ';bonus3_p:' . $vr->getBonus3P() .
                    ';bonus4:' . $vr->getBonus4() .
                    ';bonus4_p:' . $vr->getBonus4P() .
                    ';bonus5:' . $vr->getBonus5() .
                    ';bonus5_p:' . $vr->getBonus5P() .
                    ';bonus6:' . $vr->getBonus6() .
                    ';bonus6_p:' . $vr->getBonus6P() .
                    ';bonus7:' . $vr->getBonus7() .
                    ';bonus7_p:' . $vr->getBonus7P() .
                    ';bonus8:' . $vr->getBonus8() .
                    ';bonus8_p:' . $vr->getBonus8P() .
                    ';bonus9:' . $vr->getBonus9() .
                    ';bonus9_p:' . $vr->getBonus9P() .
                    ';sleva1:' . $vr->getSleva1() .
                    ';sleva1_p:' . $vr->getSleva1P() .
                    ';sleva2:' . $vr->getSleva2() .
                    ';sleva2_p:' . $vr->getSleva2P() .
                    ';sleva3:' . $vr->getSleva3() .
                    ';sleva3_p:' . $vr->getSleva3P() .
                    ';sleva4:' . $vr->getSleva4() .
                    ';sleva4_p:' . $vr->getSleva4P() .
                    ';sleva5:' . $vr->getSleva5() .
                    ';sleva5_p:' . $vr->getSleva5P() .
                    ';sleva6:' . $vr->getSleva6() .
                    ';sleva6_p:' . $vr->getSleva6P() .
                    ';sleva7:' . $vr->getSleva7() .
                    ';sleva7_p:' . $vr->getSleva7P() .
                    ';sleva8:' . $vr->getSleva8() .
                    ';sleva8_p:' . $vr->getSleva8P() .
                    ';sleva9:' . $vr->getSleva9() .
                    ';sleva9_p:' . $vr->getSleva9P() . ";\r\n";
        }

        $zajezd = Doctrine::getTable('Zajezdy')
                ->createQuery('Zajezdy z')
                ->execute();
        foreach ($zajezd as $item) {
            $items .=
                    'id:' . $item->getId() .
                    ';name:' . $item->getName() .
                    ';ceny_id:' . $item->getCenyId() .
                    ';ceny2_id:' . $item->getCeny2Id() .
                    ';ceny_lm:' . $item->getCenyLastMinuteId() .
                    ';ceny2_lm:' . $item->getCenyLastMinute2Id() . ";\r\n";
        }
//            return $this->renderText(json_encode(array('zajezdy'=>$items,'ceny'=>$ceny,'radky'=>$r)));
        return $this->renderText($items . $ceny . $r);
    }

    private function fn_sendRadky(sfWebRequest $request) {
        $this->getResponse()->setContentType('application/json');
        $pass = $request->getParameter('pass', '');

        $r = "CenyRadky\r\n";

        $ceny_r = Doctrine::getTable('CenyRadky')
                ->createQuery('CenyRadky cr')
                ->where('cr.ceny_id = ' . $pass)
                ->orderby('cr.ceny_id, cr.radek, cr.sl_od')
                ->execute();
        foreach ($ceny_r as $vr) {
            $r .=
                    'id:' . $vr->getId() .
                    ';id_ceny:' . $vr->getCenyId() .
                    ';is_active:' . $vr->getIsActive() .
                    ';radek:' . $vr->getRadek() .
                    ';sl_od:' . date('d-m-Y', StrToTime($vr->getSlOd())) .
                    ';sl_do:' . date('d-m-Y', strtotime($vr->getSlDo())) .
                    ';min_noc:' . $vr->getMinNoc() .
                    ';sl1:' . $vr->getSl1() .
                    ';sl2:' . $vr->getSl2() .
                    ';sl3:' . $vr->getSl3() .
                    ';sl4:' . $vr->getSl4() .
                    ';sl5:' . $vr->getSl5() .
                    ';sl6:' . $vr->getSl6() .
                    ';sl7:' . $vr->getSl7() .
                    ';sl8:' . $vr->getSl8() .
                    ';sl9:' . $vr->getSl9() .
                    ';bonus1:' . $vr->getBonus1() .
                    ';bonus1_p:' . $vr->getBonus1P() .
                    ';bonus2:' . $vr->getBonus2() .
                    ';bonus2_p:' . $vr->getBonus2P() .
                    ';bonus3:' . $vr->getBonus3() .
                    ';bonus3_p:' . $vr->getBonus3P() .
                    ';bonus4:' . $vr->getBonus4() .
                    ';bonus4_p:' . $vr->getBonus4P() .
                    ';bonus5:' . $vr->getBonus5() .
                    ';bonus5_p:' . $vr->getBonus5P() .
                    ';bonus6:' . $vr->getBonus6() .
                    ';bonus6_p:' . $vr->getBonus6P() .
                    ';bonus7:' . $vr->getBonus7() .
                    ';bonus7_p:' . $vr->getBonus7P() .
                    ';bonus8:' . $vr->getBonus8() .
                    ';bonus8_p:' . $vr->getBonus8P() .
                    ';bonus9:' . $vr->getBonus9() .
                    ';bonus9_p:' . $vr->getBonus9P() .
                    ';sleva1:' . $vr->getSleva1() .
                    ';sleva1_p:' . $vr->getSleva1P() .
                    ';sleva2:' . $vr->getSleva2() .
                    ';sleva2_p:' . $vr->getSleva2P() .
                    ';sleva3:' . $vr->getSleva3() .
                    ';sleva3_p:' . $vr->getSleva3P() .
                    ';sleva4:' . $vr->getSleva4() .
                    ';sleva4_p:' . $vr->getSleva4P() .
                    ';sleva5:' . $vr->getSleva5() .
                    ';sleva5_p:' . $vr->getSleva5P() .
                    ';sleva6:' . $vr->getSleva6() .
                    ';sleva6_p:' . $vr->getSleva6P() .
                    ';sleva7:' . $vr->getSleva7() .
                    ';sleva7_p:' . $vr->getSleva7P() .
                    ';sleva8:' . $vr->getSleva8() .
                    ';sleva8_p:' . $vr->getSleva8P() .
                    ';sleva9:' . $vr->getSleva9() .
                    ';sleva9_p:' . $vr->getSleva9P() . ";\r\n";
        }

        return $this->renderText($r);
    }

    public function executeList(sfWebRequest $request) {
        $user = $request->getParameter('user', '');
        $pass = $request->getParameter('pass', '');

        if ($user == 'admin' and $pass == '1234') {
            return $this->fn_sendData($request);
        } elseif ($user == 'cenyradky') {
            return $this->fn_sendRadky($request);
        } elseif ($user == 'remove') {
            $del = Doctrine_Query::create();
            switch ($pass) {
                case 'zajezdy':
                    $del->delete('Zajezdy q');
                    break;
                case 'ceny':
                    $del->delete('Ceny q');
                    break;
                case 'cenyradky':
                    $del->delete('CenyRadky q');
                    break;
            };
            if ($request->getParameter('p', '') == '1234') {
                $d = $request->getParameter('d', '');
                $del->where('q.id = ' . $d)
                        ->execute();
            }
            return sfView::NONE;
        } elseif ($user == 'upload') {
            //echo $request->getParameter('d', '');
            $d = json_decode($request->getParameter('d', ''), true);
            //var_dump($d);
            if (empty($d['id'])) {
                $update = 'INSERT INTO ';
                switch ($pass) {
                    case 'zajezdy':
                        $update .= 'zajezdy SET ';
                        break;
                    case 'ceny':
                        $update .= 'ceny SET ';
                        break;
                    case 'cenyradky':
                        $update .= 'ceny_radky SET ';
                        break;
                };
                foreach ($d as $key => $value)
                    if ($key != 'id') {
                        if (empty($value) or $value == 'null') {
                            $update .= $key . ' = NULL,';
                        } else {
                            $update .= $key . ' = "' . $value . '",';
                        }
                    }
                echo $update;
                $update = substr($update, 0, -1);
                $conn = Doctrine_Manager::connection();
                $conn->execute($update);
            } else {
                $update = Doctrine_Query::create();
                switch ($pass) {
                    case 'zajezdy':
                        $update->update('Zajezdy q');
                        break;
                    case 'ceny':
                        $update->update('Ceny q');
                        break;
                    case 'cenyradky':
                        $update->update('CenyRadky q');
                        break;
                };
                foreach ($d as $key => $value)
                    if ($key != 'id') {
                        if (empty($value) or $value == 'null') {
                            if (strpos($key, 'p') > 0) {
                                echo "update $key to null ";
                                $update->set('q.' . $key, '""');
                            } else {
                                echo $key . '- NULL ? ' . $value;
                                if (strpos($key, '_id') > 0) {
                                    echo "post NULL";
                                    $update->set('q.' . $key, 'NULL');
                                } else {
                                    if (strpos($key, 'sleva') !== 0 or
                                            strpos($key, 'bonus') !== 0) {
                                        echo "post NULL";
                                        $update->set('q.' . $key, 'NULL');
                                    } else {
                                        echo "post ''";
                                        $update->set('q.' . $key, '""');
                                    }
                                }
                            }
                        } else {
                            echo $key . '-' . $value;
                            if (strpos($key, '_id') > 0) {
                                $update->set('q.' . $key, $value);
                            } else {
                                $update->set('q.' . $key, '"' . $value . '"');
                            }
                        }
                        echo "<br />";
                    }
                $update->where('q.id = ' . $d['id'])
                        ->execute();
            }
            //var_dump($d);
            if (!isset($d['id']))
                $d['id'] = 'new';
            return $this->renderText($pass . ' - ok - id:' . $d['id']);
        }
        else
            return sfView::NONE;
    }

    /**
     * Executes Send friend action
     *
     * @param sfRequest $request A request object
     */
    public function executeSend_friend(sfWebRequest $request) {
        $this->f_slug = $request->getParameter('slug', '');
        $this->zajezd = Doctrine::getTable('Zajezdy')
                ->findOneBySlug($this->f_slug);
        $this->destinace = Doctrine::getTable('Destinace')
                ->findOneById($this->zajezd->getDestinaceId());

        $this->hast = md5(rand(0, 99999999));
        setCookie('hast', $this->hast, time() + 600, '/', 'www.caitalia.cz');
        $this->x = rand(0, 5);
        $this->y = rand(0, 5);
        setCookie('hash', md5($this->x . $this->y), time() + 600, '/', 'www.caitalia.cz');
        setCookie('dat', time(), time() + 600, '/', 'www.caitalia.cz');
        $text = $this->renderPartial("item/dotaz");
        $this->renderText($text);
    }

    /**
     * Executes dotaz action
     *
     * @param sfRequest $request A request object
     */
    public function executeDotaz(sfWebRequest $request) {
        $this->f_slug = $request->getParameter('slug', '');
        $this->zajezd = Doctrine::getTable('Zajezdy')
                ->findOneBySlug($this->f_slug);
        $this->destinace = Doctrine::getTable('Destinace')
                ->findOneById($this->zajezd->getDestinaceId());

        $this->hast = md5(rand(0, 99999999));
        setCookie('hast', $this->hast, time() + 600, '/', 'www.caitalia.cz');
        $this->x = rand(0, 5);
        $this->y = rand(0, 5);
        setCookie('hash', md5($this->x . $this->y), time() + 600, '/', 'www.caitalia.cz');
        setCookie('dat', time(), time() + 600, '/', 'www.caitalia.cz');
    }

    /**
     * Executes reserve action
     *
     * @param sfRequest $request A request object
     */
    public function executeReserve(sfWebRequest $request) {
        $this->f_slug = $request->getParameter('slug', '');
        $this->f_ceny = $request->getParameter('cenik', '');
        $this->sl = $request->getParameter('sl', '');
        $this->f_ceny_radky = $request->getParameter('cenik_radky', '');

        $this->zajezd = Doctrine::getTable('Zajezdy')
                ->findOneBySlug($this->f_slug);

        $this->destinace = Doctrine::getTable('Destinace')
                ->findOneById($this->zajezd->getDestinaceId());

        $this->ceny = Doctrine::getTable('Ceny')
                ->findOneById($this->f_ceny);

        $this->ceny_radky = Doctrine::getTable('CenyRadky')
                ->findOneById($this->f_ceny_radky);

        $this->hast = md5(rand(0, 99999999));
        setCookie('hast', $this->hast, time() + 600, '/', 'www.caitalia.cz');
        $this->x = rand(0, 5);
        $this->y = rand(0, 5);
        setCookie('hash', md5($this->x . $this->y), time() + 600, '/', 'www.caitalia.cz');
        setCookie('dat', time(), time() + 600, '/', 'www.caitalia.cz');
    }

    function isValidEmail($email) {
        return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
    }

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->f_ceny = $request->getParameter('ceny', '');
        $this->f_ceny_radky = $request->getParameter('ceny_radky', '');
        $items = Doctrine::getTable('Zajezdy')
                ->createQuery('Zajezdy z')
                ->leftjoin('z.Destinace d')
                ->leftjoin('d.Oblast o')
                ->leftjoin('d.Kategorie k')
                ->leftjoin('z.CenaTyp ct')
                ->where('z.slug like "' . $request->getParameter('slug', '') . '"')
                ->execute();
        if ($items[0]->getGalleryId()) {
            $this->gal = Doctrine::getTable('Gallery')
                    ->createQuery('Gallery g')
                    ->where('g.id = ' . $items[0]->getGalleryId())
                    ->execute();
            if ($this->gal) {
                $this->gal_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->gal[0]->getId())
                        ->execute();
            } else {
                $this->gal_img = null;
            }
        } else {
            $this->gal = null;
        }

        if ($items[0]->getCenyLastMinuteId() and $items[0]->getLastMinute()) {
            $this->lm = Doctrine::getTable('Ceny')
                    ->createQuery('Ceny c')
                    ->where('c.id = ' . $items[0]->getCenyLastMinuteId())
                    ->execute();
            if ($this->lm) {
                $this->lm_radky = Doctrine::getTable('CenyRadky')
                        ->createQuery('CenyRadky c')
                        ->where('c.ceny_id = ' . $this->lm[0]->getId())
                        ->orderby('c.radek, c.sl_od')
                        ->execute();
            }
            else
                $this->lm_radky = null;
        }
        else
            $this->lm = null;

        if ($items[0]->getCenyLastMinute2Id() and $items[0]->getLastMinute()) {
            $this->lm2 = Doctrine::getTable('Ceny')
                    ->createQuery('Ceny c')
                    ->where('c.id = ' . $items[0]->getCenyLastMinute2Id())
                    ->execute();
            if ($this->lm2) {
                $this->lm2_radky = Doctrine::getTable('CenyRadky')
                        ->createQuery('CenyRadky c')
                        ->where('c.ceny_id = ' . $this->lm2[0]->getId())
                        ->orderby('c.radek, c.sl_od')
                        ->execute();
            }
            else
                $this->lm2_radky = null;
        }else
            $this->lm2 = null;


        if ($items[0]->getCenyId()) {
            $this->ceny = Doctrine::getTable('Ceny')
                    ->createQuery('Ceny c')
                    ->where('c.id = ' . $items[0]->getCenyId())
                    ->execute();
            if ($this->ceny) {
                $this->ceny_radky = Doctrine::getTable('CenyRadky')
                        ->createQuery('CenyRadky c')
                        ->where('c.ceny_id = ' . $this->ceny[0]->getId())
                        ->orderby('c.radek, c.sl_od')
                        ->execute();
            }
            else
                $this->ceny_radky = null;
        }
        else
            $this->ceny = null;

        if ($items[0]->getCeny2Id()) {
            $this->ceny2 = Doctrine::getTable('Ceny')
                    ->createQuery('Ceny c')
                    ->where('c.id = ' . $items[0]->getCeny2Id())
                    ->execute();
            if ($this->ceny2) {
                $this->ceny2_radky = Doctrine::getTable('CenyRadky')
                        ->createQuery('CenyRadky c')
                        ->where('c.ceny_id = ' . $this->ceny2[0]->getId())
                        ->orderby('c.radek, c.sl_od')
                        ->execute();
            }
            else
                $this->ceny2_radky = null;
        }
        else
            $this->ceny2 = null;

        $this->item = $items[0];

        $response = $this->getResponse();
        if ($this->item) {
            $response->addMeta('keywords', $this->item->getKeywords());
            $response->addMeta('description', $this->item->getDescription());
            $response->setTitle(($this->item->getName() ? $this->item->getName() . ' | ' : '') . NavigationHelper::getSetting()->getSiteName());

            //facebook meta property
            $response->fb['title'] = $this->item->getName();
            $response->fb['url'] = $this->item->getSlug();
            $response->fb['image'] = $this->item->getObrazek();
            $response->fb['site_name'] = NavigationHelper::getSetting()->getSiteName();
            $response->fb['description'] = $this->item->getPopisList();
        }

//        var_dump($_COOKIE);
//        echo $request->getCookie('dat');
//        echo "/".time();
        if (!empty($_POST) and
                (
                (isset($_POST['send_from']) and
                (!empty($_POST['email']) and !empty($_POST['send_from']))
                ) or
                !empty($_POST['email'])
                )
                and
                ($_POST['predmet'] == $request->getCookie('hast'))
//                and
//                (($request->getCookie('dat')+5)<time())
//                and
//                (md5($_POST['opis']) == $request->getCookie('hash'))
        ) {

            $time = time();
            $hash = $request->getCookie('dat');
            $destinace = $items[0]->getDestinace()->getName();
            $setting = NavigationHelper::getSetting();
            if (!empty($_POST['cena'])) {
                $message = $this->getMailer()->compose(
                        $_POST['email'], array($setting->getEmailRezervace() => $setting->getEmailRezNazev(), $_POST['email'] => $_POST['jmeno'] . ' ' . $_POST['prijmeni']), 'Rezervace zajezdu', <<<EOF
Na strankach www.caitalia.cz byla provedena rezervace zajezdu
 -{$destinace} / {$this->item->getName()}
v terminu : {$_POST['termin']}
v cene : {$_POST['cena']}
pro : {$_POST['jmeno']} {$_POST['prijmeni']}
e-mail : {$_POST['email']}
telefon: {$_POST['telefon']}
pocet noci : {$_POST['poc_noci']}
pro : {$_POST['pro']}

zpráva:
{$_POST['zprava']}

Prosim o provedeni nutnych kroku pro rezervaci.

caitalia.cz.

EOF
                );
            } elseif (empty($_POST['send_from'])) {
                $message = $this->getMailer()->compose(
                        $_POST['email'], array($setting->getEmailDotaz() => $setting->getEmailDotazNazev(), $_POST['email'] => $_POST['jmeno'] . ' ' . $_POST['prijmeni']), 'Dotaz na zajezd', <<<EOF
Na strankach www.caitalia.cz byl vyplnen dotaz na zajezdu
 -{$destinace} / {$this->item->getName()}
pro : {$_POST['jmeno']} {$_POST['prijmeni']}
e-mail : {$_POST['email']}
telefon: {$_POST['telefon']}

zpráva:
{$_POST['zprava']}

Prosim o provedeni nutnych kroku pro odpovezeni dotazu.

caitalia.cz.

EOF
                );
            } else {
                $url = $setting->getWebAdr();
                $url = rtrim($url, '/');
                $link = $url . '/zajezd/' . $this->item->getSlug() . '.html  ' . $this->item->getName();
                $message = $this->getMailer()->compose(
                        $_POST['send_from'], array($setting->getEmailDotaz() => $setting->getEmailDotazNazev(), $_POST['email']), 'Odkaz na zájezd na stránkách caitalia.cz', <<<EOF
Na strankach {$url}/ byl vybrán zajez
 - {$link}
od : {$_POST['from']}
e-mail : {$_POST['send_from']}

zpráva:
{$_POST['zprava']}

Možná Vás tento odkaz bude zajímat.

caitalia.cz.

EOF
                );
            }
            if (
                    ($_POST['predmet'] != $request->getCookie('hast'))
            ) {
                die('Your IP addres is not allowed to access SMTP server.<br />Please contact info@caitalia.cz.');
            }
            $this->getMailer()->send($message);
            $this->getResponse()->setCookie('hast', '', time(), '/', 'www.caitalia.cz');
            $this->getResponse()->setCookie('hash', '', time(), '/', 'www.caitalia.cz');
            $this->getResponse()->setCookie('dat', '', time(), '/', 'www.caitalia.cz');

            if (!empty($_POST['cena'])) {
                $this->send_ok = "Vaše rezervace byla odeslána.";
            }elseif (empty($_POST['send_from'])) {
                $this->send_ok = "Vaš dotaz byla odeslán.";                
            }else{                
                $this->send_ok = "Vaše upozornění známému bylo odesláno.";                
            }
              
        }elseif (!empty($_POST)) {
            $this->send_fail = "Při odesiláni zprávy nastaly potíže ze serverem. Proveďte prosím nový pokus o odeslání nebo napiště rovnou na e-mail:info@caitalia.cz";
        }
    }

}

