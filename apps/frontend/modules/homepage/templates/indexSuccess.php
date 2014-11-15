<h1 class="h1_main"><?php echo $seo->getTitle(); ?></h1>
<div class="img_top_hp">
    <?php include_partial('homepage/hp_img_java') ?>
</div>
<div class="hp_akt_list">
    <?php include_component('homepage', 'hp_akt') ?>
</div>
<!--<h2 class="h1_main"><?php echo $seo->getTitle(); ?></h2>-->
<div class="hp_items">
    <?php include_component('homepage', 'hp_promovat') ?>
    <?php include_component('homepage', 'hp_items') ?>
</div>