<script type="text/javascript">
    var geocoder;
    var map;
    var loc;
</script>
<?php
if (isset($send_ok)) {
    ?>
    <h3><center><big><?php echo $send_ok; ?></big></center></h3>
<?php } ?>
<?php
if (isset($send_fail)) {
    ?>
    <h3><center><red><big><?php echo $send_fail; ?></big></red></center></h3>
<?php } ?>

<div class="detail_main_box">
    <?php
    use_helper('Lightbox');
    use_helper('ImageResizer');
    if ($item->getLastMinute()) {
        echo "<div class='item_lastminute detail_last_minute'></div>";
    } else {
        echo "<div class='item_corner detail_last_minute'></div>";
    }
    ?>
    <h1 class="title"><?php echo $item->getName(); ?></h1>
    <div class="item_destinace"><?php
    $kat = $item->getDestinace()->getKategorie();
    echo $kat[0]->getName() . ' > ';
    echo link_to($item->getDestinace()->getName(), 'destinace/index?slug=' . $item->getDestinace()->getSlug());
    ?>
    </div>
    <div class="photos">
        <div class="bottom">
            <div class="pocet"><?php
        if ($gal) {
            $pocet = $gal_img->count();
            echo $pocet . ' ';
            switch ($pocet) {
                case 0 :
                    echo 'fotografií';
                    break;
                case 1 :
                case 2:
                case 3:
                case 4:
                    echo 'fotografie';
                    break;
                default:
                    echo 'fotografií';
                    break;
            }
        } else {
            echo 'Bez fotogalerie';
        }
    ?>
            </div>
            <?php if ($gal): ?>
                <div class="galerie">
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => 'Fotogalerie',
                        'size' => '880x530',
                        'speed' => '20'
                    );
                    foreach ($gal_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text('Zobrazit fotogalerii', $images, $link_options);
                    ?>
                </div><?php endif ?>
        </div>
        <?php echo image_tag(image_resizer(327, 222, $item->getObrazek()), array('class' => 'img_detail', 'alt' => $item->getName())); ?>
    </div>
    <div class="popis">
        <div class="popisek">
            <?php echo $item->getRaw('popis_list'); ?>
        </div>
        <div class="piktogramy"><?php
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
        <hr />
        <div class="cena">Cena od: <span><?php echo number_format($item->getCenaOd(), 0, ',', ' '); ?> Kč
                <?php
                if ($item->getCenaTyp()) {
                    echo ' / ';
                    ?>
                    <span title="<?php echo $item->getCenaTyp()->getNazev() . ' - ' . $item->getCenaTyp()->getPopis(); ?>">
                    <?php echo $item->getCenaTyp()->getZkratka(); ?>
                    </span>
                    <?php
                }
                ?>
            </span>
            <a href="#ceny" onclick="setdiv(1);return true;">Prohledněte si termíny a ceny</a></div>
        <hr />
        <div class="fb_like" id="fb_like">
        </div>
        <script type="text/javascript">get_fb_like('fb_like', "button_count", false, 150)</script>
        <div class="dotaz">
            <?php
            $link_options = array(
                'title' => 'Zaslání dotazu na zájezdu',
                'size' => '610x426',
                'speed' => '9'
            );
            echo light_modallink('Poslat dotaz', 'item/dotaz?slug=' . $item->getSlug(), $link_options);
            ?>
        </div>
        <div class="to_frend">
            <?php
            $link_options = array(
                'title' => 'Zaslání zájezdu znamému',
                'size' => '610x426',
                'speed' => '9'
            );
            echo light_modallink('Poslat znamému', 'item/send_friend?slug=' . $item->getSlug(), $link_options);
            ?>
        </div>
    </div>
    <script type="text/javascript">
        function setmaps()
        {
            geocoder = new google.maps.Geocoder();

            var myLatlng = new google.maps.LatLng(50.068627, 14.438224);

            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                },
                navigationControl: true,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.ZOOM_PAN
                },
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                streetViewControl: true,
                scaleControl: true
            }
            var map = new google.maps.Map(document.getElementById("map_canvas_pos"), myOptions);

            var address = "<?php echo $item->getAdrMapGoogle(); ?>";
            geocoder.geocode( { 'address': address},
            function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                    loc = results[0].geometry.location;
                    map.setCenter(loc);
                }
            });
        }

        function setdiv(i)
        {
            var ubytovani = document.getElementById('ubytovani');
            var destinace = document.getElementById('destinace');
            var mapa = document.getElementById('mapa');
            var a_ubut = document.getElementById('a_ubyt');
            var a_dest = document.getElementById('a_dest');
            var a_mapa = document.getElementById('a_mapa');

            if (i==1) {
                ubytovani.style.display = '';
                destinace.style.display = 'none';
                mapa.style.display = 'none';
                a_ubut.className = 'select';
                a_dest.className = 'noselect';
                a_mapa.className = 'noselect';
            }
            else if (i==2)
            {
                ubytovani.style.display = 'none';
                destinace.style.display = '';
                mapa.style.display = 'none';
                a_ubut.className = 'noselect';
                a_dest.className = 'select';
                a_mapa.className = 'noselect';
            }
            else
            {
                ubytovani.style.display = 'none';
                destinace.style.display = 'none';
                mapa.style.display = '';
                a_ubut.className = 'noselect';
                a_dest.className = 'noselect';
                a_mapa.className =  'select';

                if (!this.map)
                    setmaps();
            }
            return false;
        }
    </script>
    <div class="more_info">
        <hr />
        <div class="zalozky">
            <a id="a_ubyt" href="#" class="select" onclick="setdiv(1);return false;">O ubytování</a>
            <a id="a_dest" href="#" class="noselect" onclick="setdiv(2);return false;">&nbsp;O destinaci</a>
            <a id="a_mapa" href="#" class="noselect" onclick="setdiv(3);return false;">&nbsp;&nbsp;&nbsp;&nbsp;Mapa</a>
        </div>
    </div>
    <div class="clear"></div>
    <div id="ubytovani" class="detail_item">
        <?php
        echo $item->getRaw('popis_detail');

        if ($lm and $lm_radky) {
            ?>
            <a name="ceny"></a>
            <?php
            include_partial('item/ceny', array('ceny' => $lm[0], 'radky' => $lm_radky, 'slug' => $item->getSlug(), 'lm_t' => 1));
        }
        if ($lm2 and $lm2_radky) {
            ?><br />
            <?php
            include_partial('item/ceny', array('ceny' => $lm2[0], 'radky' => $lm2_radky, 'slug' => $item->getSlug(), 'lm_t' => 1));
            echo "<br />";
        }

        if ($ceny and $ceny_radky) {
            ?>
            <a name="ceny"></a>
            <?php
            include_partial('item/ceny', array('ceny' => $ceny[0], 'radky' => $ceny_radky, 'slug' => $item->getSlug(), 'lm_t' => 0));
        }
        if ($ceny2 and $ceny2_radky) {
            ?><br />
            <?php
            include_partial('item/ceny', array('ceny' => $ceny2[0], 'radky' => $ceny2_radky, 'slug' => $item->getSlug(), 'lm_t' => 0));
        }
        echo "<br />" . $item->getRaw('popis_pod_cenikem');
        ?>
    </div>
    <div id="destinace" class="detail_item" style="display: none;">
        <h2 class="title"><?php echo $item->getDestinace()->getName(); ?></h2>
<?php echo $item->getDestinace()->getRaw('popis'); ?>
    </div>
    <div id="mapa" class="detail_item" style="display: none;">
        <form action="http://maps.google.cz/maps" method="get" target="_blank" style="margin-left: 15px;margin-bottom: 5px;">
            <label for="saddr_id">Vyhledat trasu z:</label>
            <input id="saddr_id" type="text" name="saddr" size="20"/>
            <input type="submit" value="Vyhledat" />
            <input type="hidden" name="f" value="d" />
            <input type="hidden" name="source" value="s_d" />
            <input type="hidden" name="daddr" value="<?php echo $item->getAdrMapGoogle(); ?>" />
            <input type="hidden" name="hl" value="cs" />
            <input type="hidden" name="geocode" value="" />
            <input type="hidden" name="mra" value="ls" />
            <input type="hidden" name="ie" value="UTF8" />
        </form>
        <div id="map_canvas_pos" class="mapa_google">
        </div>
    </div>
    <div id="fb_comment"></div>
    <script type="text/javascript">
        //get_fb_comments('fb_comment');
    </script>
</div>
<?php
NavigationHelper::addZajezdDetail($item->getId());
?>