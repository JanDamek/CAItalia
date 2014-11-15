<div id="header">
    <div class="bar">
        <div class="wrap">
            <div id="logo">
                <?php echo link_to(image_tag("/pic/logo.png", array('class' => 'logo', 'alt' => 'logo', 'title' => Italia2012Helper::getSetting()->getSiteName())), @homepage); ?>
                <span>Italia 2012 - zájezdy pro Vás</span>   
            </div>
        </div>
    </div>
    <div class="barstin"></div>
</div>
<!-- END HEADRE -->
<div id="page">
    <!-- CONTENT -->
    <div id="content">
        <div id="sidebar">
            <div class="chcik">
                <strong>Chci k:</strong><br />
                                <div id="icon" class="icon">  
                <?php include_component('homepage', 'icon'); ?>
                                </div>
            </div>
            <ul id="menu">
                <?php include_component('homepage', 'menu'); ?>
            </ul>
        </div>
        <div id="mapa">
            <?php include_partial('homepage/mapa'); ?>
        </div>
        <div id="reklama">
            <?php include_component('homepage', 'obrazkove_odkazy'); ?>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- FOOTER -->
<div id="footer">
    <div class="wrapere">
        <div class="copy">
            <?php include_component('homepage', 'dolni_odkazy'); ?>
        </div>
        <div class="ikony">
            <div class="bottom_info">
                <?php echo image_tag('/pic/autobusova.png', array('title' => 'Doprava', 'alt' => 'doprava', 'class' => 'bottom_link')); ?>
                <br />doprava
            </div>
            <div class="bottom_info">
                <?php echo image_tag('/pic/info.png', array('title' => 'Info', 'alt' => 'info', 'class' => 'bottom_link info')); ?>
                <br />info
            </div>
            <div class="bottom_info">
                <?php echo image_tag('/pic/poloha.png', array('title' => 'Poloha', 'alt' => 'poloha', 'class' => 'bottom_link')); ?>
                <br />poloha
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->