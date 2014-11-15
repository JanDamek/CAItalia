<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NavigationHelper
 *
 * @author damek
 */
class NavigationHelper {

    //put your code here
    private static
    $q = null,
    $instance = null,
    $nowest_articles = null,
    $page = null,
    $promovat = null,
    $setting = null,
    $zajezdy = array(),
    $zajezd_detail = array(),
    $reklama = array(),
    $hp_img = array(),
    $akt = array(),
    $akt_detail = array(),
    $hp_promovat = array();

    private function __construct() {

    }

    private function __clone() {

    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new NavigationHelper;
        }
        return self::$instance;
    }

    public static function setMetaData(sfResponse $response) {
        $custom_description = '';
        $custom_keywords = '';
        $custom_title = '';
        $h1_in_item = false;


        if (empty($custom_keywords)) {
            $custom_keywords = '';
        }
        if (empty($custom_description)) {
            $custom_description = '';
        }

        $response->addMeta('keywords', $custom_keywords . ' ' . sfConfig::get('app_general_keywords'));
        $response->addMeta('description', $custom_description . ' ' . sfConfig::get('app_general_description'));
        if (empty($custom_title)) {
            if (self::$page > 1) {
                $custom_title .= " strana " . self::$page;
            }
            $response->setTitle('CA Italia ' . $custom_title);
            $response->setSlot('h1', 'CA Italias ' . $custom_title);
        } else {
            $response->setTitle($custom_title . ' | CA Italia');
            if (!$h1_in_item)
                $response->setSlot('h1', $custom_title . ' | CA Italia');
        }
    }

    public static function getSetting() {
        if (self::$setting) {
            return self::$setting;
        } else {
            self::$setting = Doctrine::getTable('Setting')->findOneById(1);
            return self::$setting;
        }
    }

    public static function getNowestArticles() {
        return self::$nowest_articles;
    }

    public static function setPromovat($promovat) {
        self::$promovat = $promovat;
    }

    public static function getPromovat() {
        return self::$promovat;
    }

    public static function setQ($q) {
        self::$q = $q;
    }

    public static function getQ() {
        return self::$q;
    }

    public static function addZajezdy($id) {
        self::$zajezdy[] = $id;
    }

    public static function addReklama($id) {
        self::$reklama[] = $id;
    }

    public static function addHpImg($id) {
        self::$hp_img[] = $id;
    }

    public static function addAkt($id) {
        self::$akt[] = $id;
    }

    public static function addZajezdDetail($id) {
        self::$zajezd_detail[] = $id;
    }

    public static function addAktDetail($id) {
        self::$akt_detail[] = $id;
    }

    public static function addHpPromovat($id) {
        self::$hp_promovat[] = $id;
    }

    public static function saveStatistic() {
        if (count(self::$hp_promovat))
        Doctrine_Query::create()
                ->update('Hp_promovat r')
                ->set('r.zobrazeno', 'r.zobrazeno + 1')
                ->where('r.id in (' . implode(',', self::$hp_promovat) . ')')
                ->execute();

        if (count(self::$reklama))
        Doctrine_Query::create()
                ->update('Reklama r')
                ->set('r.zobrazeno', 'r.zobrazeno + 1')
                ->where('r.id in (' . implode(',', self::$reklama) . ')')
                ->execute();

        if (count(self::$hp_img))
        Doctrine_Query::create()
                ->update('Hp_img r')
                ->set('r.zobrazeno', 'r.zobrazeno + 1')
                ->where('r.id in (' . implode(',', self::$hp_img) . ')')
                ->execute();

        if (count(self::$zajezdy))
        Doctrine_Query::create()
                ->update('Zajezdy z')
                ->set('z.zobrazeno', 'z.zobrazeno + 1')
                ->where('z.id in (' . implode(',', self::$zajezdy) . ')')
                ->execute();

        if (count(self::$akt))
        Doctrine_Query::create()
                ->update('Aktuality z')
                ->set('z.zobrazeno', 'z.zobrazeno + 1')
                ->where('z.id in (' . implode(',', self::$akt) . ')')
                ->execute();

        if (count(self::$zajezd_detail))
        Doctrine_Query::create()
                ->update('Zajezdy z')
                ->set('z.detail', 'z.detail + 1')
                ->where('z.id in (' . implode(',', self::$zajezd_detail) . ')')
                ->execute();

        if (count(self::$akt_detail))
        Doctrine_Query::create()
                ->update('Aktuality z')
                ->set('z.detail', 'z.detail + 1')
                ->where('z.id in (' . implode(',', self::$akt_detail) . ')')
                ->execute();

        Doctrine_Query::create()
                ->update('Zajezdy z')
                ->set('z.last_minute', '0')
                ->where('z.last_minute_do > current_date()')
                ->execute();

    }

}

?>
