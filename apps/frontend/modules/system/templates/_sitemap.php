<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://www.caitalia.cz</loc>
        <priority>1.0</priority>
        <changefreq>always</changefreq>
    </url>    <?php
    if ($items):
    foreach ($items as $item):
    ?>
        <url>
            <loc><?php echo $sf_request->getUriPrefix().url_for('@destinace_list?slug='.$item->getSlug()) ?></loc>
            <priority>1.0</priority>
            <changefreq>always</changefreq>
        </url>
    <?php
    endforeach;
    endif;
    ?>
    <?php
    if ($articles):
    foreach ($articles as $article):
    ?>
        <url>
            <loc><?php echo $sf_request->getUriPrefix().url_for('@item_detail?slug='.$article->getSlug()) ?></loc>
            <priority>1.0</priority>
            <changefreq>always</changefreq>
        </url>
    <?php
    endforeach;
    endif;
    ?>
</urlset>