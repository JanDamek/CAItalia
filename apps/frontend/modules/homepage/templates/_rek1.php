<div id="rek1"></div>
<?php
use_helper('jQuery');
echo javascript_tag(
  jq_remote_function(array(
    'update'  => 'rek1',
    'url'     => 'reklama/show?pozice=1'
  ))
) ?>
