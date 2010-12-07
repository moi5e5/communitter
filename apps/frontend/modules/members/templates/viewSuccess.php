<div id="members">
    <?php echo $MEMBER; ?>
</div>


<div id="items">
    <?php if(count($ITEMS)>0):?>
        <?php foreach($ITEMS as $item):?>
            <?php echo $item; ?>
        <?php endforeach;?>
    <?php else:?>
        El usuario no tiene Symfon&iacute;as.
    <?php endif;?>
</div>

