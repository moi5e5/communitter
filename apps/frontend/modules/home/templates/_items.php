<ul id="community_items">
    <?php foreach($ITEMS as $item):?>
        <li>

            <?php echo $item;?><br />
            <?php echo $item->getBrief();?><br />
            ha gustado <?php echo $item->getLikes();?> veces<br />
            Agregado por <?php echo $item->getsfGuardUser(); ?> el <?php echo $item->getCreatedAt(); ?>
            
        </li>
    <?php endforeach;?>
</ul>