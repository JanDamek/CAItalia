<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use_helper('Lightbox');
?>
<div class="rezervace">
    <br />
    <h2>Zaslání dotazu na zájezd</h2>
    <hr />
    <div class="info_box">
        <div class="dest_pos">Destinace : <span><?php echo $destinace->getName(); ?></span>
        </div>
        <div class="misto_pos">Místo : <span><?php echo $zajezd->getName(); ?></span></div>
    </div>
    <div class="rez_form">
        <form action="<?php echo url_for('item/index?slug=' . $f_slug) ?>" method="post">
            <input type="hidden" value="<?php echo $hast ?>" name="predmet" />
            <label for="jmeno">Jméno:</label><br />
            <input type="text" name="jmeno" /><br />
            <label for="prijmeni">Příjmení:</label><br />
            <input type="text" name="prijmeni" /><br />
            <label for="email">E-mail:</label><br />
            <input type="text" name="email" /><br />
            <label for="telefon">Telefon:</label><br />
            <input type="text" name="telefon" /><br />
            <label for="zprava">Zpráva:</label><br />
            <textarea name="zprava" cols="70" rows="10"></textarea>

            <input class="btn_send" type="image" src="/images/design/btn-odeslat.gif" />
        </form>
        <div class="clear"></div>
    </div>
</div>