<div class="box_li">
<?php
foreach ($detail as $item)
{
    echo link_to(image_tag('/images/li_img.png',array('alt'=>'')).' '.$item->getTitle(),'destinace/index?slug='.$item->getSlug(),array('class'=>'box_li'))."<br />";
}
?>
</div>