<?php
use_helper('Navigation');
?>
<div class="hp_akt">
    <h1><?php echo $akt_det->getName(); ?></h1>
    <div class="clearfloat"></div>
    <div class="akt_detail">
        <?php echo $akt_det->getRaw('popis'); ?>
    </div>
</div>
<?php
        NavigationHelper::addAkt($akt_det->getId());
?>