<div id="hpimgjava"></div>
<?php
use_helper('jQuery');
if (NavigationHelper::getSetting()->getHpSlideshow())
{
echo 
  jq_periodically_call_remote(array(
    'frequency' => NavigationHelper::getSetting()->getHpSlideshowInterval(),
    'update'  => 'hpimgjava',
    'url'     => 'reklama/show?pozice=0',
    'complete'=> jq_visual_effect('fadeIn', '#hp_img_img'),
    'loading' => jq_visual_effect('fadeOut', '#hp_img_img')
      ));
} 

echo javascript_tag(
  jq_remote_function(array(
    'update'  => 'hpimgjava',
    'url'     => 'reklama/show?pozice=0'
  )));
