<div id="not-found">
    <div id="page">
        <div id="main" class="clearfix">
            <div id="content">
                <h2>Stránka 404</h2>
                <p>Stránka, kterou hledáte, neexistuje. To ale neznamená,<br />že vám nemáme co nabídnout.<br />
                    <br />Přejděte prosím na <a href="/">hlavní stranu</a> nebo zkuste <a href="#">hledání</a>.</p>
                <p>Možná také chcete vidět...</p>
                <div class="box">
                    <ul>
                        <li><?php echo link_to('Aktuality', '@category?category_slug=aktuality', array('title' => '')) ?></li>
                        <li><?php echo link_to('Testy', '@category?category_slug=testy', array('title' => '')) ?></li>
                        <li><?php echo link_to('Tuning', '@category?category_slug=tuning', array('title' => '')) ?></li>
                        <li><?php echo link_to('Reportáže', '@category?category_slug=reportaze', array('title' => '')) ?></li>
                        <li><?php echo link_to('Fotky', '@gallery', array('title' => '')) ?></li>
                        <!--
                        <li><a href="#" title="">Diskuze</a></li>
                        -->
                        <li><?php echo link_to('Kalendář', '@calendar', array('title' => '')) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>