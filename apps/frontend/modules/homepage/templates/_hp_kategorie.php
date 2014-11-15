<?php
foreach ($kategorie as $item)
{
?>
    <div class="box">
        <div class="top_box green">
            <h3><?php 
            //echo $item->getName();
            echo link_to($item->getTitle(),'@kategorie_list?slug='.$item->getSlug());
            ?></h3>
        </div>
        <div class="left_box">
        </div>
        <div class="content_box">
        <?php include_component('homepage', 'hp_kat_detail', array('kat_id' => $item->getId())); ?>
    </div>
</div>
<?php } ?>