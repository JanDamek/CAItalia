<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
switch ($pozice) {
    case 0:
        include_component('homepage', 'hp_img');
        break;    
    case 1:
        include_component('homepage','reklama1');
        break;
    case 2:
        include_component('homepage','reklama2');
        break;
    case 3:
        include_component('homepage','reklama3');
        break;

    default:
        break;
}
NavigationHelper::saveStatistic();
?>