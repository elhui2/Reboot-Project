<?php 
/**
 * searchform
 * @version 0.7.0
 * Layout de formulario de busqueda
 */ 
?>
<form id="search-form" action="<?php echo home_url( '/' ); ?>" class="row g-1">
  <div class="col-auto">
    <input type="text" class="form-control" id="search" placeholder="Buscar" value="<?php the_search_query(); ?>" name="s" required/>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary" aria-label="Search">Buscar</button>
  </div>
</form>