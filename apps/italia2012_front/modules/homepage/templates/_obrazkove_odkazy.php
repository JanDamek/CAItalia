<?php
if ($obrazkoveOdkazy->count() > 0) {
    foreach ($obrazkoveOdkazy as $item) :
        ?>
        <div class="banner">
            <?php echo image_tag($item->getImg(),array('class' => 'bannerimg', 'alt' => $item->getName(), 'title' => $item->getName())); ?>
            <strong><a href="<?php echo $item->getUrl(); ?>"><?php echo $item->getName()?></a></strong>
        </div> 
        <?php
    endforeach;
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */