<?php
/* Footer
 ----------------------------------*/
?>

</main>

<?php if(!is_page_template('sh-page-multiporpuse.php')) { ?>
<footer class="Footer">

	<div class="firma">
		<p>© 2015 StArchitects-Todos los derechos reservados</p>
		<p>diseño: <a href="http://puntonaranja.com.mx/">PUNTO|NARANJA.com.mx</a></p>
	</div>	
    
<!--     <section class="u-contenedor">
    	
    	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/"></a>
    	</aside>
    </section>    -->  

</footer>
<?php } ?>

<!-- JS personalizados del tema -->
<?php waypoints(); // Librería que detecta puntos en el scroll de pantalla ?>
<?php bootstrap(); // framework Bootsrap ?>
<?php bootstrapMaterial(); // Bootsrap - Material ?>
<?php ripples(); // Complemento de Bootsrap - Material ?>
<?php themejs(); // Los scripts personalizados del tema ?>


<?php wp_footer(); ?>
</body>
</html>