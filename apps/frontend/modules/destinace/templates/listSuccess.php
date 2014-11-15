<div class="dest_list">
    <h1>Přehled destinací</h1>
    <?php
    $cnt = 0;
    foreach ($destinace as $value) {
    ?>
        <div class="dest_item">
            <div class="dest_img">
            <?php echo link_to(image_tag(image_resizer(105, 70, $value->getImg()), array('class' => 'dest_image','alt'=>$value->getName())), 'destinace/detail?slug=' . $value->getSlug());?>
            </div>
            <div class="dest_link">
            <?php echo link_to($value->getName(), 'destinace/detail?slug=' . $value->getSlug()); ?>
            </div>
        </div>
    <?php
    $cnt++;
    if ($cnt==3){
        echo "<div class='clearfloat'></div>";
        echo "<hr />";
        $cnt = 0;
    }
        }
    ?>
</div>
