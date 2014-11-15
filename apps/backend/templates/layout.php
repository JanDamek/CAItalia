<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <script type="text/javascript">
            sfMediaBrowserWindowManager.init('/backend.php/sf_media_browser/select');
        </script>
    </head>
    <body>
        <?php
        if ($sf_user->isAuthenticated()) :
            ?>
            <div style="width: 100%; height: 40px">
                <ul class="menu" id="menu">
                    <li class="menulink">Zájezdy
                        <ul>
                            <li><?php echo link_to('Zajezdy', 'zajezdy/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Galerie', 'gallery/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Ceny', 'ceny/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Řádky v ceníku', 'cenyradky/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Typy zajezdu', 'typ/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Typy cen', 'cena_typ/index', array('class' => 'sub')) ?></li>
                        </ul>
                    </li>

                    <li class="menulink">Aktuality
                        <ul>
                            <li><?php echo link_to('Aktuality', 'aktuality/index', array('class' => 'sub')) ?></li>
                        </ul>
                    </li>
                    <li class="menulink">Kategorie
                        <ul>
                            <li><?php echo link_to('Kategorie', 'kategorie/index', array('class' => 'sub')) ?></li>
                        </ul>
                    </li>
                    <li class="menulink">Destinace
                        <ul>
                            <li><?php echo link_to('Destinace', 'destinace/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Oblasti', 'oblast/index', array('class' => 'sub')) ?></li>
                        </ul>
                    </li>
                    <li class="menulink">Reklama
                        <ul>
                            <li><?php echo link_to('Reklama', 'reklama/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Statistika', 'reklama_statistika/index', array('class' => 'sub')) ?></li>
                        </ul>
                    </li>
                    <li class="menulink">Nastaveni
                        <ul>
                            <li><?php echo link_to('Globani data', 'setting/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('SEO texty', 'seo/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('SEO odkazy - texty', 'seo_text/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Top obrazek na HP', 'hp_img/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Promoce na HP', 'hp_promovat/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Staticke stranky', 'stranky/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Vymazat CACHE', 'zajezdy/remove', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Reindexace vyhledavání', 'zajezdy/reindex', array('class' => 'sub')) ?></li>
                            <li class="menulink">Uživatelé
                                <ul>
                                    <li><?php echo link_to('Uživatelé', '@sf_guard_user', array('class' => 'sub')) ?></li>
                                    <li><?php echo link_to('Skupiny', '@sf_guard_group', array('class' => 'sub')) ?></li>
                                    <li><?php echo link_to('Práva', '@sf_guard_permission', array('class' => 'sub')) ?></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menulink"><?php echo link_to('Odhlásit', 'sfGuardAuth/signout'); ?></li>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo $sf_content ?>
        <script type="text/javascript">
            var menu=new menu.dd("menu");
            menu.init("menu","menuhover");
        </script>
    </body>
</html>
