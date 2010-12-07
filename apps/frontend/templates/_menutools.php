<ul>
    <li>Bienvenido <strong><?php echo $sf_user ?></strong> </li>
    <li><?php echo link_to('Mis Symfon&iacute;as', 'items/myitems');?></li>
    <li><?php echo link_to('Salir', '@sf_guard_signout');?></li>
</ul>