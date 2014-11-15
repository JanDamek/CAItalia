<?php
use_helper('Navigation');

if ($hp_img->count()) :
?>
    <div class="hp_img">
    <?php
    foreach ($hp_img as $item) {
        $img = image_tag(url_for(image_resizer(735, 250, $item->getImg())), array('title' => $item->getTitle(),'alt'=>$item->getAlt()));
        NavigationHelper::addHpImg($item->getId());
        ?>
        <div id="hp_img_img">
            <?php
        if ($item->getUrl())
        {
            echo link_to($img,'reklama/index?id='.$item->getid().'&reklama_pozice_id=0');
        } else
        {
            echo $img;
        }
        ?>
        </div>
        <?php
    }
    ?>
</div>   
<?php
    endif;
?>
