<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>

<?php if( have_rows( 'slider' ) ) : ?>
<?php $dif_id = rand(1,999999999); ?>
<div id="starchitects-carousel<?php echo $dif_id; ?>" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $numero_slide = 0; ?>
    <?php while( have_rows( 'slider' ) ) : the_row(); ?>
      <li data-target="starchitects-carousel<?php echo $dif_id; ?>" data-slide-to="<?php echo $numero_slide; ?>" class="<?php if($numero_slide==0) {echo 'active';} ?>"></li>
    <?php $numero_slide++; ?>
    <?php endwhile; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $active = 1; ?>
    <?php while( have_rows( 'slider' ) ) : the_row(); ?>
    <div class="item <?php if($active==1) {echo 'active';} ?>">
      <img src="<?php the_sub_field('imagen_slider'); ?>" alt="<?php the_sub_field('titulo'); ?>">
      <div class="carousel-caption">
        <h2><?php the_sub_field('titulo_slider'); ?></h2>
        <h3><?php the_sub_field('subtitulo_slider'); ?></h3>
      </div>
    </div>
    <?php $active++; ?>
    <?php endwhile; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#starchitects-carousel<?php echo $dif_id; ?>" role="button" data-slide="prev">
    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
    <!-- <span class="sr-only">Previous</span> -->
  </a>
  <a class="right carousel-control" href="#starchitects-carousel<?php echo $dif_id; ?>" role="button" data-slide="next">
    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
    <!-- <span class="sr-only">Next</span> -->
  </a>
</div>
<?php endif; ?>
