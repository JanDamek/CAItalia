<?php
use_helper('Navigation');
use_helper('ImageResizer');
use_helper('Text');
if (isset($_POST['q'])) {
    $q = $_POST['q'];
} else {
    $q = '';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php echo include_http_metas() ?>
        <?php
        echo include_metas();
        if (isset($sf_response->fb)) {
            $fb = $sf_response->fb;
        }
        if (!empty($fb)) {
            ?>
            <meta property="og:title" content="<?php echo $fb['title']; ?>"/>
            <meta property="og:type" content="article"/>
            <meta property="og:url" content="http://www.caitalia.cz<?php echo url_for('item/index?slug=' . $fb['url']); ?>"/>
            <meta property="og:image" content="http://www.caitalia.cz<?php echo image_resizer(220, 140, $fb['image']); ?>"/>
            <meta property="og:site_name" content="<?php echo $fb['site_name']; ?>"/>
            <meta property="og:description" content="<?php echo $fb['description']; ?>"/>
            <?php
        }

        if (NavigationHelper::getSetting()->getGoogleOvereni())
            echo '<meta name="google-site-verification" content="' . NavigationHelper::getSetting()->getGoogleOvereni() . '" />';
        ?>
        <?php echo include_title() ?>
        <?php echo include_stylesheets() ?>
        <?php echo include_javascripts();

        if (NavigationHelper::getSetting()->getGaCode()) : ?>
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', '<?php echo NavigationHelper::getSetting()->getGaCode(); ?>']);
                _gaq.push(['_trackPageview']);
                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>
        <?php endif; ?>
    </head>
    <body>
        <div class="container">
            <div id="header">
                <div class="wrap">
                    <div id="logo">
                        <?php echo link_to('<img src="/css/pic/logo.png" alt="'.NavigationHelper::getSetting()->getLogo_alt().'" title="'.NavigationHelper::getSetting()->getLogoTitle().'" border="0" height="65" width="231" />', 'homepage/index'); ?>
<!--                        <a href="sem"><img src="pic/logo.png" alt="logo" title="Logo" border="0" height="65" width="231" /> </a>-->
                    </div> 
                </div>

                <!--                <div class="header">
                <?php echo link_to('home', 'homepage/index', array('class' => 'logo')); ?>
                                </div>-->
            </div>
            <!--<div class="left"></div>
            <div class="right"></div>-->
            <div id="page">
                <div class="content">
                    <?php echo $sf_content ?>
                    <!-- end .content -->
                    <div class="nav">
                        <ul class="menu-italie" id="menu">
                            <li><?php echo link_to('Last Minute', 'lastminute/index', array('class' => 'menulink')); ?></li>
                            <li><?php echo link_to('Aktuality', 'aktuality/index', array('class' => 'menulink')); ?></li>
                            <li><span class="menulink">O Itálii</span>
                                <ul>
                                    <li class="top"></li>
                                    <li><?php echo link_to('Itálie', 'stranky/index?slug=italie', array('class' => 'sub')) ?></li>
                                    <li class="midl"></li>
                                    <li><?php echo link_to('Destinace', 'destinace/list', array('class' => 'sub')) ?></li>
                                    <li class="bootom"></li>
                                </ul>
                            </li>
                            <li class="menu-inf"><span class="menulink">Informace</span>
                                <ul>
                                    <li class="top"></li>
                                    <li><?php echo link_to('Jak objednat pobyt', 'stranky/index?slug=jak-objednat-pobyt', array('class' => 'sub')) ?></li>
                                    <li class="midl"></li> 
                                    <li><?php echo link_to('Všeobecné obchodní<br />podmínky', 'stranky/index?slug=vop', array('class' => 'sub vop')) ?></li>
                                    <li class="midl"></li>
                                    <li><?php echo link_to('Asistence klientům', 'stranky/index?slug=asistence-klientum', array('class' => 'sub')) ?></li>
                                    <li class="midl"></li>
                                    <li><?php echo link_to('Dárky pro klienty', 'stranky/index?slug=darky-pro-klienty', array('class' => 'sub')) ?></li>
                                    <li class="bootom"></li>
                                </ul>
                            </li>
                            <li><?php echo link_to('Pojištění', 'stranky/index?slug=pojisteni', array('class' => 'menulink')); ?></li>
                            <li class="menu-doprava"><span class="menulink">Doprava</span>
                                <ul>
                                    <li class="top"></li>
                                    <li><?php echo link_to('Automobilem', 'stranky/index?slug=automobilem', array('class' => 'sub')) ?></li>
                                    <li class="midl"></li>
                                    <li><?php echo link_to('Autobusem', 'stranky/index?slug=autobusem', array('class' => 'sub')) ?></li>
                                    <li class="midl"></li>
                                    <li><?php echo link_to('Letadlem', 'stranky/index?slug=letadlem', array('class' => 'sub')) ?></li>
                                    <li class="bootom"></li>
                                </ul>
                            </li>
                            <li class="menu-onas"><span class="menulink">O nás</span>
                                <ul>
                                    <li class="top"></li>
                                    <li><?php echo link_to('Společnost', 'stranky/index?slug=historie', array('class' => 'sub')) ?></li>
                                    <li class="midl"></li>
                                    <li><?php echo link_to('Partneři', 'stranky/index?slug=partneri', array('class' => 'sub')) ?></li>
                                    <li class="midl"></li>
                                    <li><?php echo link_to('Kontakty', 'stranky/index?slug=kontakty', array('class' => 'sub')) ?></li>
                                    <li class="bootom"></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- end .nav -->

                    </div>
                    <div class="search">
                        <form action="<?php echo url_for('search/index') ?>" method="post" enctype="multipart/form-data">
                            <input name="q" type="text" class="search_query" value="<?php echo $q ?>"/>
                            <input name="search" type="image" class="search_submit" src="/images/hledat.png" alt="Hledej" align="bottom" />
                        </form>
                    </div>
                    <!--<div class="ciaomarco"></div>-->
                    <script type="text/javascript">
                        var menu=new menu.dd("menu");
                        menu.init("menu","menuhover");
                    </script>
                    <div class="sidebar1" id="sidebar">
                        <?php include_component('homepage', 'hp_kategorie'); ?>
                        <br /><br />
                        <div class="box">
                            <div class="top_box red">
                                <h3>Rychlý kontakt</h3>
                            </div>
                            <div class="left_box_red"></div>
                            <div class="content_box">
                                <?php include_component('homepage', 'rychlykontakt'); ?>
                            </div>
                        </div>
                        <?php include_partial('homepage/rek1'); ?>
                        <?php include_partial('homepage/rek2'); ?>
                        <?php include_partial('homepage/rek3'); ?>
                        <div class="fb_sidebar" id="fb_sidebar">
                        </div>
                        <script type="text/javascript">get_fb_like_box('fb_sidebar', "http://www.facebook.com/pages/Cestovní-agentura-Italia/112198472191811", 200, true, false, true)</script>
                        <div class="plus_google">
<div class="g-plusone" data-annotation="inline" data-width="300"></div>
</div>

<!-- Umístěte tuto značku za poslední značku tlačítko +1. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'cs'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
                    </div>
                </div>
            </div>
            <!-- end .container -->
            <div class="foo" id="footer">
                 <div class="copy"></div> 
                <!--                <div class="footer">
                                    <div class="f_left">                    
                                    </div>
                                    <div class="f_right">                   
                                    </div>
                                </div>-->
            <div class="seo_text">
                <?php include_component('homepage', 'seo_text'); ?>
            </div>
            </div>
        </div>
    </body>
</html>
<?php
NavigationHelper::saveStatistic();
