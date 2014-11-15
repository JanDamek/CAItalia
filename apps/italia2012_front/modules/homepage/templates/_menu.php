<?php
if ($destinace->count() > 0) {
    foreach ($destinace as $item) {
        echo '<li>'.link_to_remote($item->getName(), array('url'=>url_for('@mapa?destinace='.$item->getId()),'update'=>'mapa')).'</li>';
    }
}