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
        $kat = $request->getParameter('kat', 'leto');

        $items = "Zajezdy\r\n";
        $r = "CenyRadky\r\n";
        $ceny = "Ceny\r\n";

        $ceny_t = Doctrine::getTable('Ceny')
                ->createQuery('Ceny c')
                ->where('c.kat=?', $kat)
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

        foreach ($ceny_t as $value) {
            $ceny_r = Doctrine::getTable('CenyRadky')
                    ->createQuery('CenyRadky cr')
                    ->where('ceny_id=?', $value->getId())
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
        }
        $zajezd = Doctrine::getTable('Zajezdy')
                ->createQuery('Zajezdy z')
                ->where('z.kat=?', $kat)
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
        $kat = $request->getParameter('kat', 'leto');

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
        $kat = $request->getParameter('kat', 'leto');

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
                        $update .= 'kat="' . $kat . '",';
                        break;
                    case 'ceny':
                        $update .= 'ceny SET ';
                        $update .= 'kat="' . $kat . '",';
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

}