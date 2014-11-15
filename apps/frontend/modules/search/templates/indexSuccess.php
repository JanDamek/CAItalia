<h1 class="h1_main"><?php echo $seo->getTitle(); ?></h1>
<?php
use_helper('Pagination');
$items = $hp_item->execute();
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