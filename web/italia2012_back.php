<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('italia2012_back', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
