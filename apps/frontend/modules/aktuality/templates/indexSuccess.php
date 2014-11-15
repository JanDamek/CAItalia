<h1 class="h1_main"><?php echo $seo->getTitle(); ?></h1>
<?php
use_helper('Navigation');
use_helper('Text');
?>
<div class="items">
    <?php
    use_helper('Pagination');
    $items = $akt->execute();
    foreach ($items as $item)
    {
    ?>
        <div class="hp_akt_list">
            <div class="akt_name">
            <?php echo link_to($item->getName(), 'aktuality/detail?slug=' . $item->getSlug()); ?>
        </div>
        <div class="akt_perex">
            <?php //echo truncate_text(strip_tags($item->getPerex()),230,'...',true);
            echo strip_tags($item->getPerex());?>
            &nbsp;<?php echo link_to('více', 'aktuality/detail?slug=' . $item->getSlug()); ?>
        </div>
            <hr />
    </div>
    <?php
            NavigationHelper::addAkt($item->getId());
        }
        echo pager_navigation($akt);
    ?>
</div>