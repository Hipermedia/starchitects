<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>
<?php if( have_rows( 'galeriaSlider' ) ) : ?>
<?php $dif_id = rand(1,999999999); ?>
  <section class="CoverSlider"> 
    <div id="galeria-slider<?php echo $dif_id; ?>" class="flexslider">
        <ul class="slides">
          <?php while (have_rows('galeriaSlider')) : the_row(); ?>
            <li class="CoverSlider-slide">
              <a class="CoverSlider-slideImage" href="<?php the_sub_field('url_galeriaSlider'); ?>">
                <img src="<?php the_sub_field('Imagen_galeriaSlider'); ?>" alt="">
              </a>
              <div class="CoverSlider-slideCaption">
                <?php the_sub_field('editor_galeriaSlider'); ?>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
    </div>
  
    <div id="galeria-slider-thumb-nav<?php echo $dif_id; ?>" class="flexslider carousel">
        <ul class="slides">
          <?php while (have_rows('galeriaSlider')) : the_row(); ?>
            <li class="CoverSlider-slide">
              <img src="<?php the_sub_field('Imagen_galeriaSlider'); ?>" alt="">
            </li>
          <?php endwhile; ?>
        </ul>
    </div>
  </section>
<?php endif; ?>

<script>
  jQuery('#galeria-slider-thumb-nav'+<?php echo $dif_id; ?>).flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 137.5,
    asNavFor: '#galeria-slider'+<?php echo $dif_id; ?>
  });

  jQuery('#galeria-slider'+<?php echo $dif_id; ?>).flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#galeria-slider-thumb-nav"+<?php echo $dif_id; ?>
  });
</script>


