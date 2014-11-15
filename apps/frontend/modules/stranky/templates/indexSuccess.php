<?php
if ($str) {
?>
    <div class="stranky">
        <h1 class="title"><?php echo $str->getTitle(); ?></h1>
<?php echo $str->getRaw('popis'); ?>
    </div>    
<?php
}
?>