<?php
if (!empty($regiony) and ($regiony->count() > 0)) {
    if (isset($regiony[0])) {
        foreach ($destinace as $item) {
            ?>
            <div id="zajezd">

                <div id="leva">
                    <div class="cena">
                        <span>cena od </span><strong>6000 Kč</strong><span>/ osoba</span>  
                    </div>
                    <div class="fotky">
                        <div class="big">
                            <img src="pic/fotka.png" alt="fotka.png, 95kB" title="Fotka" border="0" height="190" width="290">  
                        </div>
                        <div class="small">
                            <img src="pic/fotkasmall.png" alt="fotkasmall.png, 14kB" title="Fotkasmall" border="0" height="83" width="82">
                            <img src="pic/fotkasmall.png" alt="fotkasmall.png, 14kB" title="Fotkasmall" border="0" height="83" width="82">
                            <img src="pic/fotkasmall.png" alt="fotkasmall.png, 14kB" title="Fotkasmall" border="0" height="83" width="82">  
                        </div>
                        <a href="sem" id="button">nabídka ubytování<strong>zde</strong></a>  
                    </div>
                </div>

                <div id="prava">
                    <?php echo link_to_remote('<img src="pic/zavri.png" alt="zavrit" class="zavri" title="Zavřít" border="0" height="55" width="55" />', array('url' => url_for('@mapa?destinace=0-1'), 'update' => 'mapa')); ?>                    
                    <h1>Destinace</h1>
                    <span>region</span> 
                    <p>Chvílích maskoval 81 pověz facti lži něm polekala milostný set hapatykářské krom. Čin místní kůry děcko umírá uf řeknou ustavičně ně tisku spáchán. Žili čili snadné 471 ta věděl svalila prkně k dají surreální úkladné 141 pouhá odvézt korbela s výpověď pouze no že cihlářský čubička kratší k trauma blínem. Nu žok jindřicha aťs vysokého loď vona týden – svátek ah psů málek slušnou. Tvor suše známých ale udusilo šedivý ó tělem rychlostí.</p>
                    <div class="mapka">
                        <?php echo image_tag($regiony[0]->getImgSmall()); ?>
<!--                        <img src="pic/mapka.png" alt="mapka.png, 17kB" title="Mapka" border="0" height="196" width="166"> -->
                    </div>
                    <div class="ikony">
                        <div class="ikonka">
                            <img src="pic/autobusova.png" alt="autobusova" title="Autobusova" border="0" height="48" width="48">
                        </div>
                        <div class="ikonka">
                            <img src="pic/info.png" alt="info" title="Info" border="0" height="48" width="48">
                        </div>
                        <div class="ikonka">
                            <img src="pic/poloha.png" alt="poloha" title="Poloha" border="0" height="48" width="48">
                        </div>
                    </div>
                </div>

            </div>
            <?php
        }
    }
} else {
    include_partial('homepage/mapa');
}