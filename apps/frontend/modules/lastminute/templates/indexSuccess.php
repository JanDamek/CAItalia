<h1 class="h1_main"><?php if ($seo) echo $seo->getTitle(); ?></h1>
<?php
use_helper('Pagination');
$items = $hp_item->execute();

// zobrazeni filtru
include_component('homepage','hp_filter', array('last_minute'=>1));

foreach ($items as $item)
    {
        include_partial('homepage/hp_item',array('item'=>$item));
    }
    echo pager_navigation($hp_item);
?>