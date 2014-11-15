<?php if ($seo) : ?>
<h1 class="h1_main"><?php echo ($seo->getName()?$seo->getName().' | ':'') . NavigationHelper::getSetting()->getSiteName(); ?></h1>
<?php endif;

use_helper('Pagination');
$items = $hp_item->execute();
if ($items->count()>0) :
?>
<div class="hp_destinace"><?php 
if (isset($seo_text)) {
  echo link_to($seo->getName(),'@seo_text?slug='.$seo_text->getSlug());    
}
else 
{
  echo $seo->getName(); 
}
?></div>
<?php
endif;
// zobrazeni filtru
//include_component('homepage','hp_filter', array('destinace'=>$items[0]->Destinace))
?>
<br />
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