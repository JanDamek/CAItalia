<?php
$slash = false;
foreach ($seo_text as $item)
{
    if ($slash) {
        echo " | ";
    }
    echo link_to1($item->getTitle(), '@seo_text?slug='.$item->getSlug());
    $slash = true;
} ?>