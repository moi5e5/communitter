<h2>Buscar</h2>
<form action="<?php echo url_for('items/search') ?>" method="get">
  <input type="text" name="query" value="<?php echo $sf_request->getParameter('query') ?>" id="search_keywords" />
  <input type="submit" value="search" class="search" />
  <div class="help">
    Enter some keywords (city, country, position, ...)
  </div>
</form>

<div id="search_results">
    <?php include_partial('items/list', array('ITEMS'=>$ITEMS));?>
</div>

 <script>

         $(document).ready( function() {

                $('#search_keywords').keyup(function(key)
                {
                  
                  if (this.value.length >= 3 || this.value == '')
                  {
                    $('#search_results').load(
                      $(this).parents('form').attr('action'), { query: this.value + '*' }
                    );
                  }
                });

                $('input[type="submit"]').hide();
	 });

 </script>