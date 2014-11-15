                    <div style="float: left; text-align: center;">
                        <?php echo link_to_remote('<img src="/pic/more.png" alt="more" title="More" border="0" height="76" width="76">', array('url' => url_for('@destinace?kategorie=1'), 'update' => 'menu', 'success'=>  remote_function(array('url'=>  url_for('@icon?kategorie=1'),'update'=>'icon')) )) ?><br>moře
                    </div>
                    <div style="float: left; text-align: center;">
                        <?php echo link_to_remote('<img src="/pic/hory.png" alt="hory" title="Hory" border="0" class="hory" height="76" width="76">', array('url' => url_for('@destinace?kategorie=2'), 'update' => 'menu', 'success'=>  remote_function(array('url'=>  url_for('@icon?kategorie=2'),'update'=>'icon')))) ?>
                        <br>hory
                    </div>
                    <div style="float: left; text-align: center;">
                        <?php echo link_to_remote('<img src="/pic/pamatky.png" alt="pamatky" title="Pamatky" border="0" height="76" width="76">', array('url' => url_for('@destinace?kategorie=3'), 'update' => 'menu', 'success'=>  remote_function(array('url'=>  url_for('@icon?kategorie=3'),'update'=>'icon')))) ?>
                        <br> za poznáním
                    </div>
<?php if ($kategorie==1){?>
<div class="sel_icon1"></div>
<?php } ?>
<?php if ($kategorie==2){?>
<div class="sel_icon2"></div>
<?php } ?>    
<?php if ($kategorie==3){?>
<div class="sel_icon3"></div>
<?php } ?>