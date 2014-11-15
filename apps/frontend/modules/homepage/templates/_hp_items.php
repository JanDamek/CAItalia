<?php
use_helper('Navigation');

if (isset($hp_item) and $hp_item->count())
{
    foreach ($hp_item as $item) {
        include_partial('homepage/hp_item', array('item' => $item));
        NavigationHelper::addZajezdy($item->getId());
    }
}
