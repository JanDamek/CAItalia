<?php
$first = true;
foreach ($hp_akt as $item)
{
    if (!$first)
        echo "<hr />";
    include_partial('homepage/hp_akt_item',array('item'=>$item));
    $first = false;
    NavigationHelper::addAkt($item->getId());
}
?>