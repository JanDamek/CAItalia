<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ($ceny) :
    use_helper('Lightbox');
    $link_options = array(
        'title' => 'Zaslání dotazu pro rezervaci zájezdu',
        'size' => '610x425',
        'speed' => '9'
    );
?>
<div class="cenik_header">
    <strong<?php
    if ($lm_t)
        echo " style='color: red;'"; ?>>
        <?php echo $ceny->getRaw('popis'); ?>
    </strong>
</div>

<div class="cenik">
    <table>
        <thead>
            <tr>
                <th class="prvni">od - do</th>
                <?php
                if ($ceny->getSl1() <> '')
                {
                ?>
                <th title="<?php echo $ceny->getSl1p() ?>">
                    <?php echo $ceny->getSl1() ?>
                </th>
                <?php } ?>
                <?php
                if ($ceny->getSl2() <> '')
                {
                ?>
                <th title="<?php echo $ceny->getSl2p() ?>">
                <?php echo $ceny->getSl2(); ?>
                    </th>
                <?php } ?>
                <?php
                if ($ceny->getSl3() <> '')
                {
                ?>
                <th title="<?php echo $ceny->getSl3p() ?>">
                <?php echo $ceny->getSl3() ?>
                    </th>
                <?php } ?>
<?php
                if ($ceny->getSl4() <> '')
                {
?>
                    <th title="<?php echo $ceny->getSl4p() ?>">
                <?php echo $ceny->getSl4() ?>
                    </th>
<?php } ?>
                    <?php
                    if ($ceny->getSl5() <> '')
                    {
                    ?>
                        <th title="<?php echo $ceny->getSl5p() ?>">
                <?php echo $ceny->getSl5() ?>
                        </th>
                    <?php } ?>
