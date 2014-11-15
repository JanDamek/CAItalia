<div id="rek3"></div>
<?php
use_helper('jQuery');
echo javascript_tag(
  jq_remote_function(array(
    'update'  => 'rek3',
    'url'     => 'reklama/show?pozice=3'
  ))
) ?>
