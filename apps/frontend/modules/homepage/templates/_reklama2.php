<?php
use_helper('Navigation');
if ($reklama2->count()) :
?>
    <div class="reklama">
    <?php
    foreach ($reklama2 as $item) {
        $img = image_tag(image_resizer(200, 50, url_for($item->getImg())), array('title' => $item->getName(), 'width' => 200, 'height' => 50,'alt'=>$item->getName()));
        NavigationHelper::addReklama($item->getId());
            if ($item->getUrl())
        {
            echo link_to($img,'reklama/index?id='.$item->getid().'&reklama_pozice_id='.$item->getReklamaPoziceId(),array('target'=>'_blank'));
        } else
        {
            echo $img;
        }
}
    ?>
</div>   
<?php
    endif;
?>
