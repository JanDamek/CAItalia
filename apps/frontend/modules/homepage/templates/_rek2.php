<div id="rek2"></div>
<?php
use_helper('jQuery');
echo javascript_tag(
  jq_remote_function(array(
    'update'  => 'rek2',
    'url'     => 'reklama/show?pozice=2'
  ))
) ?>
