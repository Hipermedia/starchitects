<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>
<?php if( have_rows( 'slider' ) ) : ?>
<?php $dif_id = rand(1,999999999); ?>
  <!-- Place somewhere in the <body> of your page -->
  <div id="starchitects-carousel<?php echo $dif_id; ?>" class="flexslider starchitects-flexslider">
    <ul class="slides">
      <?php while( have_rows( 'slider' ) ) : the_row(); ?>
        <li>
          <img src="<?php the_sub_field('imagen_slider'); ?>" alt="<?php the_sub_field('titulo'); ?>" />
          <div class="flex-caption">
            <h2><?php the_sub_field('titulo_slider'); ?></h2>
            <h3><?php the_sub_field('subtitulo_slider'); ?></h3>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>

<script>
// Can also be used with $(document).ready()
jQuery(window).load(function() {
  jQuery('#starchitects-carousel'+<?php echo $dif_id; ?>).flexslider({
    animation: "slide",
    directionNav: false
  });
});
</script>