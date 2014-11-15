<div class="hp_akt_list">
    <div class="akt_name">
        <?php echo link_to($item->getName(), 'aktuality/detail?slug=' . $item->getSlug()); ?>
    </div>
    <div class="akt_perex">
        <?php
        echo strip_tags($item->getPerex());
        echo "&nbsp;".link_to('více', 'aktuality/detail?slug=' . $item->getSlug());
        ?>
    </div>
</div>