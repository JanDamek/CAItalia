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
                    <li class="menulink">Italia 2012
                        <ul>
                            <li><?php echo link_to('Regiony', '@regiony', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Destinace', '@destinace', array('class' => 'sub')) ?></li>
                        </ul>
                    </li>
                    <li class="menulink">Nastavení
                        <ul>
                            <li><?php echo link_to('Zakladni nastaveni', '@setting_italia2012', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Odkazy s obrázky', '@obrazkove_odkazy', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Dolní odkazy', '@dolni_odkazy', array('class' => 'sub')) ?></li>
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