<?php
                    if ($ceny->getSl6())
                    {
?>
                        <th title="<?php echo $ceny->getSl6p() ?>">
<?php echo $ceny->getSl6() ?>
                        </th>
<?php } ?>
                <?php
                    if ($ceny->getSl7())
                    {
                ?>
                        <th title="<?php echo $ceny->getSl7p() ?>">
                    <?php echo $ceny->getSl7() ?>
                    </th>
                <?php } ?>
                <?php
                    if ($ceny->getSl8())
                    {
                ?>
                        <th title="<?php echo $ceny->getSl8p() ?>">
<?php echo $ceny->getSl8() ?>
                    </th>
<?php } ?>
<?php
                    if ($ceny->getSl9())
                    {
?>
                            <th title="<?php echo $ceny->getSl9p() ?>">
                <?php echo $ceny->getSl9() ?>
                        </th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($radky as $item) : ?>
                <tr>
                    <td><?php echo format_date($item->getSlOd(), 'dd.MM'); ?> - <?php echo format_date($item->getSlDo(), 'dd.MM'); ?></td>
                    <?php
                        if ($ceny->getSl1())
                        {
                    ?>
                        <td>
                    <?php
                            echo light_modallink('<span>' . number_format($item->getSl1(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=1&slug=' . $slug, $link_options);
                            if ($item->getBonus1() <> '')
                            {
                                echo '<br />' . $item->getBonus1();
                            }
                            if ($item->getBonus1P() <> '')
                            {
                                echo '<br /><small>' . $item->getBonus1P() . '</small>';
                            }

                            if ($item->getSleva1())
                            {
                                echo '<br />' . $item->getSleva1();
                            }
                            if ($item->getSleva1P())
                            {
                                echo '<br /><small>' . $item->getSleva1P() . '</small>';
                            }
                    ?>
                        </td>
                    <?php
                        }
                    ?>
                    <?php
                        if ($ceny->getSl2())
                        {
                    ?>
                        <td>
                    <?php
                            echo light_modallink('<span>' . number_format($item->getSl2(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=2&slug=' . $slug, $link_options);
                            if ($item->getBonus2())
                            {
                                echo '<br />' . $item->getBonus2();
                            }
                            if ($item->getBonus2P())
                            {
                                echo '<br /><small>' . $item->getBonus2P() . '</small>';
                            }

                            if ($item->getSleva2())
                            {
                                echo '<br />' . $item->getSleva2();
                            }
                            if ($item->getSleva2P())
                            {
                                echo '<br /><small>' . $item->getSleva2P() . '</small>';
                            }
                    ?>
                        </td>
                    <?php
                        }
                    ?>
                    <?php
                        if ($ceny->getSl3())
                        {
                    ?>
                            <td>
                <?php
                            echo light_modallink('<span>' . number_format($item->getSl3(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=3&slug=' . $slug, $link_options);
                            if ($item->getBonus3())
                            {
                                echo '<br />' . $item->getBonus3();
                            }
                            if ($item->getBonus3P())
                            {
                                echo '<br /><small>' . $item->getBonus3P() . '</small>';
                            }

                            if ($item->getSleva3())
                            {
                                echo '<br />' . $item->getSleva3();
                            }
                            if ($item->getSleva3P())
                            {
                                echo '<br /><small>' . $item->getSleva3P() . '</small>';
                            }
                ?>
                            </td>
                <?php } ?>
                <?php
                        if ($ceny->getSl4())
                        {
                ?>
                        <td>
                    <?php
                            echo light_modallink('<span>' . number_format($item->getSl4(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=4&slug=' . $slug, $link_options);
                            if ($item->getBonus4())
                            {
                                echo '<br />' . $item->getBonus4();
                            }
                            if ($item->getBonus4P())
                            {
                                echo '<br /><small>' . $item->getBonus4P() . '</small>';
                            }

                            if ($item->getSleva4())
                            {
                                echo '<br />' . $item->getSleva4();
                            }
                            if ($item->getSleva4P())
                            {
                                echo '<br /><small>' . $item->getSleva4P() . '</small>';
                            }
                    ?>
                        </td>
                    <?php } ?>
                    <?php
                        if ($ceny->getSl5())
                        {
                    ?>
                        <td><?php
                            echo light_modallink('<span>' . number_format($item->getSl5(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=5&slug=' . $slug, $link_options);
                            if ($item->getBonus5())
                            {
                                echo '<br />' . $item->getBonus5();
                            }
                            if ($item->getBonus5P())
                            {
                                echo '<br /><small>' . $item->getBonus5P() . '</small>';
                            }

                            if ($item->getSleva5())
                            {
                                echo '<br />' . $item->getSleva5();
                            }
                            if ($item->getSleva5P())
                            {
                                echo '<br /><small>' . $item->getSleva5P() . '</small>';
                            }
                    ?></td>
                    <?php } ?>
                    <?php
                        if ($ceny->getSl6())
                        {
                    ?>
                        <td><?php
                            echo light_modallink('<span>' . number_format($item->getSl6(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=6&slug=' . $slug, $link_options);
                            if ($item->getBonus6())
                            {
                                echo '<br />' . $item->getBonus6();
                            }
                            if ($item->getBonus6P())
                            {
                                echo '<br /><small>' . $item->getBonus6P() . '</small>';
                            }

                            if ($item->getSleva6())
                            {
                                echo '<br />' . $item->getSleva6();
                            }
                            if ($item->getSleva6P())
                            {
                                echo '<br /><small>' . $item->getSleva6P() . '</small>';
                            }
                    ?></td>
                    <?php } ?>
                <?php
                        if ($ceny->getSl7())
                        {
                ?>
                            <td><?php
                            echo light_modallink('<span>' . number_format($item->getSl7(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=7&slug=' . $slug, $link_options);
                            if ($item->getBonus7())
                            {
                                echo '<br />' . $item->getBonus7();
                            }
                            if ($item->getBonus7P())
                            {
                                echo '<br /><small>' . $item->getBonus7P() . '</small>';
                            }

                            if ($item->getSleva7())
                            {
                                echo '<br />' . $item->getSleva7();
                            }
                            if ($item->getSleva7P())
                            {
                                echo '<br /><small>' . $item->getSleva7P() . '</small>';
                            }
                ?></td>
            <?php } ?>
<?php
                        if ($ceny->getSl8())
                        {
?>
                                            <td><?php
                            echo light_modallink('<span>' . number_format($item->getSl8(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=8&slug=' . $slug, $link_options);
                            if ($item->getBonus8())
                            {
                                echo '<br />' . $item->getBonus8();
                            }
                            if ($item->getBonus8P())
                            {
                                echo '<br /><small>' . $item->getBonus8P() . '</small>';
                            }

                            if ($item->getSleva8())
                            {
                                echo '<br />' . $item->getSleva8();
                            }
                            if ($item->getSleva8P())
                            {
                                echo '<br /><small>' . $item->getSleva8P() . '</small>';
                            }
?></td>
<?php } ?>
<?php
                        if ($ceny->getSl9())
                        {
?>
                                            <td><?php
                            echo light_modallink('<span>' . number_format($item->getSl9(), 0, ',', ' ') . ' Kč</span>', 'item/reserve?cenik_radky=' . $item->getId() . '&cenik=' . $ceny->getId() . '&sl=9&slug=' . $slug, $link_options);
                            if ($item->getBonus9())
                            {
                                echo '<br />' . $item->getBonus9();
                            }
                            if ($item->getBonus9P())
                            {
                                echo '<br /><small>' . $item->getBonus9P() . '</small>';
                            }

                            if ($item->getSleva9())
                            {
                                echo '<br />' . $item->getSleva9();
                            }
                            if ($item->getSleva9P())
                            {
                                echo '<br /><small>' . $item->getSleva9P() . '</small>';
                            }
?></td>
<?php } ?>
                                    </tr>
<?php
                        endforeach;
?>
                                </tbody>
                            </table>
                        </div>
<?php
//echo light_modallink('Light box pro modal box','item/reserve?cenik_radky='.$item->getId().'&cenik='.$item->getId().'&sl=1&slug='.$slug, $link_options);
                        endif;