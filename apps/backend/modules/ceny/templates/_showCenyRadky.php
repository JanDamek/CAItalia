<?php use_javascript('admin'); ?>
<?php use_helper('jQuery'); ?>

  <div id="info"></div>
  <div id="imagesList">
    <ul id="images-list">
      <?php if (!empty($images)): ?>
      <?php foreach ($images as $image): ?>
        <li id="listItem_<?php echo $image->getId(); ?>">
          <?php echo link_to('Editace/Oprava','cenyradky/edit?id='.$image->getId()); ?>
          Řádek: <strong><?php echo $image->getRadek(); ?></strong><br />
          od data: <strong><?php echo $image->getSlOd(); ?></strong><br />
          do data: <strong><?php echo $image->getSlDo(); ?></strong><br />
          <img src="/sfDoctrinePlugin/images/desc.png" alt="move" width="16" height="16" class="handle_radek" />
          <?php echo jq_link_to_remote(image_tag('/sfDoctrinePlugin/images/delete.png', array()), array(
                       'url' => '@ceny_delete_image?id=' . $image->getId(),
                       'complete' => '$("#listItem_' . $image->getId() . '").hide();',
                        ), array('style' => 'background-image: none;')); ?>
          <?php echo $image->getSl1(); ?>
        </li>
      <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
