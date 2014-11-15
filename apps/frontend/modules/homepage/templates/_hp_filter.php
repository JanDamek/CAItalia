<?php
use_helper('Navigation');
?>
<div class="hp_filter">
    <hr />
        <form action="" method="post" >
    <?php
        $last = '';
    if (isset ($last_minute) and $last_minute) {
        $last = '_last_minute';

    ?>
            <label for="destinace_id">Destinace : </label>
            <select id="destinace_id" class="destinace_id" name="destinace_id">
                <option value="">Vše</option>
                <?php
                foreach ($destinace as $item){
                    $s=($item->getId()==$destinace_id ? 'selected' : '');
                    echo "<option $s value='{$item->getId()}'>{$item->getName()}</option>";
                }
                ?>
            </select>
            <?php } ?>
            <label class="lab_oblast<?php echo $last;?>" for="oblast_id">Oblast : </label>
            <select id="oblast_id" class="oblast_id<?php echo $last;?>" name="oblast_id">
                <option value="">Vše</option>
                <?php
                foreach ($oblast as $item){
                    $s=($item->getId()==$oblast_id ? 'selected' : '');
                    echo "<option $s value='{$item->getId()}'>{$item->getName()}</option>";
                }
                ?>
            </select>

            <label class="lab_typ<?php echo $last;?>" for="typ_id">Typ : </label>
            <select id="typ_id" class="typ_id<?php echo $last;?>" name="typ_id" >
                <option value="">Vše</option>
                <?php
                foreach ($typ as $item){
                    $s=($item->getId()==$typ_id ? 'selected' : '');
                    echo "<option $s value='{$item->getId()}'>{$item->getName()}</option>";
                }
                ?>
            </select>
            <label class="lab_pocet<?php echo $last;?>" for="pocet_osob">Počet osob : </label>
            <select id="pocet_osob" class="pocet_osob<?php echo $last;?>" name="pocet_osob">
                <option value=""></option>
                <?php
                for ($i=1;$i<=8;$i++){
                    $s=($i==$pocet_osob ? 'selected' : '');
                    echo "<option $s value='$i'>$i</option>";
                }
                ?>
            </select>
            <input class="submit_btn" type="image" src="/images/design/btn_filter.gif" />
        </form>
    <hr />
</div>