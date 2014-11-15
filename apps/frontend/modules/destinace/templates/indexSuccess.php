<h1 class="h1_main"><?php echo ($seo->getName()?$seo->getName().' | ':'') . NavigationHelper::getSetting()->getSiteName(); ?></h1>
<?php
use_helper('Pagination');
$items = $hp_item->execute();
if ($items->count()>0) :
?>
<div class="hp_destinace"><?php echo link_to($items[0]->getDestinace()->getName(), '@o_italii-destinace-detail?slug=' . $items[0]->getDestinace()->getSlug());?></div>
<?php
endif;
// zobrazeni filtru
include_component('homepage','hp_filter', array('destinace'=>$items[0]->Destinace))
?>
<div class="hp_items">    
    <div class="items">
        <?php
        foreach ($items as $item) {
            include_partial('homepage/hp_item',array('item'=>$item));
        }
        echo pager_navigation($hp_item);
        ?>
    </div>
</div>