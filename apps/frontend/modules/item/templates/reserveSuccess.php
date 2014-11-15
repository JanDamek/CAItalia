<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use_helper('Lightbox');
?>
<div class="rezervace">
    <br />
    <h2>Předběžná rezervace zájezdu</h2>
    <hr />
        <div class="info_box">
        <div class="dest_pos">Destinace : <span><?php echo $destinace->getName(); ?></span></div>
        <div class="misto_pos">Místo : <span><?php echo $zajezd->getName(); ?></span></div>
        <div class="termin_pos">Termín : <?php echo format_date($ceny_radky->getSlOd(),'d.M.y') ?></div>
        <div class="pocet_noci_pos">Počet nocí: <?php echo $ceny_radky->getMinNoc();?></div>
            <?php
            $getFnc = 'getSl'.$sl;
            if ($sl>=1 and $sl<=9)
            {
                    $cena = $ceny_radky->$getFnc();
                    $top = $ceny->$getFnc();
                    $getFnc .= 'p';
                    $top1 = $ceny->$getFnc();
                    if (!empty ($top1))
                        $top .= ' - '.$top1;
            }else{
                    $cena = 'Chyba v zadání';
                    $top = 'Chyba v zadání';
            }
            ?>
        <div class="cena_pos">Cena : <span><?php echo number_format($cena,0,',', ' ').' Kč' ?></span></div>
        <div class="pro_pos">Pro : <?php echo $top ?></div>
        </div>
    <div class="rez_form">
        <form action="<?php echo url_for('item/index?slug=' . $f_slug) ?>" method="post">
            <input type="hidden" value="<?php echo $f_ceny ?>" name="ceny" />
            <input type="hidden" value="<?php echo $f_ceny_radky ?>" name="ceny_radky" />
            <input type="hidden" value="<?php echo format_date($ceny_radky->getSlOd(),'d.M.y') ?>" name="termin" />
            <input type="hidden" value="<?php echo $ceny_radky->getMinNoc();?>" name="poc_noci" />
            <input type="hidden" value="<?php echo number_format($cena,0,',', ' ').' Kč' ?>" name="cena" />
            <input type="hidden" value="<?php echo $top ?>" name="pro" />
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

            <input class="btn_send" type="image" src="/images/design/btn_rezervace.gif" />
        </form>
        <div class="clear"></div>
    </div>
</div>