<?php
$i    = 1;
$stop = 101;

while ($i < $stop) {
    ?>
    <article>

        <h2>Пост <?=$i?></h2>
        <div style="width: 100%; height: 250px; background-color: #dedede; border-radius: 15px"></div>
        <b>Автор</b><br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque beatae consequuntur deleniti est excepturi
        illum ipsam laboriosam magnam, nam obcaecati praesentium quaerat quibusdam quo quos sapiente tempore vel
        voluptatum.
        <br>
        <hr>
    </article>
    <?php $i++;
}