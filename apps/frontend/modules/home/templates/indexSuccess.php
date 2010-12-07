
<div id="intro">

    Symfony es uno de los mejores frameworks de desarrollo web escrito en PHP. Symfony M&eacute;xico es un sitio dedicado a toda la comunidad de desarrolladores Symfony y PHP en M&eacute;xico,  y tiene el prop&oacute;sito de compartir y alentar el conocimiento de este maravilloso framework. Este sitio funciona como repositorio de snippets, ideas, eventos, preguntas, respuestas, etc. Cualquier cosa relacionada con Symfony y PHP. Se parte de esta comunidad y comparte tus Symfon&iacute;as y experiencias con otros Symfoneros.
    
</div>

<div id="members">

    <h3<span>Nuevos Symfoneros</span></h3>
    <div class="container">
         <?php include_component('home','members');?>
         <?php echo link_to('Ver todos','members/index')?>
    </div>

</div>

<div id="items">
    
    <h3><span>Ultimas Symfonias</span></h3>
    <div class="container">
        <?php include_component('home','items');?>
        <?php echo link_to('Ver todas','items/index')?>
    </div>
	
</div>