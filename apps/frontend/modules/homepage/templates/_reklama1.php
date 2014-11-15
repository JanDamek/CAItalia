<?php
if ($reklama1->count()) :
?>
    <div class="reklama">
    <?php
    foreach ($reklama1 as $item) {
        $img = image_tag(image_resizer(200, 250, url_for($item->getImg())), array('title' => $item->getName(), 'width' => 200, 'height' => 250,'alt'=>$item->getName()));
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
