<div id="items">
    <?php if(count($ITEMS)>0):?>
        <?php foreach($ITEMS as $item):?>
            <?php echo $item; ?>
        <?php endforeach;?>
    <?php else:?>
        El usuario no tiene Symfon&iacute;as.
    <?php endif;?>
</div>

<div id="newitem">
    <?php include_partial('items/itemform', array('form'=> $form));?>
</div>

