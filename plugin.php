<?php 
/**
 * Plugin Name: Alerta de bienvenida :D
 * Plugin URI: http://localhost:8080/
 * Description: este plugin nos mostrara una bienvenida :D
 * Author: Pablo Monteserín
 * 
 */

add_action('wp_footer', function(){?>

<script>
	alert("Bienvenido. Espero que tenga un hermoso dia :D");
    
</script>
<?php }  ,9999); ?>