<div class="hp_item">
    <?php
    if ($item->getLastMinute()) {
    ?>
        <div class="item_lastminute"></div>
    <?php
    } else {
    ?>
        <div class="item_corner"></div>
    <?php
    }
    ?>
    <div class="item_img">
        <?php echo link_to(image_tag(image_resizer(220, 140, $item->getObrazek()),array('alt'=>$item->getName())), 'item/index?slug=' . $item->getSlug()) ?>
    </div>
    <div class="item_detail">
        <div class="item_name">
            <?php echo link_to($item->getName(), 'item/index?slug=' . $item->getSlug()); ?>
        </div>
        <div class="item_destinace">
            <?php
            $kat = $item->getDestinace()->getKategorie();
            echo $kat[0]->getName() . ' > ';
            echo link_to($item->getDestinace()->getName(), 'destinace/index?slug=' . $item->getDestinace()->getSlug());
            ?>
        </div>
        <div class="item_popis">
            <?php echo $item->getRaw('popis_list'); ?>
        </div>
        <div class="item_cena">
            <div class="cena">Cena od: <span><?php echo number_format($item->getCenaOd(), 0, ',', ' '); ?> Kč
                <?php if ($item->getCenaTyp()) {
                    echo ' / ';?>
                    <span title="<?php echo $item->getCenaTyp()->getNazev().' - '.$item->getCenaTyp()->getPopis(); ?>">
                    <?php echo $item->getCenaTyp()->getZkratka(); ?>
                    </span>
                <?php

                }
                ?>
                </span></div>
            <div class="more_info">
                <?php echo link_to('Více informací', 'item/index?slug=' . $item->getSlug()); ?>
            </div>
            <div class="pictogram">
                <?php
                // autobus, plazovy servis, klimatizace, zvire, strava, bazen, internet
                if ($item->getAutobus())
                    echo '<div class="img">
                        <img src="/images/design/autobus.gif" alt="Možnost autobusové dopravy" title="Možnost autobusové dopravy" />
                        </div>';
                if ($item->getParkoviste())
                    echo '<div class="img">
                       <img src="/images/design/parking.gif" alt="Parkovací místo" title="Parkovací místo" />
                        </div>';
                if ($item->getKlimatizace())
                    echo '<div class="img">
                        <img src="/images/design/klimatizace.gif" alt="Klimatizace" title="Klimatizace" />
                        </div>';
                if ($item->getBazen())
                    echo '<div class="img">
                        <img src="/images/design/bazen.gif" alt="Bazén" title="Bazén" />
                        </div>';
                if ($item->getStrava())
                    echo '<div class="img">
                        <img src="/images/design/restaurant.gif" alt="Možnost stravování" title="Možnost stravování" />
                        </div>';
                if ($item->getInternet())
                    echo '<div class="img">
                        <img src="/images/design/internet.gif" alt="Internet" title="Internet" />
                        </div>';
                if ($item->getPlazovyServis())
                    echo '<div class="img">
                        <img src="/images/design/plaz.gif" alt="Plážovy servis" title="Plážovy servis v cene" />
                        </div>';
                if ($item->getTv())
                    echo '<div class="img">
                        <img src="/images/design/tv-sat.gif" alt="TV-SAT" title="TV-SAT" />
                        </div>';
                if ($item->getZvire())
                    echo '<div class="img">
                        <img src="/images/design/zvirata.gif" alt="Zvířata povolena" title="Zvířata povolena" />
                        </div>';
                ?>
            </div>
        </div>
    </div>
</div>