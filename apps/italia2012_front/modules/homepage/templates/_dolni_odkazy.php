<?php
if ($dolniOdkazy->count() > 0) {
    $first = true;
    foreach ($dolniOdkazy as $item) {
        if (!$first)
            echo ' | ';
        echo link_to($item->getName(), $item->getUrl());
        $first = false;
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
