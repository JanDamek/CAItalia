<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <atom:link href="<?php echo url_for($sf_request->getUriPrefix()).url_for('@rss') ?>" rel="self" type="application/rss+xml" />
    <title>CAItalia.cz</title>
    <link>http://www.caitalia.cz</link>
    <description></description>
    <language>cs</language>
    <webMaster>info@caitalia.cz (Redakce)</webMaster>
    <category>WebZine</category>
    <?php foreach($items as $item): ?>
    <item>
      <guid><?php echo url_for($sf_request->getUriPrefix()).url_for('@item_detail?slug='.$item->getSlug()) ?></guid>
      <title><?php echo $item->getName() ?></title>
      <link><?php echo url_for($sf_request->getUriPrefix()).url_for('@item_detail?slug='.$item->getSlug()) ?></link>
      <pubDate><?php echo date('r',strtotime($item->getZacatek())) ?></pubDate>
      <description><![CDATA[<?php echo $item->getPopisList() ?>]]></description>
    </item>
    <?php endforeach; ?>
  </channel>
</rss>