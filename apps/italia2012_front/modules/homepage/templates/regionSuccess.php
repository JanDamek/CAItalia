<div class="modal_close">
    <?php echo link_to_remote('<img src="pic/zavri.png" alt="zavrit" class="zavri" title="Zavřít" border="0" height="55" width="55" />', array('url' => url_for('@mapa?destinace=0-1'), 'update' => 'mapa')); ?>                    
</div>
<div class="mapa_regionu">
    <?php
    if (isset($regiony[0])) {
        foreach ($destinace as $item) {
            ?>
            <div class="sel_icon1" style="top:<?php echo $item->getPoziceItalieX(); ?>px; left:<?php echo $item->getPoziceItalieY(); ?>px;float:left;"></div>
            <?php
            echo "Nazev destinace:" . $item->getName() . '<br />';
        }
        echo image_tag($regiony[0]->getImg());
        echo "<hr />";
        echo "Nazev regionu:" . $regiony[0]->getName();
        echo "<br />";
        echo "Poct regionu: pokud je vic jak 1, je to chyba delkarace: " . $regiony->count();
        echo "<br />";
        echo "Pocet destinaci v regionu:" . $destinace->count() . "<br />";
        echo "</div>";
    }else
        echo "Chyba ID : " . $id;