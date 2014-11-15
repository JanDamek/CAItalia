<?php
use_helper('Navigation');

if ($hp_promovat->count()) {
    foreach ($hp_promovat as $item) {
        include_partial('homepage/hp_item', array('item' => $item->getZajezdy()));
        NavigationHelper::addHpPromovat($item->getId());
    }
}